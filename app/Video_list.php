<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video_list extends Model
{
    protected $fillable = [
    	'title', 'description', 'video_url', 'status', 'user_id'
    ];
}
