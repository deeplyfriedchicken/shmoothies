<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
  public $table = "lookup";

  protected $dates = [
      'created_at',
      'updated_at',
      'date_posted'
  ];

  protected $fillable = [
      'category', 'user_id', 'ref_id', 'blog_id',
      'blog_title', 'blog_category', 'blog_cover_type', 'blog_views', 'blog_url', 'blog_shares',
      'media_url', 'heading', 'content',
      'tag', 'date_posted',
  ];
}
