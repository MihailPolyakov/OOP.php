1. Инкапсуляция - как изолирование обьекта и добавление всех свойств и мотодов к нему.
2. Плюсы объектов
    - более читабельный код
    - Объекты не зависимы друг от друга, и если даже что то изменить в одном это не повлияет на другой
    - Код удобней, легче и быстрее писать.
    Минусы:  
    - Пока обнаружил только один, и то может быть по моей неопытности. Если сравнивать с массивом, 
       то у каждого значения есть ключ, который может быть ассоциативным и значение ключа можно вывести. В объекте ты выводишь только значение
        переменной, и сделать ее ассциативной не получается.
<?php

class Car
{
	public $color;
	public $power;
}

class TV
{
	public $diagonal;
	public $DisplayResolution;
	public function __construct($diagonal, $DisplayResolution)
	{
		$this -> diagonal = $diagonal;
		$this -> DisplayResolution = $DisplayResolution;
	}
}

class Pens
{
	public $length;
	public $corpus;
	public function __construct($length, $corpus)
	{
		$this -> length = $length;
		$this -> corpus = $corpus;
	}
}

class Ducks
{
	public $country;
	public $weight;
	public function __construct($country, $weight)
	{
		$this -> country = $country;
		$this -> weight = $weight;
	}
}


class Products
{
	public $name;
	public $price;
	public function __construct($name, $price)
	{
		$this -> name = $name;
		$this -> price = $price;
	}
}


$laurel=new Car();
$skyline=new Car();

$lg=new TV('28см','1280*720');
$sumsung=new TV('50см','1920*1080');

$parker=new Pens('15cm','metal');
$lamy=new Pens('20cm','plastic');

$white=new Ducks('Russia','15kg');
$black=new Ducks('Africa','30kg');

$phone=new Products('Huawai', 35000);
$leptop=new Products('Lenovo', 45000);
