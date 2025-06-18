<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'projects';
    protected $fillable = [
        'id',
        'name',
        'description',
        'status',
    ];
    protected $casts = [
        'id' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}
