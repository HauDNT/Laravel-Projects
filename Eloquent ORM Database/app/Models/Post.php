<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    // Khai báo các trường dữ liệu muốn xử lý (CUD) trong model này:
    // protected $fillable = ['title', 'content', 'user_id', 'votes'];
}
