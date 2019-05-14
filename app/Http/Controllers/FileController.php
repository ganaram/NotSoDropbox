<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {

        $files = File::paginate(10);

        return view('public.files.index')->withFiles($files);

    }

    public function create()
    {

        return view('public.files.create');

    }

    public function store()
    {

        $file = File::create([
            'name'          => request('name'),
            'description'   => request('description')
        ])

    }
}
