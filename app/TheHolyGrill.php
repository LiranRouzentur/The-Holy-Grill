<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Curl;
use Exception;
use Image;
use App\User;


class TheHolyGrill extends Model
{
    static public function getCountries()
    {
        try {
            return Curl::to('https://restcountries.eu/rest/v2/all')
                ->asJson()
                ->get();
        } catch (Exception $e) {
            return null;
        }
    }

    
}






















//         static public function save_new( $request ,$move , $make )
//     {
//         $image_name = 'default-image.jpg';

//         $ex = ['jpeg','jpg', 'png', 'bmp', 'gif', 'svg', 'webp'];
//         if ($request->hasFile('image') && $request->file('image')->isValid()) {

//             if (isset($_FILES['image']['name'])) {
//                 $file_info = pathinfo($_FILES['image']['name']);
//                 if (in_array(strtolower($file_info['extension']), $ex)) {
//                     if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
//                         $file = $request->file('image');
//                         $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
//                         $request->file('image')->move(public_path() .$move, $image_name);
//                         $img = Image::make(public_path() . $make . $image_name);
//                         $img->resize(450, null, function ($constraint) {
//                             $constraint->aspectRatio();
//                         });
//                         $img->save();
//                     }
//                 }
//             }
//         }
//     }
// }
