<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Photos extends Model
{

    public $timestamps = false;

    public function getThumbs(){
        /*
        $photos = $this->photos();
        $thumbs = array();
        foreach ($photos as $photo){
            $thumbs[] = $photo->source;
        }
        return $thumbs;
        */
    }
}
