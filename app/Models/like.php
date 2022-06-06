<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post; 
use App\Models\User; 

class like extends Model
{
    use HasFactory;
    protected $table = 'like';
    protected $fillable = [
        'user_id',
        'post_id',
        'liked',
    ];
    // protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

   
}
