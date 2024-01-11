<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected  static $gallery ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['image','title'];

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

    public static function storeGalleryNew($request)
    {
        self::$gallery                 = new Gallery();
        self::$gallery->title          = $request->title;
        self::$gallery->image          = self::getImageUrl($request);
        self::$gallery->save();
    }

    public static function updateGalleryNew($request,$id)
    {
        self::$gallery = Gallery::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$gallery->image))
            {
                unlink(self::$gallery->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$gallery->image;

        }

        self::$gallery->title          = $request->title;
        self::$gallery->image          = self::$imageUrl;
        self::$gallery->save();

    }

    public static function deleteGalleryNew($id)
    {
        self::$gallery = Gallery::find($id);
        if (file_exists(self::$gallery->imageFile))
        {
            unlink(self::$gallery->imageFile);
        }
        self::$gallery->delete();

    }

}
