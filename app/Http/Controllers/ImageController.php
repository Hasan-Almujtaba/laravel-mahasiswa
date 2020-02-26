<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(9);
        return view('gallery.index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'upload' => 'required|image',
            'keterangan' => 'required'
        ]);
        
        $file_name = time() . '.png';

        $request->file('upload')->storeAs('/public/image', $file_name);

        $gambar = new Image;
        $gambar->gambar = $file_name;
        $gambar->keterangan = $request->keterangan;
        $gambar->save();

        return redirect('image')->with('status', 'Berhasil Menambahkan Gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('gallery.detail', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('gallery.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $validateData = $request->validate([
            'old_image' => 'required',
            'upload' => 'image',
            'keterangan' => 'required'
        ]);

        if ($request->has('upload')) {
            Storage::delete('/public/image/' . $request->old_image);
            
            $file_name = time() . '.png';
            $request->file('upload')->storeAs('/public/image', $file_name);
        } else {
            $file_name = $request->old_image;
        }

        $image->gambar = $file_name;
        $image->keterangan = $request->keterangan;
        $image->save();

        return redirect('image')->with('status', 'Berhasil Mengubah Gambar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        // delete file
        Storage::delete('/public/image/' . $image->gambar);
        $image->delete();

        return redirect('image')->with('status', 'Berhasil Menghapus Data');
    }

    /**
     * Download Image.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $image = Image::find($id);
        $name = public_path('storage\\image\\' . $image->gambar);
        return response()->download($name);
    }
}
