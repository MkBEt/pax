<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



/*use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable {
    use AuthenticableTrait;
*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $collection = 'users';
    protected $fillable = [
        'first_name','middle_name','last_name','username','is_agreed','is_verified', 'email', 'password','email_token','memo','blc_steem','blc_sbd','is_from_steemit',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
