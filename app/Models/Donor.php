<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected  static 	$donor;

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


    public static function storeDonorNew($request)
    {
        self::$donor                 = new Donor();
        self::$donor->title          = $request->title;
        self::$donor->description    = $request->description;
        self::$donor->image          = self::getImageUrl($request);
        self::$donor->save();
    }

    public static function updateDonorNew($request,$id)
    {
        self::$donor = Donor::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$donor->image))
            {
                unlink(self::$donor->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$donor->image;

        }



        self::$donor->title                = $request->title;
        self::$donor->description          = $request->description;
        self::$donor->image                = self::$imageUrl;
        self::$donor->save();

    }

    public static function deleteDonorNew($id)
    {
        self::$donor = Donor::find($id);
        if (file_exists(self::$donor->imageFile))
        {
            unlink(self::$donor->imageFile);
        }
        self::$donor->delete();

    }



}
