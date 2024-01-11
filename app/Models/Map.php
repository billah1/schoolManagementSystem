<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    private static $map;
    protected $fillable = ['title','link'];
    public static function storeMapNew($request)
    {
        self::$map                 = new Map();
        self::$map->title          = $request->title;
        self::$map->link           = $request->link;
        self::$map->save();
    }

    public static function updateMapNew($request, $id)
    {
        self::$map = Map::find($id);

        self::$map->title          = $request->title;
        self::$map->link           = $request->link;
        self::$map->save();
    }

    public static function deleteMapNew($id)
    {
        self::$map = Map::find($id);
        self::$map->delete();
    }
}
