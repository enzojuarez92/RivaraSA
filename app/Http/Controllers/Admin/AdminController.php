<?php

namespace App\Http\Controllers\Admin;

use App\Lead;
use App\Post;
use App\User;
use Analytics;
use App\Project;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        // $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7), 20);
        $contactos = Lead::all()->count();
        $posteos = Post::all()->count();
        $proyectos = Project::all()->count();
        $usuarios = User::all()->count();
        $leadsFont = DB::table('leads')
            ->join('parametros', 'leads.conocio', '=', 'parametros.id')
            ->select(DB::raw('COUNT(conocio) as value'), 'parametros.titulo as label', 'parametros.color')
            ->groupBy('conocio')
            ->get();

        $leads = DB::table('leads')
            ->join('parametros', 'leads.fuente', '=', 'parametros.id')
            ->select(DB::raw('COUNT(fuente) as value'), 'parametros.titulo as label', 'parametros.color')
            ->groupBy('fuente')
            ->get();

        return view('admin.dashboard', compact(
            'posteos',
            'proyectos',
            'usuarios',
            // 'analyticsData',
            'contactos',
            'leadsFont',
            'leads'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// SELECT COUNT(*) AS value, p.titulo AS label, p.color
// FROM leads l
// JOIN parametros p ON l.conocio = p.id
// GROUP BY l.conocio
