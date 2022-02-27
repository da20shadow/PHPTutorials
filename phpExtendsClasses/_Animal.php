<?php
class Animal {
    private string $name;
    private string $color;
    private int $weight;
    private array $dataAddedDynamically = Array();
    static public int $eyes = 2;

    /**
     * @param $name
     * @param $color
     * @param $weight
     */
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    //Save undefined variable in the class to array
    public function __set($name,$value){
        //Решаваш какво да стане с имети и стойноста която някой е подал
        $this->dataAddedDynamically[$name] = $value;
        echo "You are trying to add not allowed variable in the class! " . $name . " " . $value;
    }
    //Get the specified name from the array with undefined dynamically added variables
    public function __get($name){
        return $this->dataAddedDynamically[$name];
    }
    //Подобно на горните 2 само че за методи,
    // ако има извикване на не дефиниран метод решаваме какво да се случи
    public function  __call($name,$arguments){
        echo $name . "<br>";
        print_r($arguments);
    }

    //Final method sleep all animals sleeps so can't be overridden
    final public function sleep(){
        echo "zzzZZ " . $this->name . " is sleeping!";
    }
    //Calling with the ClassName::validateName();
    //Не е необходимо да има обект по този клас и неможе да използва $this-> !!!
    static public function validateName(){
        echo "Validating name!";
    }

    public function eat($food){
        echo $this->name . ": nam nam nam " . $food;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->name . " is " . $this->color . " color!";
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->name . " is " . $this->weight . " kg.";
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @param int $eyes
     */
    public static function setEyes(int $eyes): void
    {
        self::$eyes = $eyes;
    }

    /**
     * @return int
     */
    public static function getEyes(): int
    {
        return self::$eyes;
    }


}