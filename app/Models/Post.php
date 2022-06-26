<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['user_id','floor','name','body'];

    public function scopeLatestPosts($query)
    {
        $query -> orderBy('id','desc');
    }
    
    /* 記事に紐づく階を取得 */
    public function floors()
    {
        return $this->hasMany(Floor::class);
    }
    
}
