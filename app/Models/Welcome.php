<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;
    private static $welcome;
    protected $fillable = ['title','description'];
    public static function storeWelcomeNew($request)
    {
        self::$welcome                 = new Welcome();
        self::$welcome->title          = $request->title;
        self::$welcome->description    = $request->description;
        self::$welcome->save();
    }

    public static function updateWelcomeNew($request, $id)
    {
        self::$welcome = Welcome::find($id);

        self::$welcome->title          = $request->title;
        self::$welcome->description    = $request->description;
        self::$welcome->save();
    }

    public static function deleteWelcomeNew($id)
    {
        self::$welcome = Welcome::find($id);
        self::$welcome->delete();
    }
}
