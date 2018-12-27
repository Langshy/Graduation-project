<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

class webSet extends Model
{
    //
    protected $table = 'crq_set';

    protected $fillable = [
        'title','web_image_icon','web_logo','bg_image','hot_image_1','hot_image_2','hot_image_3'
    ];


}
