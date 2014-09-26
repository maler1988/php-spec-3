<?php

class User {
	
	public $name;
	public $login;
	public $password;

	/*Конструктор объекта*/
	/*в php 4 в качестве конструктора выступал одноимённый с классом метод,
	 * совместимость осталась, приоритет такой сначала php ищёт __construct() а потом className()
	 * */
	public function __construct($n,$l,$p){
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		echo "Object created<br/>";
	}
	
	/*Деструктор объекта*/
	public function __destruct(){
		echo "Пользователь ".$this->name." удалён.<br/>";
	}
	
	/*Клонирование объекта*/
	// в __clone() нельзя передать агрументов
	public function __clone(){
		echo "Object cloned<br>";
	}
	 
	/*
	 * Вывод информации о пользователе
	 * 
	 * */
	public function showInfo(){
		echo "<p>Name: ".$this->name;
		echo "<br/>Login: ".$this->login;
		echo "<br/>Password: ".$this->password."</p>";
	}
	
	
	/*
	 * Использование псевдоконстант
	 * */
	public  function myClassName(){
		echo "Имя класса: ".__CLASS__."<br/>";
	}
	
	public  function myMethod(){
		echo  "Вызов метода ".__METHOD__."<br/>";
	}
}


class SuperUser extends User {
	
	public $role; //Роль пользователя
	
	//Перегрузка методов
	public function __construct($n, $l, $p, $r){
		parent::__construct($n, $l, $p);	//Обращение к методу родителя
		
		//+ дополнительные части метода
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
 * Создаём экземпляры класса User
 * */

$user1 = new User("Иван Иванов", "ivan","12345");
$user1->showInfo();

$user2 = new User("Жора Шниперсон","gora","12345");
$user2->showInfo();

$user3 = new User("Василий Зайцев","vasia","12345");
$user3->showInfo();

$user4 = clone $user1;
$user4->showInfo();

$superUser = new SuperUser("Вася Пупкин", "admin", "ss7k1h6Md5","admin");
$superUser->showInfo();


