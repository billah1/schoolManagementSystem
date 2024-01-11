<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected  static $slider ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['title','description','image'];

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

    public static function storeSliderNew($request)
    {
        self::$slider = new Slider();
        self::$slider->title = $request->title;
        self::$slider->description = $request->description;
        self::$slider->image = self::getImageUrl($request);
        self::$slider->save();
    }

    public static function updateSliderNew($request,$id)
    {
        self::$slider = Slider::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$slider->image;

        }

        self::$slider ->title           = $request->title;
        self::$slider ->description     = $request->description;
        self::$slider ->image           = self::$imageUrl;
        self::$slider ->save();

    }

    public static function deleteSliderNew($id)
    {
        self::$slider = Slider::find($id);
        if (file_exists(self::$slider->imageFile))
        {
            unlink(self::$slider->imageFile);
        }
        self::$slider->delete();

    }








}
