<?

class Animal {
	//Описание свойств
	public $name = "";
	public $age = 0;
	
	
	//Описание методов
	public function sayHallo($word){
		echo $this->name." сказал ".$word;
		$this->drawBr();
	}
	
	public function  drawBr(){
		echo "<br/>";	
	}
	
	/*Магические методы*/
	
	
	//Конструктор объекта
	public function __construct($num){
		echo "Object №".$num." create!<br/>";
	}
	
	//Деструктор объекта
	//передать вргументы в метод __destruct - нельзя
	//очерёдность удаления объектов не определена
	//поэтому из деструктора нельзя обращаться к другим объектам!
	
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

$cat->name = "Мурзик";
$dog->name = "Тузик";

$bigCat = clone $cat;

echo "<pre>";
var_dump($cat);
echo "</pre>";

$cat->sayHallo("Мяу");
$dog->sayHallo("Гаф");

?>