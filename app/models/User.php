<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/6/15
 * Time: 23:07
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable = ['username', 'email'];
}