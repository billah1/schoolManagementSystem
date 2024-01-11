<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurHistory extends Model
{
    use HasFactory;

    private static $our_history;
    protected $fillable = ['title', 'description'];


    public static function storeHistory($request)
    {
        self::$our_history                = new OurHistory();
        self::$our_history->title         = $request->title;
        self::$our_history->description   = $request->description;
        self::$our_history->save();
    }


    public static function updateHistory($request, $id)
    {
        self::$our_history                = OurHistory::find($id);
        self::$our_history->title         = $request->title;
        self::$our_history->description   = $request->description;
        self::$our_history->save();
    }


    public static function deleteHistory($id)
    {
        self::$our_history        = OurHistory::find($id);
        self::$our_history->delete();
    }
}
