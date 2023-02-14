<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Member extends Model
{

    use HasFactory;

    protected $casts = [
        
        'is_admin' => 'boolean'
        
    ];

    
    //This is mutator for the "Name" attribute that adds the "Mr " prefix to the value.

    protected function Name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => "Mr. ".$value,
        );
    }

    


}
