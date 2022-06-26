<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable=['post_id','name'];

    /* 階に紐づく記事を取得 */
    public function post()
    {
        return $this -> belongsTo(Post::class);
    }
}
