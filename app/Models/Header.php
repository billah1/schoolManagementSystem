<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\pr;

class Header extends Model
{
    use HasFactory;

    protected  static $header ;

    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    protected $fillable = ['nameB', 'nameE','established','image'];

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

    public static function createNewHeader($request)
    {
        self::$header = new Header();
        self::$header->nameB = $request->nameB;
        self::$header->nameE = $request->nameE;
        self::$header->established = $request->established;
        self::$header->image = self::getImageUrl($request);
        self::$header->save();
    }

    public static function updateHeader($request,$id)
    {
        self::$header = Header::find($id);
        self::$imageFile = $request->file('image');

        if(isset(self::$imageFile))
        {

            if(file_exists(self::$header->image))
            {
                unlink(self::$header->image);
            }
            self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'assets/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else
        {

            self::$imageUrl=self::$header->image;

        }

        self::$header ->nameB           = $request->nameB;
        self::$header ->nameE           = $request->nameE;
        self::$header ->established     = $request->established;
        self::$header ->image           = self::$imageUrl;
        self::$header ->save();

    }

    public static function deleteHeader($id)
    {
        self::$header = Header::find($id);
        if (file_exists(self::$header->imageFile))
        {
            unlink(self::$header->imageFile);
        }
        self::$header->delete();

    }


}
