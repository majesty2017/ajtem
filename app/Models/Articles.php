<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{
    use SoftDeletes;

    protected $table = 'articles';

    protected $fillable = [
        'admin_id',
        'title',
        'category_id',
        'journal',
        'year',
        'issue',
        'volume',
        'pages',
        'abstract',
        'tags',
        'arxiv_id',
        'doi',
        'issn',
        'pmid',
        'upload_files',
    ];

    protected $attributes = ['is_published' => 0,];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }
}
