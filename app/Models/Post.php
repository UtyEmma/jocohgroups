<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Post extends Model
{
    use HasFactory, HasPlatform, HasUuids;

    protected $fillable = ['title', 'slug', 'author_id', 'category_id', 'image', 'content', 'published_at', 'excerpt', 'tags', 'description', 'status', 'read_time'];

    protected $with = ['category'];

    protected $appends = ['publishing_date', 'month_and_day'];

    protected function casts() {
        return [
            'tags' => 'array',
            'status' => Status::class
        ];
    }

    protected function image(): Attribute {
        return Attribute::make(
            get: function(string $value) {
                if(!filament()->isServing()) {
                    if(file_exists("storage/{$value}")) return asset("storage/{$value}");
                    if(file_exists($value)) return asset($value);
                }
                return $value;
            },
        );
    }

    function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function getPublishingDateAttribute(){
        return Date::parse($this->published_at)->format('jS F Y');
    }

    function getMonthAndDayAttribute(){
        return Date::parse($this->published_at)->format('M j');
    }

    function setPlatforms(): void {
        $this->platforms = [Platforms::GROUP];
    }
}
