<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Content extends Model
{

    protected   $table      = "content";
    protected   $dateFormat = 'd-m-Y';

    public function getCreatedAtAttribute($date)
    {
        return Date::parse($date)->format($this->dateFormat);
    }

    public function setCreatedAtAttribute($date)
    {
        $this->attributes['created_at'] = Date::parse($date)->format('Y-m-d H:i:s');
    }

    /**
     * Create the slug from the title
     */
    public function setSlugAttribute($value) {
        if ($value == "") {
            // grab the title and slugify it
            $this->attributes['slug'] = str_slug($this->name);
        }else{
            $this->attributes['slug'] = str_slug($value);
        }
    }

    public function setUpdatedAtAttribute($value)
    {
        $this->attributes['updated_at'] = Carbon::now();
    }

}
