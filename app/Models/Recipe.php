<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category;
use App\Models\EatingPreference;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function eatPrefs() {
        return $this->belongsToMany(EatingPreference::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
