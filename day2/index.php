<?
//�������������� ����������� �������
function __autoload($className) {
	include 'classes/'.$className.'.class.php';
}



/*
 * ���������
 * 
 * */

/*
 * ����������� ������
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



//����������� �������� � ������
class StaticMethodClass {
	static $var = 0;
	
	//������� ��������
	function __construct(){
		++self::$var;
	}
	
	static function getVar(){
		echo self::$var;
	}
}

//������� ����������� ����������

$myBoss = new Human();
	if($myBoss instanceof Human)
		{
			echo "��� ���� �������!<br/>";
		}
		
		
		
		
		
		
//������� � ������� (������������ �������� ������ ������)
class Person {
	private $Data = Array();
	
	function __set($name, $value){
		echo "��������� � __set()<br/>";
		$this->Data[$name] = $value;
	}
	
	function __get($name){
		echo "��������� � __get()<br/>";
		echo $this->Data[$name];
	}
}

$person = new Person();
$person->name = "���� ������";
echo $person->name;

//�� ��� ��� ��������� � ����� ������ ����������� ����� ���������� �������
//��������: ...������� ��� ��� � PHP 

class vPerson {
	private $_name;
	private $_age;
	
	//� ���������� �� ��������� ������������ ��������
	// � ����� �� ����� ����� �������� ����������� �������� + 
	// � ��� ���� default �� ������� ����� ��������� ���������� Exception() � �������� 
	// ������ ��������� ������������.
	
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
	
	//������ � ��������� �������
	function __call($methodName, $argsArray) {
		//����� ���������� ���� ��� ��������� � ���������������
		// ��� ���������� ������ ������
	}
}

		 
?>
