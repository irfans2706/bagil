<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $connection = 'mysql';
    protected $table = "kelompok";
    protected $primaryKey = 'id';
    protected $hidden = ["created_at","updated_at"];
    protected $guarded = [];
    protected $fillable = [
        "id",
        "nama",
        "jumlah",
        "kode"
    ];
}
