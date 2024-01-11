<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    protected  static $founder ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['title', 'name','description','image'];

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

            return null;
        }
    }

    public static function storeFounderNew($request)
    {
        self::$founder = new Founder();
        self::$founder ->title           = $request->title;
        self::$founder ->name            = $request->name;
        self::$founder ->description     = $request->description;
        self::$founder->image = self::getImageUrl($request);
        self::$founder->save();
    }

    public static function updateFounderNew($request,$id)
    {
        self::$founder = Founder::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$founder->image))
            {
                unlink(self::$founder->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$founder->image;

        }

        self::$founder ->title           = $request->title;
        self::$founder ->name            = $request->name;
        self::$founder ->description     = $request->description;
        self::$founder ->image           = self::$imageUrl;
        self::$founder ->save();

    }

    public static function deleteFounderNew($id)
    {
        self::$founder = Founder::find($id);
        if (file_exists(self::$founder->imageFile))
        {
            unlink(self::$founder->imageFile);
        }
        self::$founder->delete();

    }


}
