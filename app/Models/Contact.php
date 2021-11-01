<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_type',
        'salutation',
        'firstname',
        'lastname',
        'company_name',
        'company_display_name',
        'email',
        'phone',
        'mobilephone',
        'skype',
        'designation',
        'department',
        'website',
        'note',
        'status',
        'currency',
        'payment_term',
        'credit_limit',
        'facebook',
        'twitter',
        'b_attention',
        'b_country',
        'b_address',
        'b_city',
        'b_state',
        'b_code',
        'b_phone',
        'b_fax',
        's_attention',
        's_country',
        's_address',
        's_city',
        's_state',
        's_code',
        's_phone',
        's_fax',
    ];
}
