<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    protected $table = "user";
    protected $primaryKey = 'User_ID';
    protected $fillable = ['User_Name','User_Email','User_Password','User_ProviderID','User_Provider','User_RootAdmin'];
    public $timestamps = false;

    
    
     public function getAuthPassword()
    {
        return $this->User_Password;
    }
   
}
