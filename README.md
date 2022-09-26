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
- Chúng ta gọi các thuộc tính cho các biến bên trong một lớp. Thuộc tính có thể chấp nhận các giá trị như chuỗi, số nguyên và boolean (giá trị đúng / sai), giống như bất kỳ biến nào khác.
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
### 3.4. Tính đóng gói: 


## 4. Magic method
- Magic methods là các phương thức đặc biệt được tạo ra nhằm giải quyết các vấn đề về sự kiện trong chương trình (cụ thể là với class), và đối với PHP cũng thế.
- Trong PHP có hỗ trợ chúng ta 15 magic method với từng chức năng khác nhau:
  -  __construct(): gọi khi khởi tạo đối tượng.
  - __destruct(): goij khi hủy đối tượng.
  - __set(): gọi khi ta truyền dữ liệu cho một thuộc tính không được phép truy cập.
  - __get(): khi đọc dữ liệu từ một thuộc tính không được phép truy cập.
  - __isset(): được gọi khi gọi hàm isset() hoặc empty() trên một thuộc tính không được phép truy cập.
  -  __unset(): được gọi khi hàm unset() được sử dụng trong một thuộc tính không được phép truy cập.
  - __call():được gọi khi ta gọi một phương thức không được phép truy cập trong phạm vi của một đối tượng.
  - __callstatic(): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một phương thức tĩnh.
  - __toString(): phương thức này giúp class chỉ định xem sẽ in ra cái gì khi nó được dùng.
  - __invoke():phương thức này được gọi khi một lệnh cố gắng gọi một đối tượng như một hàm.
  - __sleep(): được gọi khi serialize() một đối tượng.
  - __wakeup: được gọi khi unserialize() đối tượng.
  - __set_state():
  - __clone(): được sử dụng khi chúng ta clone một object.
  - __debugInfo(): được gọi khi chúng ta sử dụng hàm vardump().

## 5. PSR-4 Autoloader - Tiêu chuẩn viết tự động nạp khởi tạo PHP
- Trước đây trong PHP việc nạp các file thư viện, mã dùng lại vào một file PHP khác thường dùng các lệnh include và require. Điều này thực sự mất thời gian và rắc rối. Tiếp theo từ PHP5 đã có các hàm trợ giúp tự động hóa việc gọi thư viện bằng các hàm như: spl_autoload_register, spl_autoload_functions, spl_autoload_extensions ...
- Từ các hàm này cùng với khái niệm namespace trong PHP, các lập trình viên xây dựng cho mình một bộ code tự động nạp. Tuy nhiên để dễ dàng chia sẻ dùng lại code giữa các framework, giữa các dự án ..., cộng đồng PHP thống nhất một cách thức tự động nạp thư viện theo một chuẩn bố trí thư viện. Việc thống nhất đó hình thành một tiêu chuẩn nên tuân theo đó là PSR - 4 Autoload. Ngoài tiêu chuẩn tự động load PSR-4 còn có tiêu chuẩn tự động load theo PSR - 0 (tuy nhiên đã lỗi thời, các dự án mới không nên theo PSR - 0 nữa). 
- Ứng dụng của tiêu chuẩn này như sau: Phải có một có chế và cách bố trí code trong các thư mục sao cho mọi lớp (class) đều có thể được tham chiếu đến bằng cách viết mã như sau:
````
\<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
````
-Có nghĩa là mỗi lớp bạn phải xây dựng sao cho có thể được tham chiếu đến bởi dòng code ba thành phần: Namespace, Các SubNamespaceNames con, và tên lớp ClassName.
  - NameSpace : Tiền đố đầu tiên bắt buộc phải có - được hiểu là tên vendor.  Tên này do bạn tự đặt, sao cho không xung đột tên các thư viện khác.
  - SubNameSpaces: Các namespace con (theo sau NameSpace đầu tiên - vendor).  Có một hoặc nhiều tùy bạn. Nhưng bắt đầu từ SubNameSpace thì nó tương ứng với cấu trúc thư mục lưu trữ code.  Ví dụ bạn lưu trữ code thư viện tại thư mục gốc là src, và gọi đến một lớp của bạn tên là cls1 với cú pháp như sau \myvendor\namespace1\namespace2\cls1 điều này có nghĩa là trong thư mục src có thư mục tên là namespace1, trong namespace1 có thư mục namespace2.
  - ClassName: Bắt buộc phải có và phải có tên file PHP trùng tên ClassName ở thư mục tương ứng với namespace cuối cùng (ClassName.php), trong file đó sẽ định nghĩa nội dung của code của lớp.

