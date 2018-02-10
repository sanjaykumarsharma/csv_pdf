<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'region','country','operator','brand','host_network','technology','mvno_category','mvno_type','subscriber','parent_owner','email','telephone','fax','linkedin','website','headquarter','established','regulator','company_overview',
    ];
}
