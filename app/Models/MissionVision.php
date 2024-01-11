<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    use HasFactory;

    private static $mission_vision;
    protected $fillable = ['title1', 'description1','title2', 'description2'];


    public static function storeMissionVisionNew($request)
    {
        self::$mission_vision                 = new MissionVision();
        self::$mission_vision->title1         = $request->title1;
        self::$mission_vision->description1   = $request->description1;
        self::$mission_vision->title2         = $request->title2;
        self::$mission_vision->description2   = $request->description2;
        self::$mission_vision->save();
    }


    public static function updateMissionVisionNew($request, $id)
    {
        self::$mission_vision                 = MissionVision::find($id);
        self::$mission_vision->title1         = $request->title1;
        self::$mission_vision->description1   = $request->description1;
        self::$mission_vision->title2         = $request->title2;
        self::$mission_vision->description2   = $request->description2;
        self::$mission_vision->save();
    }


    public static function deleteMissionVisionNew($id)
    {
        self::$mission_vision        = MissionVision::find($id);
        self::$mission_vision->delete();
    }
}
