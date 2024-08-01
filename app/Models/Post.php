<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $fillable = [
        'title',
        'author',
        'content',
        'creation_date',
        'category_id',
        'image_url',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}