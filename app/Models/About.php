<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $about;
    protected $fillable = ['title', 'description'];


    public static function storeAboutNew($request)
    {
        self::$about                = new About();
        self::$about->title         = $request->title;
        self::$about->description   = $request->description;
        self::$about->save();
    }


    public static function updateAboutNew($request, $id)
    {
        self::$about                = About::find($id);
        self::$about->title         = $request->title;
        self::$about->description   = $request->description;
        self::$about->save();
    }


    public static function deleteAboutNew($id)
    {
        self::$about        = About::find($id);
        self::$about->delete();
    }
}
