<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'price' => $this->price,
        ];
        return $array;
    }

    // use HasFactory;
    
    protected $fillable=['title','price','description'];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    } 
    
    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }
}
