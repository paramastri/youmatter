<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;

class Admin extends Model
{
	// public function initialize()
 //    {
 //        $this->setSource('users');
 //    }
    public $id;
    public $username;
    public $password;
}