<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tag';
    protected $fillable = ['nama','slug'];

    public function post()
    {
        return $thics->belongsToMany(Post::class, 'post_tag', 'id_post', 'id_tags');
    }
}
