<?php

require_once 'User.php';

$user = new User();
$user->first_name = 'Zee';
$user->last_name = 'Segal';
$user->email = 'Zsegal@gmail.com';
$user->phone = '5127871321';
$user->address = '1500 Royal Crest Dr.';
$user->city = 'Austin';
$user->state = 'Texas';
$user->zip = '76011';
$user->save();

$user = new User();
$user->first_name = 'Z';
$user->last_name = 'Sega';
$user->email = 'Zsel@gmail.com';
$user->phone = '5127871311';
$user->address = '1500 RoyalCres Dr.';
$user->city = 'Austi';
$user->state = 'Texa';
$user->zip = '76012';
$user->save();

$user = new User();
$user->first_name = 'Ze';
$user->last_name = 'Seega';
$user->email = 'Zseel@gmail.com';
$user->phone = '5127871111';
$user->address = '1500 RoyaCres Dr.';
$user->city = 'Ausi';
$user->state = 'Texas';
$user->zip = '76010';
$user->save();

$user = new User();
$user->first_name = 'Zeee';
$user->last_name = 'Seeg';
$user->email = 'Zseegl@gmail.com';
$user->phone = '5127871110';
$user->address = '1500 RoyCres Dr.';
$user->city = 'Aus';
$user->state = 'Texas';
$user->zip = '76011';
$user->save();

$user = new User();
$user->first_name = 'Zeeee';
$user->last_name = 'Seegall';
$user->email = 'Zseegaal@gmail.com';
$user->phone = '5127870110';
$user->address = '1500 RoCres Dr.';
$user->city = 'Au';
$user->state = 'Texas';
$user->zip = '76011';
$user->save();

$user = new User();
$user->first_name = 'Jerome';
$user->last_name = 'is the worst';
$user->email = 'Zseeaal@gmail.com';
$user->phone = '5127771110';
$user->address = '1500 RoyCre Dr.';
$user->city = 'Aus';
$user->state = 'Texas';
$user->zip = '76011';
$user->save();

$model = User::all();
$users = User::all();
// $delete = User::delete(37);

var_dump($users);
// var_dump($delete);

// var_dump($users);