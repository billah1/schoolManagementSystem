<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'pdf'];


    public static function getPdfUrl($request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $pdfFileName = $pdfFile->getClientOriginalName();
            $pdfDirectory = 'pdfs/';
            $pdfFile->move($pdfDirectory, $pdfFileName);
            $pdfUrl = $pdfDirectory . $pdfFileName;
            return $pdfUrl;
        } else {
            return null;
        }
    }

    public static function storeNotice($data)
    {
        return self::create([
            'title' => $data['title'],
            'date' => $data['date'],
            'pdf' => self::getPdfUrl($data),
        ]);
    }


    public static function updateNotice($data, $id)
    {
        $notice = self::find($id);

        if ($data['pdf']) {
            if ($notice->pdf && file_exists($notice->pdf)) {
                unlink($notice->pdf);
            }
            $pdfUrl = self::getPdfUrl($data);
        } else {
            $pdfUrl = $notice->pdf;
        }

        return $notice->update([
            'title' => $data['title'],
            'date' => $data['date'],
            'pdf' => $pdfUrl,
        ]);
    }


    public static function deleteNoticeNew($id)
    {
        $notice = self::find($id);

        if ($notice->pdf && file_exists($notice->pdf)) {
            unlink($notice->pdf);
        }

        return $notice->delete();
    }
}
