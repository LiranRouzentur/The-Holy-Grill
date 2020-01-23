<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{

    static protected $ex = ['jpeg', 'jpg', 'png', 'bmp', 'gif', 'svg', 'webp'];

    private static function store_img(Request $request, String $folder, String $image_name = "default-image.jpg")
    {
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (isset($_FILES['image']['name'])) {
                $file_info = pathinfo($_FILES['image']['name']);
                if (in_array(strtolower($file_info['extension']), self::$ex)) {
                    if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                        $file = $request->file('image');
                        $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
                        $file->move(public_path() . '/lib/Template/images/' . $folder, $image_name);
                        $img = Image::make(public_path() . '/lib/Template/images/' . $folder . $image_name);
                        $img->resize(450, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save();

                        return $image_name;
                    }
                }
            }
        }
        return $image_name;
    }

    public static function save_image(Request $request, String $folder)

    {
        return self::store_img($request, $folder);
    }

    public static function update_image(Request $request, String $folder)

    {
        return self::store_img($request, $folder, '');
    }
}
