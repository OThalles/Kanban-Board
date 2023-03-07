<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Kanban extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable =
    [
        'name', 'user_id'
    ];

    public function task()
    {
        return $this->hasMany(Task::class)->orderBy('status');
    }

}
