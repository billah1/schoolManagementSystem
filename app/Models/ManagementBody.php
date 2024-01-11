<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementBody extends Model
{
    use HasFactory;

    protected  static $management_body ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['title', 'name','designation','father','mother','dob','education','serviceLife','socialActivities','image','email','joining_date'];

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

    public static function storeManagementBodyNew($request)
    {
        self::$management_body                      = new ManagementBody();
        self::$management_body->title               = $request->title;
        self::$management_body->name                = $request->name;
        self::$management_body->designation         = $request->designation;
        self::$management_body->father              = $request->father;
        self::$management_body->mother              = $request->mother;
        self::$management_body->dob                 = $request->dob;
        self::$management_body->email                 = $request->email;
        self::$management_body->joining_date                 = $request->joining_date;
        self::$management_body->education           = $request->education;
        self::$management_body->socialActivities    = $request->socialActivities;
        self::$management_body->serviceLife         = $request->serviceLife;
        self::$management_body->image = self::getImageUrl($request);
        self::$management_body->save();
    }

    public static function updateManagementBodyNew($request,$id)
    {
        self::$management_body = ManagementBody::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$management_body->image))
            {
                unlink(self::$management_body->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$management_body->image;

        }

        self::$management_body->title               = $request->title;
        self::$management_body->name                = $request->name;
        self::$management_body->designation         = $request->designation;
        self::$management_body->father              = $request->father;
        self::$management_body->mother              = $request->mother;
        self::$management_body->dob                 = $request->dob;
        self::$management_body->email                 = $request->email;
        self::$management_body->joining_date                 = $request->joining_date;
        self::$management_body->education           = $request->education;
        self::$management_body->socialActivities    = $request->socialActivities;
        self::$management_body->serviceLife         = $request->serviceLife;
        self::$management_body ->image           = self::$imageUrl;
        self::$management_body ->save();

    }

    public static function deleteManagementBodyNew($id)
    {
        self::$management_body = ManagementBody::find($id);
        if (file_exists(self::$management_body->imageFile))
        {
            unlink(self::$management_body->imageFile);
        }
        self::$management_body->delete();

    }


}
