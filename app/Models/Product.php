<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];


// defining a eloquent relationship

    public function category()
    {

        //who->relation_name->to whom

        // 1 to 1 dependent = belongs to
        // 1 to 1 not dependent = hasOne

        return $this->belongsto(Category::class);

        
    }
}
