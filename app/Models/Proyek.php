<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $primaryKey= 'id';

    protected $fillable = [
        'judul',
        'jenis',
        'detail',
        'tgl_mulai', 
        'tgl_selesai', 
        'harga', 
        'progres',
        'keunggulan',
        'durasi',
        'user_id',
        'deal'
    ];

    // public function freelancer(){
    //     return $this->hasMany(Freelancer::class);
    // }
    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class);
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
