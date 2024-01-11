<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    use HasFactory;
    private static $dropdown;
    protected $fillable = ['class', 'section','semester','date'];


    public static function storeDropDownNew($request)
    {
        $existingDropdown = Dropdown::where('class', $request->class)
            ->where('section', $request->section)
            ->where('semester', $request->semester)
            ->where('date', $request->date)
            ->first();

        if (!$existingDropdown) {
            self::$dropdown = new Dropdown();
            self::$dropdown->class = $request->class;
            self::$dropdown->section = $request->section;
            self::$dropdown->semester = $request->semester;
            self::$dropdown->date = $request->date;
            self::$dropdown->save();
            return true; // Indicate successful save
        }

        return false; // Indicate that the value already exists
    }



    public static function updateDropDownNew($request, $id)
    {
        self::$dropdown                = Dropdown::find($id);
        self::$dropdown->class         = $request->class;
        self::$dropdown->section       = $request->section;
        self::$dropdown->semester      = $request->semester;
        self::$dropdown->date          = $request->date;
        self::$dropdown->save();
    }


    public static function deleteDropDownNew($id)
    {
        self::$dropdown        = Dropdown::find($id);
        self::$dropdown->delete();
    }
}
