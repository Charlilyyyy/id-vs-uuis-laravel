<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UuidComment;

class Uuid extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $table = 'uuid';

    public function uuidComments()
    {
        return $this->hasMany(UuidComment::class);
    }
}
