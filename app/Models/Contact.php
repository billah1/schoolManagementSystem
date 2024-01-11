<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    private static $contact;
    protected $fillable = ['name', 'email', 'subject', 'contact', 'message'];


    public static function storeContact($request)
    {
        self::$contact          = new Contact();
        self::$contact->name    = $request->name;
        self::$contact->email   = $request->email;
        self::$contact->subject = $request->subject;
        self::$contact->contact = $request->contact;
        self::$contact->message = $request->message;
        self::$contact->save();
    }


    public static function updateContact($request, $id)
    {
        self::$contact              = Contact::find($id);
        self::$contact->name        = $request->name;
        self::$contact->email       = $request->email;
        self::$contact->subject     = $request->subject;
        self::$contact->contact     = $request->contact;
        self::$contact->message     = $request->message;
        self::$contact->save();
    }


    public static function deleteContact($id)
    {
        self::$contact = Contact::find($id);
        self::$contact->delete();
    }
}
