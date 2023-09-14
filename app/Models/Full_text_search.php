<?php

namespace App/Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Full_text_search extends Model
{
    use Notifiable;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'full_text_searches.name'  => 10,
            'full_text_searches.description'   => 10,
            'full_text_searches.location'   => 10,
            
        ]
    ];

    protected $fillable = [
        'name', 'description', 'location', 
    ];
}