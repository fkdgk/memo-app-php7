<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $fillable = ['type','floor_name'];


    /* 日本語を含む数値をソート */
    public function textSort($array)
    {
        $result = $array;
        natsort($result);
        return $result;
    }
    
    /* フロア一覧 */
    public function scopeFloors()
    {
        $datas = $this -> where('type','floor')->pluck('floor_name')->toArray();
        $result = $this -> textSort($datas);
        return $result;
    }

    /* フロア名でフィルタ */
    public static function filterByFloorName($name)
    {
        return Config::where('type','floor')->where('floor_name', $name);
    }

}
