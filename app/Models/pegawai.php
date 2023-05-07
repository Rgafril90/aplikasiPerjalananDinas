<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    // public function badan() {
    //     // one to one relationship
    //     // satu pegawai memiliki 1 badan/devisi
    //     return $this->belongsTo('App\Models\badan');
    // }
}
