<?php
interface Animal {
	public function respirar();
	public function comer();
}

class Dog {
	public function ladrar() {
		echo "Gua guau guau";
	}

	public function respirar() {}
	public function comer() { echo "el perro está comiendo...";}
}

class Cat extends Dog implements Animal{
  public function comer() {
    echo 'el gato esta comiendo';
  }
}
?>
