<?php

namespace App\Http\Controllers;

use App\Models\Flore;
use Illuminate\Http\Request;

/**
 * Class FloreController
 * @package App\Http\Controllers
 */
class FloreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flores = Flore::paginate();

        return view('flor.index', compact('flores'))
            ->with('i', (request()->input('page', 1) - 1) * $flores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $flore = new Flore();
        return view('flore.create', compact('flore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Flore::$rules);

        $flore = Flore::create($request->all());

        if($imagen = $request->file('imagen')){
            $destinationPath ='images/';
            $florimagen= uniqid().".".$request->imagen->extension();
            $imagen->move($destinationPath, $florimagen);
            $flore['imagen']= "$florimagen";
            $flore->imagen = $florimagen;
            $flore->save();
        }

        return redirect()->route('flor.index')
            ->with('success', 'Flor creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flore = Flore::find($id);

        return view('flore.show', compact('flore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flore = Flore::find($id);

        return view('flor.edit', compact('flore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Flore $flore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flore $flore,$id)
    {   
        request()->validate(Flore::$rules);
        $flore = Flore::find($id);
        $flore->update($request->all());

        if($imagen = $request->file('imagen')){
            $destinationPath ='images/';
            $florimagen= uniqid().".".$request->imagen->extension();
            $imagen->move($destinationPath, $florimagen);
            $flore['imagen']= "$florimagen";
            $flore->imagen = $florimagen;
            $flore->save();
        }

        return redirect()->route('flor.index')
            ->with('success', 'Flor actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $flore = Flore::find($id)->delete();

        return redirect()->route('flor.index')
            ->with('success', 'Flor eliminada correctamente');
    }
}
