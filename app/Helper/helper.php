<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


function ImageUpload($new_file, $path, $old_image) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $file_name = time() . '_' . $new_file->getClientOriginalName();
    $destinationPath = public_path($path);


    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    $new_file->move($destinationPath, $file_name);

    return $file_name;

};

function ResizeImageUpload($new_file, $path, $old_image, $w, $h) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $destinationPath = public_path($path);
    $file_name =  time() . '_' . $new_file->getClientOriginalName();

    $path = str_replace('\\','/', public_path());

    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    Image::make($new_file)
    ->resize($w, $h)
    ->save($destinationPath . $file_name);

    return $file_name;

};


function user_name_slug($user_name)
{
    return Str::slug($user_name, '-');
}

?>
