<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Post;
use App\Image;

class DataController extends Controller
{
    public function index()
    {
    	return view('cliente.index');
    }

    public function contacto()
    {
    	return view('cliente.contact');
    }

    public function proyectos()
    {
    	$items = Obra::all();
    	return view('cliente.project', compact('items'));
    }

    public function blog()
    {
    	$items = Post::paginate(2);
    	return view('cliente.blog', compact('items'));
    }

    public function detallesBlog($id)
    {
    	$item = Post::find($id);
    	return view('cliente.detalleblog', compact('item'));
    }

    public function detallesProject($id)
    {
    	$item = Obra::find($id);
    	$images = Image::where('obra_id', $id)->get();
    	return view('cliente.detalleproject', compact('item', 'images'));
    }
}
