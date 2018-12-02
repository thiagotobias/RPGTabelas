<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    protected $fillable = [
        'name', 'cr', 'size', 'type', 'subtype',
        'hd', 'al', 'clime', 'environment',
        'home_plane', 'page', 'book', 'system_id',
    ];
    public function system()
    {
        return $this->belongsTo(System::class);
    }
}
