<?php

Class Animal {
	
	protected $name = '';
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
}

Class Cat extends Animal {
	
	public function meow()
	{
		$name = parent::getName();
		return "Cat $name is saying meow";
	}
}

$tiger = new Animal ("Myr");
echo $tiger->getName();
echo '<br />';
$cat = new Cat ("Myrchik");
echo $cat->getName();
echo '<br />';
echo $cat->meow();