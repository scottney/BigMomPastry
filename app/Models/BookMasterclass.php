<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMasterclass extends Model
{
    use HasFactory;

     protected $table = 'book_masterclass';

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'middle_name',
        'id_number',
        'date_of_birth',
        'age',
        'phone_number',
        'email',
        'place_of_residence',
        'apprentice_id',
        'apprentice_session',
        'product_course',
        'payment_mode',
        'amount',
        'receipt_number',
    ];
}
