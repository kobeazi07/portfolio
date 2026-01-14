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
use App\Models\Portfolio;
use App\Models\DetailPicture;
class PortfolioController extends Controller
{
    public function dashboard(){
        return view ('backend.pages.dashboard');
    }
        public function portfolio(){
        return view ('backend.pages.portfolio');
    }

     public function tambah_portfolio(Request $request){
        // $request->validate([
        //     ''       =>'required|integer',
        //                 'id'       => 'required|string',
        //     'deskripsi'          => 'nullable|string',
        // ]);
          $thumbnailPath = null; 
// dd($request->all());
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')
                ->store('portfolio/thumbnail', 'public');
        }

         $portfolio = Portfolio::create([
            'judul'   => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $thumbnailPath
         ]);

        $portfolio_id = $portfolio->id;

     if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $path = $file->store('portfolio/detail', 'public');

            DetailPicture::create([
                'portfolio_id' => $portfolio_id ,
                'gambar'     => $path,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
     }
}
    