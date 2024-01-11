<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected  static $footer ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['image','description','address','mobile','email',];

    public  static function getImageUrl($request)
    {

        if ($request->hasFile('image')) {
            self::$imageFile        = $request->file('image');
            self::$imageName        = self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;
            return self::$imageUrl;
        } else {
            // Handle case where no file is uploaded
            return null;
        }
    }

    public static function storeFooterNew($request)
    {
        self::$footer                 = new Footer();
        self::$footer->address        = $request->address;
        self::$footer->mobile         = $request->mobile;
        self::$footer->email          = $request->email;
        self::$footer->description    = $request->description;
        self::$footer->image          = self::getImageUrl($request);
        self::$footer->save();
    }

    public static function updateFooterNew($request,$id)
    {
        self::$footer = Footer::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$footer->image))
            {
                unlink(self::$footer->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$footer->image;

        }

        self::$footer->address        = $request->address;
        self::$footer->mobile         = $request->mobile;
        self::$footer->email          = $request->email;
        self::$footer->description    = $request->description;
        self::$footer->image           = self::$imageUrl;
        self::$footer->save();

    }

    public static function deleteFooterNew($id)
    {
        self::$footer = Footer::find($id);
        if (file_exists(self::$footer->imageFile))
        {
            unlink(self::$footer->imageFile);
        }
        self::$footer->delete();

    }



}
