<?php

namespace App\Models;
use App\http\Controllers\ItemsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable = [
        'foods_name',
        'qty',
        'user_id',
    ];
}
