<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use App\Models\Id;

class IdComment extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    protected $table = 'id_comments';

    public function id()
    {
        return $this->belongsTo(Id::class, 'ID_id', 'id');
    }
}
