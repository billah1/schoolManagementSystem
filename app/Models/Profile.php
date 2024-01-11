<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    private static $profile;
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['title','image','schoolName', 'principle','address','mobile','fax','email','webAddress','admissionDate','established','eiin'];

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
    public static function storeProfileNew($request)
    {
        self::$profile                      = new Profile();
        self::$profile->title               = $request->title;
        self::$profile->schoolName          = $request->schoolName;
        self::$profile->principle           = $request->principle;
        self::$profile->address             = $request->address;
        self::$profile->mobile              = $request->mobile;
        self::$profile->fax                 = $request->fax;
        self::$profile->email               = $request->email;
        self::$profile->webAddress          = $request->webAddress;
        self::$profile->admissionDate       = $request->admissionDate;
        self::$profile->established         = $request->established;
        self::$profile->eiin                = $request->eiin;
        self::$profile->image               = self::getImageUrl($request);
        self::$profile->save();
    }

    public static function updateProfileNew($request, $id)
    {
        self::$profile                = Profile::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$profile->image))
            {
                unlink(self::$profile->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$profile->image;

        }
        self::$profile->title               = $request->title;
        self::$profile->schoolName          = $request->schoolName;
        self::$profile->principle           = $request->principle;
        self::$profile->address             = $request->address;
        self::$profile->mobile              = $request->mobile;
        self::$profile->fax                 = $request->fax;
        self::$profile->email               = $request->email;
        self::$profile->webAddress          = $request->webAddress;
        self::$profile->admissionDate       = $request->admissionDate;
        self::$profile->established         = $request->established;
        self::$profile->eiin                = $request->eiin;
        self::$profile->image                = self::$imageUrl;
        self::$profile->save();

    }


    public static function deleteProfileNew($id)
    {
            self::$profile        = Profile::find($id);
        if (file_exists(self::$profile->imageFile))
        {
            unlink(self::$profile->imageFile);
        }
        self::$profile->delete();


    }
}


