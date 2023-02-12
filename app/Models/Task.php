<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Task extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable =
    [
        'title','body','status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
