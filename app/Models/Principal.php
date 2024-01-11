<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;

    protected  static $principal ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['title', 'description','name','designation','schoolName','image'];

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

    public static function storePrincipalNew($request)
    {
        self::$principal                = new Principal();
        self::$principal->title         = $request->title;
        self::$principal->description   = $request->description;
        self::$principal->name          = $request->name;
        self::$principal->designation   = $request->designation;
        self::$principal->schoolName    = $request->schoolName;
        self::$principal->image         = self::getImageUrl($request);
        self::$principal->save();
    }

    public static function updatePrincipalNew($request,$id)
    {
        self::$principal = Principal::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$principal->image))
            {
                unlink(self::$principal->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$principal->image;

        }
        self::$principal->title         = $request->title;
        self::$principal->description   = $request->description;
        self::$principal->name          = $request->name;
        self::$principal->designation   = $request->designation;
        self::$principal->schoolName    = $request->schoolName;
        self::$principal->image                = self::$imageUrl;
        self::$principal ->save();

    }

    public static function deletePrincipalNew($id)
    {
        self::$principal = Principal::find($id);
        if (file_exists(self::$principal->imageFile))
        {
            unlink(self::$principal->imageFile);
        }
        self::$principal->delete();

    }

}

