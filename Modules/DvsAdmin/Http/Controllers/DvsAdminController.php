<?php

namespace Modules\DvsAdmin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DvsAdminController extends Controller
{

    protected $admins = [
        'jg.pradi@gmail.com',
        'leonardo@mail.com',
        'leonardopardo@gmail.com',
    ];

    public function check()
    {
        if (!in_array(Auth::user()->email, $this->admins)) {
            abort(403, 'Solo para equipo DVS');
        }
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->check();
        return view('dvsadmin::index');
    }

    public function testEmail()
    {
        $this->check();
        try {
            Mail::to('jg.pradi@gmail.com')
                ->queue(new \Modules\DvsAdmin\Emails\TestEmail());
            flash("Correos enviados correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    public function migrateFresh()
    {
        $this->check();
        try {
            if (env('APP_ENV') != 'production') {
                \Artisan::call('migrate:fresh --seed');
                flash("Se borro todo, todillo!")
                    ->success()->important();
            } else {
                flash("Estas en producción")
                    ->success()->important();
            }

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    public function queueRestart()
    {
        $this->check();
        try {
            \Artisan::call('queue:restart');

            flash("<b>Queues Reiniciadas:</b> ".\Artisan::output())
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    public function telescopeRestart()
    {
        $this->check();
        try {
            \Artisan::call('telescope:clear');

            flash("<b>Telescope Reiniciado</b> ".\Artisan::output())
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    public function cacheClear()
    {
        $this->check();
        try {
            \Artisan::call('cache:clear');
            \Artisan::call('view:clear');
            \Artisan::call('config:clear');
            flash("Se borro el cache de vistas Correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }
    public function logClear()
    {
        $this->check();
        try {
            exec('rm ' . storage_path('logs/*.log'));

            flash("Se borro el log Correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }

    public function notiProvisorias()
    {
        $this->check();
        $notificaciones = \Modules\Payment\Entities\NotiProvisoria::take(30)->orderBy('id', 'DESC')->get();
        return view('dvsadmin::notificacionesProvisorias', compact(
            'notificaciones'
        ));
    }

    // FAILED JOBS

    public function failedJobs()
    {
        $failed = \DB::select('SELECT * FROM failed_jobs ORDER BY id DESC');

        return view('dvsadmin::failed_jobs', compact(
            'failed'
        ));
    }

    public function failedJobsReset()
    {
        $this->check();
        try {

            \Artisan::call('queue:flush');

            flash("Colas de trabajo eliminadas.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }
    }
    public function failedJobsRetry()
    {
        $this->check();
        try {

            \Artisan::call('queue:retry all');

            flash("Se reiniciaron las colas de trabajo correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {$ex->getMessage()}")->error()->important();
            return back();
        }

    }

    public function desarrollo()
    {
        // php artisan module:enable Blog
        \Illuminate\Support\Facades\Artisan::call('module:enable Feriados');

    }

}
