<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewManuscript extends Model
{
    use SoftDeletes;

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }
}
