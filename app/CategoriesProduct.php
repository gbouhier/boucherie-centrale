<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesProduct extends Model
{
    protected $fillable = ['id_parent', 'name', 'description', 'category_type'];
    
}
