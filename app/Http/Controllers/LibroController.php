<?php

namespace App\Http\Controllers;
use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::paginate(2);

        return view('Libros.index',[
            'libros' => $libros,
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'     =>'required|min:5|max:255',
            'autor'     =>'required|min:5|max:255',
            'genero'     =>'required|min:5|max:255',
            'editoria'     =>'required|min:5|max:255',
            'descripcion'     =>'required|min:5',
        ]);

        $libro             = new Libro();
        $libro->nombre     = $request->nombre;
        $libro->autor      = $request->autor;
        $libro->genero     = $request->genero;
        $libro->editoria  = $request->editoria;
        $libro->descripcion = $request->descripcion;

        $libro->save();

        return redirect()->route('libros.index')->with('status', 'Nuevo libro creado');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('Libros.show',[
            'libro' => $libro,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $libro = Libro::findOrFail($id);
    return view('Libros.edit',[
        'libro' => $libro,
    ]);
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
        $libro= Libro::findOrFail($id);
        $libro->nombre      =$request->nombre;
        $libro->autor      =$request->autor;
        $libro->genero      =$request->genero;
        $libro->editoria     =$request->editoria;
        $libro->descripcion      =$request->descripcion;

        $libro->save();

        return redirect()->route('libros.index')->with('status', 'El libro fue modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')->with('status', 'El libro fue eliminado');
    }
}
