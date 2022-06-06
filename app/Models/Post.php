<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Like;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
// table name to be used
    protected $table = 'fb_ko_post';
    // columns to be allowed
    // protected $fillable = [
    //     'body',
    // ];

    

    // one to many inverse relationship with user model
    public function user(){
        return $this->belongsTO(User::class);
    }

    
    public function likes(){
        return $this->hasMany(Like::class);
    }
    

   


}
 