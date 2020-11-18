<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('admin.post.index', compact('posts'));
    }

    public function details($id)
    {
    	$post = Post::find($id);
    	return view('admin.post.details', compact('post'));
    }

    public function create()
    {
    	return view('admin.post.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'body' => 'required',
    		'publish_date' => 'required',
    		'image' => 'required',
    	]);

    	try {
            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->publish_date = $request->publish_date;

            if ($request->hasfile('image')) {
                $path = public_path() . '/posts';
                $image = $request->file('image');
                $fileName = uniqid() . $image->getClientOriginalName();
                $image->move($path, $fileName);

                $post->image = $fileName;
                $post->save();
            }

        } catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al crear el registro');
        }

    	return redirect()->route('posts');
    }

    public function edit($id)
    {
    	$post = Post::find($id);
    	return view('admin.post.update', compact('post'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'body' => 'required',
    		'publish_date' => 'required',
    	]);

        try {
            $post = Post::find($id);
            $post->title = $request->title;
            $post->body = $request->body;
            $post->publish_date = $request->publish_date;
            $post->save();

        } catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al actualizar el registro');
        }

    	return redirect()->route('posts');
    }

    public function destroy($id)
    {
    	try {
    		$post = Post::find($id);
    		$path = public_path() . '/posts/' . $post->image;
    		
  			if (unlink($path)) {
  				$post->delete();
  			} else {
  				$post->delete();
  			}
    		
    	} catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, no se pudo eliminar el registro');
        }

    	return redirect()->route('posts');
    }

    public function deleteImage($id)
    {
        try {            
            $post = Post::find($id);
            $path = public_path() . '/posts/' . $post->image;
                
            if (unlink($path)) {
                $post->image = '';
                $post->save();
            }

        } catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, no se pudo eliminar la imagen');
        }

        return redirect()->route('posts');
    }

    public function uploadImage($id)
    {
    	$post = Post::find($id);
        return view('admin.post.upload', compact('post'));
    }

    public function updateImage(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);

        try {
            if ($request->hasfile('image')) {
                $path = public_path() . '/posts';
                $image = $request->file('image');
                $fileName = uniqid() . $image->getClientOriginalName();
                $image->move($path, $fileName);

                $post = Post::find($id);
                $post->image = $fileName;
                $post->save();
            }
        } catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, no se pudo subir la imagen');
        }
        
        return redirect()->route('posts');
    }
}
