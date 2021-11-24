<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $visible =['title','author_id','amount', 'cover'];
    protected $fillable = ['title','author_id', 'amount', 'cover'];
    public $timestamp = true;

    public function author()
    {
        // data dari Models "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Author', 'author_id');
    }
}
