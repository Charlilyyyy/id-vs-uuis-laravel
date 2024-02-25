<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use App\Models\Uuid;

class UuidComment extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    protected $table = 'uuid_comments';

    public function uuid()
    {
        return $this->belongsTo(Uuid::class, 'UUID_id', 'id');
    }
}
