<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\About;

class AboutController extends Controller
{
    public function about(){
        $abouts = About::limit(1)->get();
        return view ('backend.pages.about',compact('abouts'));
    }

      public function tambah_about(Request $request){
          $thumbnailPath = null; 

            if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = uniqid().'_thumbnail_'.$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('inputan/thumbnail/about'), $thumbnailName);
            $thumbnailPath = 'inputan/thumbnail/about/'.$thumbnailName;
            }

         $about = About::create([
            'judul'   => $request->judul,
            'deskripsi' => $request->deskripsi,
            'img' => $thumbnailPath
         ]);
                return response()->json([
                'status' => 1,
                'message' => 'Portfolio berhasil diupdate'
            ]);
       
     }
     
     public function edit_about(Request $request, $id)
{
    $about =   About::find($id);
       $data = [
    'judul'     => $request->judul,
    'deskripsi' => $request->deskripsi,
];

// cek jika ada thumbnail baru
if ($request->hasFile('thumbnail')) {

    $thumbnail = $request->file('thumbnail');
    $thumbnailName = uniqid().'_thumbnail_'.$thumbnail->getClientOriginalName();
    $thumbnail->move(public_path('inputan/thumbnail/about'), $thumbnailName);

    $data['img'] = 'inputan/thumbnail/about/' . $thumbnailName;
}

// update data
About::where('id', $id)->update($data);
        //  dd($id);   

        return response()->json([
        'status' => 1,
        'message' => 'About berhasil diupdate'
    ]);
} 
     
}
