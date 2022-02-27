<?php

class User
{
    private string $name;
    private int $age;

    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    private function setAge(int $age): void
    {
        if ($age > 0){
            $this->age = $age;
        }else{
            throw new Exception("The ages can't be 0 or negative!");
        }
    }


}