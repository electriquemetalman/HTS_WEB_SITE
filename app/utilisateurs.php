<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class utilisateurs extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    //
    public $timestamps=true;
    public $table = "utilisateurs";
    //public $table = ['id','nom','email','password'];

    public function getAuthPassword(){
        return $this->password;
    }

    public function getRememberTokenName(){

        return '';
    }
}
