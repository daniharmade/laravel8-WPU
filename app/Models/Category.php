<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //KALO filelabel itu yang gak boleh diisi, selain itu boleh

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
