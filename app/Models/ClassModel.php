<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    // Chỉ định bảng liên kết với model này
    protected $table = 'classes';

    // Các thuộc tính có thể gán (mass assignable)
    protected $fillable = [
        'name',
    ];
}
