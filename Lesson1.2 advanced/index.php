<?php
class BookShop //Задаем Класс BookShop
{
    protected $nameBook;
    protected $author;
    protected $quantityBook;
    protected $price;

public static $counter = 0; //Задаем счетчик

public function __construct($nameBook, $author, $quantityBook, $price) //Задаем конструктор
    {
        $this->nameBook = $nameBook;
        $this->author = $author;
        $this->quantityBook = $quantityBook;
		$this->price = $price;
        static::$counter++;
        $this->info();
    }

public function discount($discount) { //Функция определения скидки
        $price = $this->price - ($this->price*$discount/100);
        echo "Цена серии '{$this->nameBook}' с учетом скидки {$price} рублей.";
        echo "<br>";
}

function info() { //Функция вывода информации о товаре
    echo "Номер серии в нашем каталоге - " . static::$counter . ". ";
    echo "Серия книг '{$this->nameBook}' автора {$this->author} стоит {$this->price}  рублей. <br>";
    }
}
class Stock extends BookShop { //Задаем класс Stock наследника BookShop
    public $stock;

    public function __construct($nameBook, $author, $quantityBook, $price, $stock) //Задаем конструктор
    {
        $this->stock = $stock; //Добавляем новое свойство "Акционный товар"
        parent::__construct($nameBook, $author, $quantityBook, $price); //Используем конструктор родителя
    }

    public function superDiscount($discount) //Функция определения супер-скидки
    {
        $price = $this->price - ($this->price*$discount/100);
		echo "Цена серии '{$this->nameBook}' с учетом супер-скидки {$price} рублей.";
		echo "<br>";
    }
    public function info() { //Функция вывода информации о товаре
        parent::info();
        echo " ({$this->stock}). <br>";
    }
}
//Создаем экземпляры Классов
$witcher = new BookShop("Ведьмак", "Анджей Сапковский", 8, 1800);
$harryPotter = new BookShop("Гарри Поттер", "Джоан Роулинг", 7, 1500);
$wolfhound = new BookShop("Волкодав", "Мария Семенова", 6, 1000);
$darkTower = new Stock("Темная башня", "Стивен Кинг", 6, 800, "Акционный товар");
//Применяем существующие методы
$witcher->discount(10);
$darkTower->superDiscount(25);

/*
class A {
    public function foo() {
        static $x = 0; //Методы существуют в единственном экземпляре. Статическая переменная существует только в локальной области видимости функции, но не теряет своего значения, когда выполнение программы выходит из этой области видимости.
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // Выведет 1
$a2->foo(); // Выведет 2
$a1->foo(); // Выведет 3
$a2->foo(); // Выведет 4

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A { // Наследование класса (и метода) приводит к тому, что всё-таки создается новый метод. B дочерний класс от базового А. В имеет тот же набор свойств и методов что и A, но реализует их самостоятельно.
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //Выведет 1
$b1->foo(); //Выведет 1
$a1->foo(); //Выведет 2
$b1->foo(); //Выведет 2
*/