<?php
class User
{
    //thuộc tính
    public  $name = "Đăng Nguyễn";
    private $age;
    private $info;

    //phương thức
    public function setAge($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
        $this->processInfomation();
    }

    //phương thức
    public function processInfomation()
    {
        return $this->info = $this->name.' is '.$this->age.' years old';
    }
}

$obj = new User;
//echo $obj->name;
echo $obj->setAge('Dang', 20);
echo $obj->processInfomation();
?>