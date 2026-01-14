<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPicture extends Model
{
    use HasFactory;
    protected $table ='picture_detail';
    protected $guarded =[];

    
    public function portfolio_id(){
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }
}
