<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected  static $teacher ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['name','designation','subject','gender','email','mobile','education','description','image'];

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

    public static function storeTeacherNew($request)
    {
        self::$teacher                      = new Teacher();
        self::$teacher->name                = $request->name;
        self::$teacher->designation         = $request->designation;
        self::$teacher->subject             = $request->subject;
        self::$teacher->gender              = $request->gender;
        self::$teacher->email               = $request->email;
        self::$teacher->mobile              = $request->mobile;
        self::$teacher->description         = $request->description;
        self::$teacher->education         = $request->education;
        self::$teacher->image               = self::getImageUrl($request);
        self::$teacher->save();
    }

    public static function updateTeacherNew($request,$id)
    {
        self::$teacher = Teacher::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$teacher->image;

        }
        self::$teacher->name                = $request->name;
        self::$teacher->designation         = $request->designation;
        self::$teacher->subject             = $request->subject;
        self::$teacher->gender              = $request->gender;
        self::$teacher->email               = $request->email;
        self::$teacher->mobile              = $request->mobile;
        self::$teacher->education           = $request->education;
        self::$teacher->description         = $request->description;
        self::$teacher->image               = self::$imageUrl;
        self::$teacher->save();

    }

    public static function deleteTeacherNew($id)
    {
        self::$teacher = Teacher::find($id);
        if (file_exists(self::$teacher->imageFile))
        {
            unlink(self::$teacher->imageFile);
        }
        self::$teacher->delete();

    }

}
