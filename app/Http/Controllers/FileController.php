<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;

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

    public function store(FileRequest $request)
    {
        $theFile = $request->file('file');

        Archivo::create([
            'user_id' => $request->user()->id,
            'name'          => request('name'),
            'description'   => request('description'),
            'archivo'       => $theFile->store('files','public')
        ]);
        
        return redirect('/');

    }
}
