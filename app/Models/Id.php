<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use App\Models\IdComment;

class Id extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    protected $table = 'id';

    public function idComments()
    {
        return $this->hasMany(IdComment::class);
    }
}
