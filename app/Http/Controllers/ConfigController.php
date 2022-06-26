<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Requests\ConfigFloorUpdateRequest;
use App\Http\Requests\ConfigFloorDeleteRequest;
use App\Http\Requests\ConfigFloorStoreRequest;

class ConfigController extends Controller
{
    /* フロア作成 */
    public function floorStore(ConfigFloorStoreRequest $request)
    {
        $request -> validated();
        $name = $request->floor_name;
        Config::create([
            'type' => 'floor',
            'floor_name' => $name,
        ]);
        return redirect()->route('config.floor.index')->with('alert',['success','作成しました',$name]);
    }

    /* フロア削除 */
    public function floorDelete(ConfigFloorDeleteRequest $request)
    {
        $request -> validated();
        $name = $request->name;
        Config::filterByFloorName($name)->first()->delete(); // １件だけ削除
        return redirect()->back()->with('alert',['danger','削除しました',$name]);
    }
    
    /* フロア設定更新 */
    public function floorUpdate(ConfigFloorUpdateRequest $request)
    {
        $request -> validated();
        $floors = $request -> floors;

        /* 空データチェック */
        if(in_array(null, $floors, true)){
            return redirect() -> back()->with('alert',['danger','error!!','空のデータが含まれてます']);
        }

        /*  フロアデータを全削除後、新規保存 */
        Config::where('type','floor')->delete();
        foreach ($floors as $floor) {
            Config::create([
                'type' => 'floor',
                'floor_name' => $floor,
            ]);
        }
        return redirect() -> back()->with('alert',['success','更新しました']);

    }

    /* フロア設定一覧表示 */
    public function floorIndex()
    {
        $floors = Config::floors();
        return view('config.floor.index',compact('floors'));
    }

    /* フロア設定一覧表示 */
    public function floorCreate()
    {
        return view('config.floor.create');
    }

}
