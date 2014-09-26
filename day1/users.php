<?php

class User {
	
	public $name;
	public $login;
	public $password;

	/*����������� �������*/
	/*� php 4 � �������� ������������ �������� ���������� � ������� �����,
	 * ������������� ��������, ��������� ����� ������� php ���� __construct() � ����� className()
	 * */
	public function __construct($n,$l,$p){
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		echo "Object created<br/>";
	}
	
	/*���������� �������*/
	public function __destruct(){
		echo "������������ ".$this->name." �����.<br/>";
	}
	
	/*������������ �������*/
	// � __clone() ������ �������� ����������
	public function __clone(){
		echo "Object cloned<br>";
	}
	 
	/*
	 * ����� ���������� � ������������
	 * 
	 * */
	public function showInfo(){
		echo "<p>Name: ".$this->name;
		echo "<br/>Login: ".$this->login;
		echo "<br/>Password: ".$this->password."</p>";
	}
	
	
	/*
	 * ������������� ��������������
	 * */
	public  function myClassName(){
		echo "��� ������: ".__CLASS__."<br/>";
	}
	
	public  function myMethod(){
		echo  "����� ������ ".__METHOD__."<br/>";
	}
}


class SuperUser extends User {
	
	public $role; //���� ������������
	
	//���������� �������
	public function __construct($n, $l, $p, $r){
		parent::__construct($n, $l, $p);	//��������� � ������ ��������
		
		//+ �������������� ����� ������
		$this->role = $r;
		echo "Object ".__CLASS__." created<br/>";
	}
	
	public function showInfo(){
		echo "<p>Name: ".$this->name;
		echo "<br/>Login: ".$this->login;
		echo "<br/>Password: ".$this->password;
		echo "<br/>Role: ".$this->role."</p>";
		
	}
}

/*
 * ������ ���������� ������ User
 * */

$user1 = new User("���� ������", "ivan","12345");
$user1->showInfo();

$user2 = new User("���� ���������","gora","12345");
$user2->showInfo();

$user3 = new User("������� ������","vasia","12345");
$user3->showInfo();

$user4 = clone $user1;
$user4->showInfo();

$superUser = new SuperUser("���� ������", "admin", "ss7k1h6Md5","admin");
$superUser->showInfo();


