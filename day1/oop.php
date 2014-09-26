<?

class Animal {
	//�������� �������
	public $name = "";
	public $age = 0;
	
	
	//�������� �������
	public function sayHallo($word){
		echo $this->name." ������ ".$word;
		$this->drawBr();
	}
	
	public function  drawBr(){
		echo "<br/>";	
	}
	
	/*���������� ������*/
	
	
	//����������� �������
	public function __construct($num){
		echo "Object �".$num." create!<br/>";
	}
	
	//���������� �������
	//�������� ��������� � ����� __destruct - ������
	//���������� �������� �������� �� ����������
	//������� �� ����������� ������ ���������� � ������ ��������!
	
	public function __destruct(){
		echo "Object destructed!<br/>";
	}
	
	public function __clone(){
		echo "Object cloned!</br>";
	}
	
}



class Cat extends Animal {
	
}

$cat = new Animal(1);
$dog = new Animal(2);

$cat->name = "������";
$dog->name = "�����";

$bigCat = clone $cat;

echo "<pre>";
var_dump($cat);
echo "</pre>";

$cat->sayHallo("���");
$dog->sayHallo("���");

?>