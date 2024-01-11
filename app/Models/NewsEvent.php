<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    use HasFactory;
    protected  static 	$news_event;

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


    public static function storeNewsEventNew($request)
    {
        self::$news_event                 = new NewsEvent();
        self::$news_event->title          = $request->title;
        self::$news_event->description    = $request->description;
        self::$news_event->image          = self::getImageUrl($request);
        self::$news_event->save();
    }

    public static function updateNewsEventNew($request,$id)
    {
        self::$news_event = NewsEvent::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$news_event->image))
            {
                unlink(self::$news_event->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$news_event->image;

        }

        self::$news_event->title                = $request->title;
        self::$news_event->description          = $request->description;
        self::$news_event->image                = self::$imageUrl;
        self::$news_event->save();

    }

    public static function deleteNewsEventNew($id)
    {
        self::$news_event = NewsEvent::find($id);
        if (file_exists(self::$news_event->imageFile))
        {
            unlink(self::$news_event->imageFile);
        }
        self::$news_event->delete();

    }



}
