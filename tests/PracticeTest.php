<?php


include_once("verificar.php");
use PHPUnit\Framework\TestCase;

class PracticeTest extends TestCase{
	
	public function test(){
	$value1 = "Admin";
	$value2 = "admin1234";
	$expectedResult = true;
	$login_form  =  new login_form();
	$result = $login_form->login($value1,$value2);
	$this-> assertEquals($expectedResult,$result);
	
	
	}
}
