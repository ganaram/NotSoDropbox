<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',[
            'only'  => ['create','store','edit','destroy','update']
        ]);

    }

    public function index()
    {

        $files = Archivo::paginate(10);

        return view('public.files.index')->withFiles($files);

    }

    public function create()
    {

        return view('public.files.create');

    }

    public function store()
    {
        $theFile = $request->file('file');

        request()->validate([
            $theFile  => 'required|file|max:10240',
            'description' => 'required|string|min:20'
        ],[
            'file.required' => 'Pero adjunta algo, zopenco.',
            'file.file' => 'Un archivo, cigoto.',
            'file.max'  => 'Tampoco me subas tu carpeta del porno.',
            'description.required' => 'Si hace falta invéntatela, pero no lo dejes vacío.',
            'description.string'   => 'Introduce texto, no el nuevo tema de Porta.',
            'description.min' => 'Mínimo 20 caracteres, desgraciao.'
        ]);

        $theFile = Archivo::create([
            'user_id'       => $request->user()->id,
            'file'          => $theFile->store('files','public'),
            'description'   => request('description')
        ]);
        
        return redirect('/');

    }
}
