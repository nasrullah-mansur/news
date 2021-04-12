<?php

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


function ImageUpload($new_file, $path, $old_image = null) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $file_name = time() . '_' . $new_file->getClientOriginalName();
    $destinationPath = public_path($path);


    if (File::exists($old_image)) {
        File::delete($old_image);
    }

    $new_file->move($destinationPath, $file_name);

    return $file_name;

}

function ResizeImageUpload($new_file, $path, $old_image, $w, $h) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $destinationPath = public_path($path);
    $file_name =  time() . '_' . $new_file->getClientOriginalName();


    if (File::exists($old_image)) {
        File::delete($old_image);
    }

    Image::make($new_file)
    ->resize($w, $h)
    ->save($destinationPath . $file_name);

    return $file_name;

}




?>
