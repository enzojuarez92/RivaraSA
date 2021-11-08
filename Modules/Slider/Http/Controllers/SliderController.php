<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;
use Modules\Slider\Entities\Slider;

class SliderController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        return view('slider::admin.index', [
            'sliders' => Slider::all(),
        ]);
    }

    public function create()
    {
        return view('slider::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image_help' => 'nullable',
        ]);

        try {

            $slider = Slider::create($request->all());

            flash("PERFECTO! Es slider se guardó correctamente.")
                ->success()
                ->important();

            return redirect()
                ->route('slider.admin.edit', $slider);

        } catch (\Exception $ex) {

            flash("Error: ".$ex->getMessage())
                ->error()
                ->important();

            return back();
        }
    }

    public function edit(Slider $slider)
    {
        return view('slider::admin.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        try {

            $slider->update([
                'title' => $request->title,
                'description' => $request->description,
                'image_help' => $request->image_help,
                'visible' => !is_null($request->visible),
            ]);

            flash("PERFECTO! El slider se modificó correctamente.")
                ->success()
                ->important();

            return back();

        } catch (\Exception $ex) {

            flash("Error: ".$ex->getMessage())
                ->error()
                ->important();

            return back();
        }
    }

    public function destroy(Request $request, Slider $slider)
    {
        try {

            $slider->delete();

            flash("PERFECTO! Es slider se eliminó correctamente.")
                ->success()
                ->important();

            return back();

        } catch (\Exception $ex) {

            flash("Error: ".$ex->getMessage())
                ->error()
                ->important();

            return back();
        }
    }
}
