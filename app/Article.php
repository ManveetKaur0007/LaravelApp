<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //use SoftDeletes;
    //protected $dates =['deleted_at'];

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    protected $fillable = [
        "name",
        "body",
        "author_id",
        "category_id"
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
