<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $table = 'posts';
    
    // Khai báo các trường dữ liệu muốn xử lý (CUD) trong model này:
    // protected $fillable = ['title', 'content', 'user_id', 'votes'];
}
