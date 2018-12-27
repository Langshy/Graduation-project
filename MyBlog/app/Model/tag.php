<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    protected $table = 'crq_tag';

    protected $fillable=[
        'tag_name','tag_type','tag_description','tag_parent','tag_showIndex'
    ];
}
