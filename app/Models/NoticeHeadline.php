<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeHeadline extends Model
{
    use HasFactory;
    private static $marquee;
    protected $fillable = ['notice'];
    public static function storeNoticeMarquee($request)
    {
        self::$marquee = new NoticeHeadline();
        self::$marquee->notice = $request->notice;
        self::$marquee->save();
    }

    public static function updateNoticeMarquee($request, $id)
    {
        self::$marquee = NoticeHeadline::find($id);

        self::$marquee->notice = $request->notice;
        self::$marquee->save();
    }

    public static function deleteNoticeMarquee($id)
    {
        self::$marquee = NoticeHeadline::find($id);
        self::$marquee->delete();
    }
}
