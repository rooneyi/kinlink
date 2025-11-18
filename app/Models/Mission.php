<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'deadline',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'mission_user', 'mission_id', 'user_id')->withTimestamps();
    }
}
