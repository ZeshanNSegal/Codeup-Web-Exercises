<?php

require_once 'Model.php';
require_once 'config.php';
require_once 'db_connect.php';

class User extends Model
{
	protected static $table= 'contacts';
}