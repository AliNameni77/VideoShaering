<?php

namespace App\Models;
use Database\Factories\VideoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Video extends Model
{
    use HasFactory;
    public static function newFactory()
    {
        return VideoFactory::new();
    }

}
