<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $connection = 'mysql';
    protected $table = "member";
    protected $primaryKey = 'id';
    protected $hidden = ["created_at","updated_at"];
    protected $guarded = [];
    protected $fillable = [
        "id",
        "nama",
        "rerata",
        "kode"
    ];
}
