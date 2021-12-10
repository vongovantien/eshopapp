<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menus";
    protected $fillable =['id', 
        'name', 
        'description', 
        'content', 
        'slug', 
        'active', 
        'created_at', 
        'update_at'
    ];
}

// public function menu() {
//     return $this->hasOne(Menu::class, 'id', 'menu_id')->withDefault(['name' => ''])
// }
