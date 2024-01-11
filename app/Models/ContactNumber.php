<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactNumber extends Model
{
    use HasFactory;

    private static $contact_number;
    protected $fillable = ['schoolName','name' ,'title', 'department', 'contact', 'designation','date'];


    public static function storeContactNumberNew($request)
    {
        self::$contact_number                  = new ContactNumber();
        self::$contact_number->schoolName      = $request->schoolName;
        self::$contact_number->name            = $request->name;
        self::$contact_number->title           = $request->title;
        self::$contact_number->department      = $request->department;
        self::$contact_number->contact         = $request->contact;
        self::$contact_number->designation     = $request->designation;
        self::$contact_number->date            = $request->date;
        self::$contact_number->save();
    }


    public static function updateContactNumberNew($request, $id)
    {
        self::$contact_number              = ContactNumber::find($id);
        self::$contact_number->schoolName      = $request->schoolName;
        self::$contact_number->name            = $request->name;
        self::$contact_number->title           = $request->title;
        self::$contact_number->department      = $request->department;
        self::$contact_number->contact         = $request->contact;
        self::$contact_number->designation     = $request->designation;
        self::$contact_number->date            = $request->date;
        self::$contact_number->save();
    }


    public static function deleteContactNumberNew($id)
    {
        self::$contact_number = ContactNumber::find($id);
        self::$contact_number->delete();
    }
}
