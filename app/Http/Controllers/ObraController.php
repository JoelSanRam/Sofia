<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Image;

class ObraController extends Controller
{
    public function index()
    {
    	$obras = Obra::all();
    	return view('admin.obra.index', compact('obras'));
    }

    public function details($id)
    {
        $obra = Obra::find($id);
        $images = Image::where('obra_id', $id)->get();
        return view('admin.obra.details', compact('obra', 'images'));
    }

    public function create()
    {
    	return view('admin.obra.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'description' => 'required',
    		'dimension' => 'required',
    		'technique' => 'required',
    		'status' => 'required',
            'publish_date' => 'required',
    		'images' => 'required',
    	]);

        try {
            $obra = new Obra();
            $obra->name = $request->name;
            $obra->description = $request->description;
            $obra->dimension = $request->dimension;
            $obra->technique = $request->technique;
            $obra->status = $request->status;
            $obra->publish_date = $request->publish_date;
            $obra->save();

            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = public_path() . '/obras';
                    $fileName = uniqid() . $image->getClientOriginalName();
                    $image->move($path, $fileName);

                    $file = new Image();
                    $file->obra_id = $obra->id;
                    $file->filename = $fileName;
                    $file->save();
                }
                \Session::flash('message', 'Registro Exitoso');
            }

        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al crear el registro');
        }

    	return redirect()->route('obras');
    }

    public function edit($id)
    {
    	$obra = Obra::find($id);
    	return view('admin.obra.update', compact('obra'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'dimension' => 'required',
            'technique' => 'required',
            'status' => 'required',
            'publish_date' => 'required',
        ]);

    	try {
            $obra = Obra::find($id);
            $obra->name = $request->name;
            $obra->description = $request->description;
            $obra->dimension = $request->dimension;
            $obra->technique = $request->technique;
            $obra->status = $request->status;
            $obra->publish_date = $request->publish_date;
            $obra->save();
            
            \Session::flash('message', 'Actualizacion Exitosa');

        } catch (\Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al actualizar el registro');
        }

    	return redirect()->route('obras');
    }

    public function destroy($id)
    {
    	try {
    		$obra = Obra::find($id);
            $images = Image::where('obra_id', $id)->get();

            if (count($images) > 0) { // posible bug
                foreach ($images as $image) {
                    $path = public_path() . '/obras/' . $image->filename;
                    unlink($path);
                }

                $obra->delete();
                Image::where('obra_id', $id)->delete();
                \Session::flash('message', 'Registro Eliminado');

            } else {

                $obra->delete();
                Image::where('obra_id', $id)->delete();
                \Session::flash('message', 'Registro Eliminado');

            }

    	} catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

    	return redirect()->route('obras');
    }

    // delete image (falta testear)
    public function deleteImage($id)
    {
        try {
            $image = Image::find($id);
            $path = public_path() . '/obras/' . $image->filename;

            if (unlink($path)) {
                $image->delete();
                \Session::flash('message', 'Imagen Eliminada');
            } 

        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar la imagen');
        }

        return redirect()->back();
    }

    public function coverImage($id)
    {
        try {
            $image = Image::find($id);
            $obra = Obra::find($image->obra_id);
            $obra->cover_image = $image->filename;
            $obra->save();
            \Session::flash('message', 'Imagen establecida como portada');

        } catch (Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al realizar la accion');
        }

        return redirect()->back();
    }

    public function uploadImages(Request $request, $id)
    {
        $this->validate($request, [
            'images' => 'required',
        ]);

        try {
            if ($request->hasfile('images')) {
                $obra = Obra::find($id);
                foreach ($request->file('images') as $image) {
                    $path = public_path() . '/obras';
                    $fileName = uniqid() . $image->getClientOriginalName();
                    $image->move($path, $fileName);

                    $file = new Image();
                    $file->obra_id = $obra->id;
                    $file->filename = $fileName;
                    $file->save();
                }

                \Session::flash('message', 'Imagenes subidas con exito');
            }

        } catch (Exception $e) {
            \Session::flash('message', 'Ocurrio un error, al subir las imagenes');
        }

        return redirect()->back();
    }

}
