<?
//Автоматическое подключение классов
function __autoload($className) {
	include 'classes/'.$className.'.class.php';
}



/*
 * Константы
 * 
 * */

/*
 * Абстрактные классы
* */

abstract class dBase {
	private  $connect;

	function connect(){

	}

	abstract function open();
	abstract function query();
	abstract function close();
}

interface interfaceClass {
	function firstFunction();
}



//Статические свойства и методы
class StaticMethodClass {
	static $var = 0;
	
	//Подсчёт объектов
	function __construct(){
		++self::$var;
	}
	
	static function getVar(){
		echo self::$var;
	}
}

//Позднее статическое связывание

$myBoss = new Human();
	if($myBoss instanceof Human)
		{
			echo "Мой босс человек!<br/>";
		}
		
		
		
		
		
		
//Сеттеры и геттеры (динамическое создание свойст класса)
class Person {
	private $Data = Array();
	
	function __set($name, $value){
		echo "Обращение к __set()<br/>";
		$this->Data[$name] = $value;
	}
	
	function __get($name){
		echo "Обращение к __get()<br/>";
		echo $this->Data[$name];
	}
}

$person = new Person();
$person->name = "Вася Пупкин";
echo $person->name;

//На тру ООП обращение к полям класса выполняется через интерфейсы доступа
//например: ...подобие тру ООП в PHP 

class vPerson {
	private $_name;
	private $_age;
	
	//В результате мы полнастью контролируем ситуацию
	// и можем на любом кейсе добавить необходимые проверки + 
	// у нас есть default на который можно привязать исключение Exception() и показать 
	// нужное сообщение пользователю.
	
	function __set($name, $value){
		switch ($name){
			case "name" : $this->_name = $value; break;
			case "age"  : $this->_age = $value; break;
			default: throw new Exception("ERROR!");
		}
	}
	
	function __get($name){
		switch ($name){
			case "name" : return $this->_name; break;
			case "age"  : return $this->_age; break;
			default: throw new Exception("ERROR!");
		}
	}
	
	//Доступ к невидимым методам
	function __call($methodName, $argsArray) {
		//Метод вызывается если идёт обращение к несуществующему
		// или приватному методу класса
	}
}

		 
?>
