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
        $portfolio = Portfolio::with('pictures')->get();
        return view ('backend.pages.portfolio',compact('portfolio'));
    }

     public function tambah_portfolio(Request $request){
        // $request->validate([
        //     ''       =>'required|integer',
        //                 'id'       => 'required|string',
        //     'deskripsi'          => 'nullable|string',
        // ]);
          $thumbnailPath = null; 
// dd($request->all());
        // if ($request->hasFile('thumbnail')) {
        //     $thumbnailPath = $request->file('thumbnail')
        //         ->store('portfolio/thumbnail', 'public');
        // }
           if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = uniqid().'_thumbnail_'.$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('inputan/thumbnail/img'), $thumbnailName);
        $thumbnailPath = 'inputan/thumbnail/img/'.$thumbnailName;
    }

         $portfolio = Portfolio::create([
            'judul'   => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $thumbnailPath
         ]);

        $portfolio_id = $portfolio->id;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                $file->move(public_path('inputan/thumbnail/detailimg'), $fileName);

                DetailPicture::create([
                    'portfolio_id' => $portfolio_id ,
                    'gambar'     => $fileName,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
     }
     public function deletePicture($id)
{
    $picture = DetailPicture::findOrFail($id);

    // hapus file fisik
    $filePath = public_path($picture->gambar);
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    $picture->delete();

    return response()->json([
        'success' => true
    ]);
}

public function edit_portfolio(Request $request, $id)
{
    $portfolio =   portfolio::find($id);
       $data = [
    'judul'     => $request->judul,
    'deskripsi' => $request->deskripsi,
];

// cek jika ada thumbnail baru
if ($request->hasFile('thumbnail')) {

    $thumbnail = $request->file('thumbnail');
    $thumbnailName = uniqid().'_thumbnail_'.$thumbnail->getClientOriginalName();
    $thumbnail->move(public_path('inputan/thumbnail/img'), $thumbnailName);

    $data['gambar'] = 'inputan/thumbnail/img/' . $thumbnailName;
}

// update data
Portfolio::where('id', $id)->update($data);
        //  dd($id);   
    $portfolio_id = $id;
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                $file->move(public_path('inputan/thumbnail/detailimg'), $fileName);

                DetailPicture::create([
                    'portfolio_id' => $portfolio_id ,
                    'gambar'     => $fileName,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        return response()->json([
        'status' => 1,
        'message' => 'Portfolio berhasil diupdate'
    ]);
}
public function destroy(Portfolio $portfolio)
{
    
    foreach ($portfolio->pictures as $picture) {
        $filePath = public_path('inputan/thumbnail/detailimg/'.$picture->gambar);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $picture->delete();
    }

    if ($portfolio->gambar && file_exists(public_path($portfolio->gambar))) {
        unlink(public_path($portfolio->gambar));
    }
    $portfolio->delete();

    return response()->json([
        'status'  => 1,
        'message' => 'Portfolio & gambar berhasil dihapus'
    ]);
}


}
    