<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use File;

class QRController extends Controller
{
    public function index(Request $request)
    {
        $numberQR = $request->numberQR;
        $color = $request->color;
        $QR_prefix = $request->QR_prefix;
        $number= $request->number;
        for($i=0;$i<$number;$i++) {
            $pdf[] = PDF::loadView('QR_final', compact('numberQR', 'color', 'QR_prefix'))->setOptions(['defaultFont' => 'sans-serif'])
                ->save('files/file'.$i.'.pdf');

        }
return $this->download('files');

}
    public function download($files)
    {
        $zip = new \ZipArchive();
        $fileName = 'zipFile.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path($files));
            foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName));
    }


 }
