<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_post_table extends Model
{
    protected $fillable = 
    ['company', 'time_type', 'logo', 'URL', 'position',
    'location', 'job_category', 'description', 'email', 'application', 'id_company'];
}
