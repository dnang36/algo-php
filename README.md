# OOP in PHP
Đề bài: yêu cầu tìm hiểu về OOP trong PHP. <br>
Thực hiện bởi: Nguyễn Đoàn Đăng

Download code và run code tại đường dẫn https://github.com/dnang36/algo-php

#  Kiến thức thu được:

## 1. OOP la gi
- Lập trình hướng đối tượng là một phong cách lập trình trong đó thường nhóm tất cả các biến và hàm của một chủ đề cụ thể vào một lớp duy nhất. Lập trình hướng đối tượng được coi là tiên tiến và hiệu quả hơn so với kiểu lập trình thủ tục. Hiệu quả này bắt nguồn từ thực tế là nó hỗ trợ tổ chức mã tốt hơn, cung cấp tính mô-đun và giảm nhu cầu lặp lại chính chúng ta.
- Trong lập trình hướng đối tượng OOP, có hai thuật ngữ rất quan trọng là lớp (class) và đối tượng (object).
  - Class là định nghĩa chung cho một vật, để dễ tưởng tượng bạn có thể nghĩ đến class là một bản thiết kế trong khi đó 
  - đối tượng là một thực hiện cụ thể của bản thiết kế. 
- Ví dụ, object là một ngôi nhà cụ thể thì class là bản thiết kế ngôi nhà đó. 
- Lập trình hướng đối tượng là cách bạn thiết kế các class và sau đó thực hiện chúng thành các đối tượng trong chương trình khi cần.
- Ưu điểm:
  - tái sử dụng code.
  - dễ dàng phát triển code trong tương lai 1 cách dễ dàng linh hoạt
## 2. Triển khai class & object:
- Để tạo ra một lớp bạn sử dụng từ khóa class tiếp theo là tên class, toàn bộ nội dung class định nghĩa trong cặp {}
- Bên trong class có biến và hàm được gọi với tên là thuộc tính của lớp, phương thức của lớp. Toàn bộ tập hợp các thuộc tính và phương thức của lớp được gọi là thành viên (member) của lớp.

````
<?php
class MyClass
{
    // Các thuộc tính của lớp (dữ liệu)
    // Các phương thức - method của lớp (hàm) định nghĩa ở đây
}
?>
````

- Sau khi có được định nghĩa lớp như vậy, việc tạo ra một đối tượng của lớp thì dùng toán tử new: $obj = new MyClass;, để xem nội dung class có thể dùng var_dump
````
<?php
    class MyClass
    {
        
    }
    
    $obj = new MyClass;
    var_dump($obj);
?>
//Out: object(MyClass)
````

### 2.1. Thuộc tính (property):

- Thuộc tính là biến được khai báo trong class và có kèm theo các cơ chế (quy định phạm vi truy cập của 1 thuộc tính: public,protected,private)
- Đại diện cho những thông tin cơ bản của đối tượng mình quản lý

### 2.2. Phương thức (Method):

- là 1 hàm được khai báo trong class và có kèm theo phạm vi truy cập, nó có thể trả về giá trị, nó có thể có tham số, tham số mặc định
- Đại diện cho những hành động của đối tượng đó được thể hiện trong class

````
<?php
class User
{
    //thuộc tính 
    public  $name = "User Name";
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
    protected function processInfomation()
    {
        return $this->info = $this->name.' is '.$this->age.' years old';
    }
}

$obj = new User;
echo $obj->name;
?>

````

### 2.3. Truy cập các phương thức và thuộc tính

- Ngoài Class: truy cập thông qua đối tượng (public)
- Trong Class: truy cập thông qua từ $this->
- Cơ chế (phạm vy truy cập):
  - public: truy cập ở mọi nơi (Trong ngoài class và class con)
  - protected: truy cập ở trong class và class con
  - private: truy cập trong class 

## 3. Các tính chất của OOP:
### 3.1. Tính kế thừa:
### 3.2. Tính đa hình:
### 3.3. Tính trừ tượng:
### 3.4. Tính đóng :

