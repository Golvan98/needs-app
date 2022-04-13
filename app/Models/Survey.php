<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    public function Survey_Question ()
    {
        return $this->hasMany(Survey_Question::class);
    }

    public function Survey_Responses()
    {
        return $this->hasMany(Survey_Responses::class);
    }
}
