<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    private static $facility;
    protected $fillable = ['title','description'];
    public static function storeFacilityNew($request)
    {
        self::$facility                 = new Facility();
        self::$facility->title          = $request->title;
        self::$facility->description    = $request->description;
        self::$facility->save();
    }

    public static function updateFacilityNew($request, $id)
    {
        self::$facility = Facility::find($id);

        self::$facility->title          = $request->title;
        self::$facility->description    = $request->description;
        self::$facility->save();
    }

    public static function deleteFacilityNew($id)
    {
        self::$facility = Facility::find($id);
        self::$facility->delete();
    }
}
