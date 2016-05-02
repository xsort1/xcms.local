<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    protected $files_location;
    protected $images_url;
    protected $thumb_width;
    protected $thumb_height;
    protected $width;
    protected $height;

    function __construct()
    {
        $this->files_location   = base_path() . "/" . Config::get('photos.images_dir');
        $this->images_url       = Config::get('photos.images_url');
        $this->width            = Config::get('photos.width');
        $this->height           = Config::get('photos.height');
        $this->thumb_width      = Config::get('photos.thumb_width');
        $this->thumb_height     = Config::get('photos.thumb_height');
    }

    public function upload(){
        // sanity check
        if ( ! Input::hasFile('Filedata'))
        {
            // there ws no uploded file
            return response()->json(['success'=>'false', 'data'=>'You must choose a file!']);
        }

        $table      = Input::get('table');

        if ($table == ''){
            return response()->json(['success'=>'false', 'data'=>'SELECT TABLE!']);
        }

        $file       = Input::file('Filedata');
        $width      = Input::get('width');
        $height     = Input::get('height');
        $twidth     = Input::get('twidth');
        $theight    = Input::get('theight');
        if (is_numeric($width))     $this->width        = $width;
        if (is_numeric($height))    $this->height       = $height;
        if (is_numeric($twidth))    $this->thumb_width  = $twidth;
        if (is_numeric($theight))   $this->thumb_height = $theight;

        $extension      = $file->getClientOriginalExtension();
        $new_filename   = uniqid() . "." . $extension;

        $orig_image = Image::make($file);
        $image      = $orig_image;
        $image->resize($this->width, $this->height, function ($constraint) {
            $constraint->aspectRatio();  //сохранять пропорции
            $constraint->upsize();       //если фото меньше, то не увеличивать
        });
        $image->save($this->files_location . $new_filename);

        //thumb
        $all_thumbs = Config::get('photos.thumbs');

        foreach($all_thumbs as $thumb) {
            $thumbPath = $this->files_location . $thumb['path'] . "/";
            if (!File::exists($thumbPath)) {
                File::makeDirectory($thumbPath);
            }
            $image->fit($thumb['width'], $thumb['height']);
            $image->save($thumbPath . $new_filename);
        }
        unset($image);
        return response()->json(['success' => 'true', 'data' => ['filename' => $new_filename, 'path' => $this->images_url]]);

    }
}
