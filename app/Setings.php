<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setings extends Model
{
    protected $fillable=[
      'phone','email','adres','price'
    ];

    public static function phone($phone){
        if(  preg_match( '/^\+\d(\d{3})(\d{3})(\d{4})$/', $phone,  $matches ) )
        {
            $result = '+7 ('.$matches[1] . ') ' .$matches[2] . '-' . $matches[3];
            return $result;
        }
    }
}
