<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function __construct()
    {
        
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

        $request->validate([
            $theFile  => 'required|file|max:10240'
        ]);

        $file = Archivo::create([
            'name'          => request('name'),
            'description'   => request('description'),
            $theFile->store('files','public')
        ]);       

    }
}
