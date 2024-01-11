<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected  static $achievement ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['image','title','description'];

    public static function getImageUrl($request)
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


    public static function storeAchievementNew($request)
    {
        self::$achievement                 = new Achievement();
        self::$achievement->title          = $request->title;
        self::$achievement->description    = $request->description;
        self::$achievement->image          = self::getImageUrl($request);
        self::$achievement->save();
    }

    public static function updateAchievementNew($request,$id)
    {
        self::$achievement = Achievement::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$achievement->image))
            {
                unlink(self::$achievement->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$achievement->image;

        }



        self::$achievement->title                = $request->title;
        self::$achievement->description          = $request->description;
        self::$achievement->image                = self::$imageUrl;
        self::$achievement->save();

    }

    public static function deleteAchievementNew($id)
    {
        self::$achievement = Achievement::find($id);
        if (file_exists(self::$achievement->imageFile))
        {
            unlink(self::$achievement->imageFile);
        }
        self::$achievement->delete();

    }



}
