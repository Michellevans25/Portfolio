<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    
   protected $table ="personas";
   protected $fillable = ["id", "name", "lastName", "email","phone","addres","fkStudies"];
   //protected $guarded = [];
   public $timestamps = false;

     
    public static function storeClient($data){

    		Clientes::create($data);

    		} 
     

    public static function updateClient($data){
    		Clientes::where('id', $data['id'] )->update(['name' => $data['name'], 'phone' => $data['phone'], 'last_name' => $data["last_name"] ]);

    		} 

}
