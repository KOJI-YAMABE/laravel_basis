<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'title',
        'url',
        'gender',
        'age',
        'contact',
    ];

    public function scopeSearch($query, $words) {
        if ($words === null) return;
        if ($words !== null) {
            $search_split = mb_convert_kana($words, 's');
            $search_split2 = preg_split('/[\s]+/', $search_split);
            foreach ($search_split2 as $value) {
                $query->where('name', 'like', '%' . $value . '%');
            }
        }
        return $query;
    }
}
