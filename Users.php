<?php
require_once 'Computer.php';
class User extends Computer
{
    private string $name;
    private string $surname;
    private string $email;
    private string $birth;
    private string $gender;
    private string $pc;

    public function __construct(string $name,string $surname, string $email, string $birth, string $gender)
    { 
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->birth = $birth;
        $this->gender = $gender;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    
    }
    public function getName()
    {
        return  $this->name;
    
    }
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    
    }
    public function setBirth(string $birth)
    {
        $this->birth = $birth;
    
    }
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    
    }

public function assignComputer(Computer $pc1)
    {
        
    }
    
public function getComputer(Computer $pc1)
    {return $this->pc1;}
}

$user1 = new User("Deez","Nuts","pudding@deeznuts.com","6.9.2000","fluid");
$user1->setName('Alex');
$user1 -> assignComputer($pc1);
?>