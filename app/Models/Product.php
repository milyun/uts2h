<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product'; // Eloquent will create a student model to store records in the student table
    protected $primaryKey = 'id_product'; // Calling DB contents with primary key
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'id_product',
    'product_name',
    'category',
    'price',
    'qty',
    ];
}
