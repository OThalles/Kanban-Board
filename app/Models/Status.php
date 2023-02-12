<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Status extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable =
    [
        'name','kanban_id'
    ];

    public function task() {
        return $this->hasMany(Task::class);
    }
}
