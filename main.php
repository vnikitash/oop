<?php


class PaymentSystem
{
    const TAX = 0;

    public function pay(float $amount)
    {
        echo "You want to pay $amount. Tax is: " . static::TAX . ". Total: " . ($amount * (1 + static::TAX));
    }
}

class LiqPay extends PaymentSystem
{
    const TAX = 0.05;
}

class Fondy extends PaymentSystem
{
    const TAX = 0.02;
}

class Stripe extends PaymentSystem
{
    const TAX = 0.015;
}


$liqPay = new LiqPay();
$fondy = new Fondy();
$stripe = new Stripe();

$stripe->pay(100);
$liqPay->pay(100);
$fondy->pay(100);







































die();

class GrandFather
{
    protected $firstName;
    protected $lastName;
    protected $gender;

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setGender(bool $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getGreetings(): string
    {
        return "Welcome, I am " . (($this->gender === true) ? "Mr. " : "Mrs. ") . "{$this->firstName} {$this->lastName}!";
    }
}

class Child extends GrandFather
{
    public function getGreetings(): string
    {
        return "I am " . ((!$this->gender) ? "chika " : "bandit ") . $this->firstName[0] . $this->lastName[0];
    }
}


$human = new GrandFather();
$human
    ->setFirstName("Alex")
    ->setLastName("Yuaschuk")
    ->setGender(true);

$human2 = new Child();

$human2
    ->setFirstName("Viktoriia")
    ->setLastName("Samoilenko")
    ->setGender(false);

$human3 = new Child();

$human3
    ->setFirstName("Ighor")
    ->setLastName("Khlupin")
    ->setGender(true);

echo $human->getGreetings();
echo PHP_EOL;
echo $human2->getGreetings();
echo PHP_EOL;
echo $human3->getGreetings();










































die();
class Human
{
    private $firstName;
    private $lastName;
    private $age;

    public function setAge(int $age): self
    {
        if ($age < 0) {
            die("Age should be at least 0!");
        }

        $this->age = $age;

        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$human = new Human();
echo $human->setFirstName("Anastasia")
    ->setLastName("Zhuravel")
    ->setAge(27)
    ->getFullName();

echo PHP_EOL;

echo $human->setAge(28)
    ->setLastName("Leleka")
    ->getFullName();
