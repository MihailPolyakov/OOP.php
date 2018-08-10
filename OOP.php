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
    public function __construct($color, $power)
    {
      $this->color = $color;
      $this->power = $power;
    }
}

class TV
{
    public $diagonal;
    public $DisplayResolution;
    public function __construct($DisplayResolution)
    {
      $this->DisplayResolution = $DisplayResolution;
    }
    public function FullHD()
    {
      $diagonal='1080*720';
      echo $diagonal;
    }
}

class Pen
{
    public $length;
    public $corpus;
    public function __construct($length, $corpus)
    {
      $this->length = $length;
      $this->corpus = $corpus;
    }
}

class Duck
{
    public $country;
    public $weight;
    public function __construct($country, $weight)
    {
      $this->country = $country;
      $this->weight = $weight; 
    }
}


class Product
{
    public $name;
    public $price;
    public $currency;
    public function __construct($name, $price, $currency)
    {
      $this->name = $name;
      $this->price = $price;
      $this->currency = $currency;	
    }
    public function ExchangeRub()
    {
      if ($this->currency=='$') {
          return $this->price*63 .' '. 'RUB';
      } else {
	  return $this->price .' '. 'RUB';
      }
    }
}


$laurel=new Car('green', '200hp');
echo $laurel->color;
echo $laurel->power;

$skyline=new Car('gray', '289hp');
echo $skyline->color;
echo $skyline->power;
	
$lg=new TV('1000mm');
$lg->FullHD();
echo $lg->DisplayResolution;

$samsung=new TV('2000mm');
$samsung->FullHD();
echo $samsung->DisplayResolution;
	
$parker = new Pen('15cm', 'metal');
echo $parker->length;
echo $parker->corpus;

$lamy = new Pen('20cm', 'plastic');
echo $lamy->length;
echo $lamy->corpus;
	
$white = new Duck('Russia', '15kg');
echo $white->country;
echo $white->weight;

$black = new Duck('Africa', '30kg');
echo $black->country;
echo $black->weight;
		
$phone=new Product('Huawei', 35000, 'RUB');
echo $phone->name;
echo $phone->ExchangeRub();

$leptop=new Product('Lenovo', 200, '$');
echo $leptop->name;
echo $leptop->ExchangeRub();
		
class news
{
    private $sport = 'Продули матч Россия - Уругвай, со счетом 3-0';
    private $wind = 'Во Владике снова туман с дождем, в общем ничего удевительного';
    private $hotnews = 'Как нам сообщили на дорогах образовались массовые митинги';
    public function getPrivateProperty()
    {
      echo $this->sport;
      echo $this->wind; 
      echo $this->hotnews;
    }
}

$news = new news();
$news->getPrivateProperty();
