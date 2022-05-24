<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $guarded = ['id'];
    public $timestamps = false;
}
