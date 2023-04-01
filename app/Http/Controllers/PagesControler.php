<?php

namespace App\Http\Controllers;

use Goutte;
use App\Tag;
use App\Lead;
use App\Post;
use App\Team;
use App\Client;
use App\Partner;
use App\Project;
use App\Parametro;
use App\ProjectType;
use App\Mail\testEmail;
use Illuminate\Http\Request;
use App\Events\ContactoEnviado;
use Illuminate\Support\Facades\DB;
use Modules\Slider\Entities\Slider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class PagesControler extends Controller
{
    public function home()
    {
        try {
            
            $tables['pizarra'] = $this->scrap('#pizarra', 5);
            $tables['rofex'] = $this->scrap('#rofex', 3);
            $tables['matba'] = $this->scrap('#matba', 3);
            $tables['chicago'] = $this->scrap('#chicago', 3);
            $posts = Post::publicados()->orderBy(DB::raw('RAND()'))->take(3)->get();
            $clients = Client::all();
            return view('frontend.home', compact(
                'posts',
                'clients',
                'tables'
            ));
        } catch (\Exception $ex) { 
            
        } //TODO: Ver si lo dejamos asi
    }

    public function scrap($id, $chunk = 4)
    {
        return Cache::remember('tablas', 1800, function () use ($id, $chunk) {
            $crawler = Goutte::request('GET', 'http://eduardoberaza.com/');
            $encabezado = [];
            $salida = [];
            $crawler->filter($id)->each(function ($node) use (&$encabezado, &$salida) {
                $node->filter('table th')->each(function ($node) use (&$encabezado, &$salida) {
                    $encabezado[] = $node->text();
                });
                $node->filter('table td')->each(function ($node) use (&$encabezado, &$salida) {
                    $salida[] = $node->text();
                });
            });
            $divArrayEncabeado = array_chunk($encabezado, $chunk);
            $divArrayBody = array_chunk($salida, $chunk);
            $salida = [
                'encabezado' => $divArrayEncabeado,
                'body' => $divArrayBody
            ];
            return $salida;            
        });
    }
    public function organico()
    {
        return view('frontend.organico');
    }

    public function nosotros()
    {
        $partners = Partner::all();
        $team = Team::all();
        $clients = Client::all();
        // $posts = Post::publicados()->orderBy(DB::raw('RAND()'))->take(4)->get();
        return view('frontend.nosotros', compact(
            'partners',
            'clients',
            'team'
        ));
    }

    public function servicios($servicio = 'insumos')
    {
        $contactoPorArea = [];
        return view('frontend.servicios', compact(
            'contactoPorArea',
            'servicio'
        ));
    }

    public function verPost(Post $post)
    {
        if ($post->isPublished() || auth()->check()) {
            return view('verPost', compact('post'));
        }

        abort(404);
    }

    // public function proyectos(Post $post)
    // {
    //         $post->isPublished();
    //         $posts = Post::publicados()->get();
    //         $categories = Category::all();
    //         return view('proyecto', compact(
    //             'post',
    //             'categories',
    //             'posts'
    //         ));
    // }

    public function contacto()
    {
        $conocio = Parametro::where('modelo', 'contacto')->get();
        return view('frontend.contacto', compact(
            'conocio'
        ));
    }

    public function enviarMensaje(Request $request)
    {
        if (env('APP_ENV') == 'production') {
            $data = $request->validate([
                'name' => 'required|max:200|min:4',
                'telefono' => 'max:180',
                'email' => 'required|email',
                'conocio' => 'required',
                'subject' => 'required|max:200:min:4',
                'message' => 'required',
                'g-recaptcha-response' => 'required|recaptcha',
            ]);
            $data['fuente'] = 1;
        } else {
            $data = $request->validate([
                'name' => 'required|max:200|min:4',
                'telefono' => 'max:180',
                'email' => 'required|email',
                'conocio' => 'required',
                'subject' => 'required|max:200:min:4',
                'message' => 'required',
            ]);
            $data['fuente'] = 1;
        }

        ContactoEnviado::dispatch($data);
        return view('frontend.gracias');
    }

    public function registrarNews(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        $buscar = Lead::where('email', $request->email)->first();

        if (!$buscar) {
            $contacto = new Lead;
            $contacto->email = $request->email;
            $contacto->fuente = 2;
            $contacto->conocio = $request->conocio;
            $contacto->save();
        }
        return view('frontend.gracias');
    }

    public function verProyecto($url)
    {
        try {
            $project = Project::where('url', $url)->firstOrFail();
            $conocio = Parametro::where('modelo', 'contacto')->get();
            $relacionados = $project->relacionados()->take(3);
            $tags = Tag::all();
            $types = ProjectType::all();
            return view('frontend.projects.show', compact(['project', 'conocio', 'relacionados', 'tags', 'types']));
        } catch (\Exception $ex) {
            return back()->with('war', $ex->getMessage());
        }
    }

    public function proyectos(Request $request)
    {
        try {
            $projects = Project::all();
            if ($request->tag) {
                $tag = $request->tag;
                $projects = Project::whereHas('tags', function ($query) use ($tag) {
                    $query->where('url', $tag);
                })->get();
            }
            if ($request->project_type) {
                $projects = $projects->where('project_type_id', $request->project_type);
            }
            $conocio = Parametro::where('modelo', 'contacto')->get();
            $tags = Tag::all();
            $types = ProjectType::all();
            return view('frontend.projects.index', compact(['projects', 'conocio', 'tags', 'types']));
        } catch (\Exception $ex) {
            dd($ex);
            return back()->with('war', $ex->getMessage());
        }
    }

    public function testEmail()
    {
        Mail::to('jg.pradi@gmail.com')
            ->queue(new testEmail());
        return 'Correos';
    }
}
