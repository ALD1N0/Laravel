<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'Posts';
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'user_id', 'content', 'image_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
