<?php
session_start();
$sid = session_id();

$_session['name'] = '小栁';
$_session['age'] = '25';
$_session['food'] = 'yakiniku';

$birthplace = '福岡県';