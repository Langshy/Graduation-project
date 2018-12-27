<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'crq_article';

    protected $fillable=[
        'articleTitle','authorID','articleImage','articleContent'
    ];


    public function authors(){
        return $this->belongsTo('App\Model\Admin\Admin','id','authorID');
    }
}
