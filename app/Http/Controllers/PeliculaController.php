<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['peliculas']=Pelicula::paginate(5);
        return view('pelicula.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       //$datos['categoria_id'] = Pelicula::paginate(5);
       $datos = Categoria::all();

        return view('pelicula.create')->with(['datos'=>$datos]) ;
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
        //$datosPelicula = request()->all();
        $datosPelicula = request()->except('_token');
        $pelicula = new Pelicula();
        $pelicula->Nombre = $request->get('Nombre');
        $pelicula->Director = $request->get('Director');
        $pelicula->Pais = $request->get('Pais');
        $pelicula-> Estreno = $request->get('Estreno');
        $pelicula->categoria_id = $request->get('categoria_id');

        $pelicula->save();
        return redirect ('/pelicula');

       // Pelicula::insert($datosPelicula);
        //return response()->json($datosPelicula);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $datos = Categoria::all();
        $pelicula=Pelicula::findOrFail($id);

        return view('pelicula.edit',compact ('pelicula'))->with(['datos'=>$datos]) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPelicula = request()->except(['_token','_method']);//recepcionamos datos quitamos el token  y el metodo quen es  lo que quitamos en el edit @csrf y PATCH
        Pelicula::where('id','=',$id)->update($datosPelicula); //buscamos registro que sea igual al id y hacemos actualizacion

        $datos = Categoria::all();
        $pelicula=Pelicula::findOrFail($id); //vuelvo a buscar la info x el id

        return redirect('/pelicula'); //retorno los datos al formulario


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)//aqui recepcionamos datos del id para borrar y este proviene de el index
    {
        //
        Pelicula::destroy($id);
        return redirect('pelicula');
    }
}
