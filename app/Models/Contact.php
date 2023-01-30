<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'phone', 'email'];
    public function scopeFilter($query, array $filters) {
        if($filters['lastname'] ?? false) {
            $query->where('lastname', 'like', '%' . request('lastname'). '%');
        }
        if($filters['search'] ?? false) {
            $query->where('lastname', 'like', '%' . request('search') . '%');
        }
    }
}
