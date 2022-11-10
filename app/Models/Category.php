<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function scopeOnlyParent($query){
        return $query->whereNull('parent_id');
    }

    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    // turunan-category.index
    public function descandants(){
        return $this->children()->with('descandants');
    }

}
