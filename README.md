# OOP in PHP

## Đề bài: yêu cầu tìm hiểu về OOP trong PHP. <br>

### Thực hiện bởi: [Nguyễn Đoàn Đăng](https://github.com/dnang36)

### Download code và run code tại đường dẫn https://github.com/dnang36/algo-php

#  Kiến thức thu được:

## 1. OOP là gì:
- Lập trình hướng đối tượng là một phong cách lập trình trong đó thường nhóm tất cả các biến và hàm của một chủ đề cụ thể vào một lớp duy nhất. Lập trình hướng đối tượng được coi là tiên tiến và hiệu quả hơn so với kiểu lập trình thủ tục. Hiệu quả này bắt nguồn từ thực tế là nó hỗ trợ tổ chức mã tốt hơn, cung cấp tính mô-đun và giảm nhu cầu lặp lại chính chúng ta.
- Ưu điểm:
  - tái sử dụng code.
  - dễ dàng phát triển code trong tương lai 1 cách dễ dàng linh hoạt
- Trong lập trình hướng đối tượng OOP, có hai thuật ngữ rất quan trọng là lớp (class) và đối tượng (object).
  - Class là định nghĩa chung cho một vật, để dễ tưởng tượng bạn có thể nghĩ đến class là một bản thiết kế trong khi đó 
  - đối tượng là một thực hiện cụ thể của bản thiết kế. 
- Ví dụ, object là một ngôi nhà cụ thể thì class là bản thiết kế ngôi nhà đó. 
- Lập trình hướng đối tượng là cách bạn thiết kế các class và sau đó thực hiện chúng thành các đối tượng trong chương trình khi cần.
## 2. Triển khai class & object:
- Để tạo ra một lớp bạn sử dụng từ khóa class tiếp theo là tên class, toàn bộ nội dung class định nghĩa trong cặp {}
- Bên trong class có biến và hàm được gọi với tên là thuộc tính của lớp, phương thức của lớp. Toàn bộ tập hợp các thuộc tính và phương thức của lớp được gọi là thành viên (member) của lớp.

````php
<?php
class MyClass
{
    // Các thuộc tính của lớp (dữ liệu)
    // Các phương thức - method của lớp (hàm) định nghĩa ở đây
}
?>
````
- Sau khi có được định nghĩa lớp như vậy, việc tạo ra một đối tượng của lớp thì dùng toán tử new: $obj = new MyClass;, để xem nội dung class có thể dùng var_dump
````php
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

````php
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
- Sự khác biệt giữa public, private, protected

| Private                                                                      | Protected                                                                                                                                                                                                             | Public                                                                                                                              |
|------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------|
| Ta không thể truy xuất tới thành phần private ở lớp con hoặc ở bên ngoài lớp | Chỉ cho phép truy xuất nội bộ trong lớp đó và lớp kế thừa, riêng ở bên ngoài lớp sẽ không truy xuất được, mức protected thường được sử dụng cho những phương thức và thuộc tính có khả năng bị lớp con định nghĩa lại | Có thể truy cập tới các phương thức và thuộc tính ở bất cứ đâu, dù trong nội bộ của lớp hay ở lớp con hay cả bên ngoài lớp đều được |

## 2.4. Sự khác nhau giữa Trait, Interface, Abstract

| Interface                                                                                                                                                                                     | Abstract                                                                                                                                                                                                                           | Trait                                                                                                                                                  |
|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------|
| chỉ  khai báo phương thức , các hằng. Không được khai báo biến  Không định nghĩa các phương thức                                                                                              | Là một lớp  chứa các biến , hằng , abstract method và method ,các abstract method không được định                                                                                                                                  | Traits là một module giúp cho chúng ta có thể sử dụng lại các phương thức, thuộc  được khai báo trong trait  vào các class khác nhau một cách đơn giản |
| Khai báo Interface dùng từ khóa interface để thay thế cho từ khóa class                                                                                                                       | Thêm từ khóa abstract trước từ khóa class                                                                                                                                                                                          | Để khai báo , sử dụng cú pháp trait thay cho class                                                                                                     |
| Một class có thể implement nhiều interface                                                                                                                                                    | class chỉ có thể kết thừa 1 asbstract                                                                                                                                                                                              | class có thể use nhiều trait                                                                                                                           |
| Nếu một lớp khác implement một interface thì nó phải khai báo và định nghĩa tất cả các phương thức trong interface                                                                            | Lớp abstract sẽ định nghĩa các phương thức mà từ đó các lớp con sẽ kế thừa nó và OVERWITE lại                                                                                                                                      | Các phương thức trong Traits có thể bị override lại trong class sử dụng nó                                                                             |
| Có tính kế thừa : Một interface A có thể kế thừa một interface B. Lúc này lớp nào implement interface A thì phải định nghĩa lại tất cả các phương thức mà cả hai interface A và B đã khai báo | Lớp Abstract cũng có tính kế thừa. abstract A kế thừa abstract B thì một lớp nào đó kế thừa A phải viết lại toàn bộ các phương thức của  abstract A và B                                                                           | Có thể lồng nhau một cách đơn giản                                                                                                                     |
| Không có khái niệm phạm vi của interface, tất cả đều là public.                                                                                                                               | visibility là một trong 2 từ khóa public, protected                                                                                                                                                                                | Các phương thức trong trait có thể thay đổi được phạm vi                                                                                               |
| Sử  dụng : Khi muốn lớp con tuân thủ theo các phương thức được khai báo trong interface và lớp con có thể kế thừa nhiều interface                                                             | Khi bạn muốn người lập trình phải tuân thủ theo một số các phương thức và các phương thức này đã được định nghĩa sẵn những thứ cơ bản, để giúp cho lập trình viên có thể kế thừa các phương thức này và phát triển lớp con của họ. | Khi nhiều class sử dụng chung phương thức, ta có thể gom các phương thức chung vào 1 trait để sử dụng nhiều lần                                        |

## 3. Các tính chất của OOP:
### 3.1. Tính kế thừa:
- Lớp con sẽ kế thừa tất cả các thuộc tính và phuong thức public hoặc protected của lớp cha .
- Một lớp con được định nghĩa bằng keyword extends.
````php
class Child extends Parents{
// your code
}
````
- Các phương thức kế thừa từ lớp cha sẽ bị ghi đè nếu lớp con có các phương thức tương tự. Để tránh trường hợp này, có thể sử dụng khóa final trước method trong lớp cha.

### 3.2. Tính đa hình:
- Cho phép các đối tượng khác nhau thực thi cùng 1 chức năng theo cách khác nhau
### 3.3. Tính trừ tượng:
- Là phương pháp trừu tượng hoá các định nghĩa lên những hành dộng, tính chất mà đối tượng cần phải có.

### 3.4. Tính đóng gói: 
- Cho phép che giấu các thông tin và các thức xử lý bên trong của đối tượng. Các đối tượng khác không thể tác động trực tiếp đến và làm thay đối trạng thái của đối tượng mà chỉ thông qua các phương thức công khai do đối tượng cung cấp.

## 4. Magic method
- Magic methods là các phương thức đặc biệt được tạo ra nhằm giải quyết các vấn đề về sự kiện trong chương trình (cụ thể là với class), và đối với PHP cũng thế.
- Trong PHP có hỗ trợ chúng ta 15 magic method với từng chức năng khác nhau:
  -  __construct(): gọi khi khởi tạo đối tượng.
  - __destruct(): gọi khi hủy đối tượng.
  - __set(): gọi khi ta truyền dữ liệu cho một thuộc tính không được phép truy cập.
  - __get(): khi đọc dữ liệu từ một thuộc tính không được phép truy cập.
  - __isset(): Hàm được gọi khi chúng ta thực hiện kiểm tra xem 1 phương thức có tồn tại hay không hay truy cập vào thuộc tính không được truy cập .Cụ thể là isset() hay empty().(Không áp dụng cho thuộc tính tĩnh )
  -  __unset(): được gọi khi hàm unset() được sử dụng trong một thuộc tính không được phép truy cập.
  - __call() và __callStatic(): Hàm đưọc gọi khi đối tượng truy cập đến phương thức không tồn tại. Nhận hai tham số: $method và $parameter tương ứng là tên phuong thức và mảng tham số đựọc truyền vào.
  - __toString(): phương thức này giúp class chỉ định xem sẽ in ra cái gì khi nó được dùng.
  - __invoke():phương thức này được gọi khi một lệnh cố gắng gọi một đối tượng như một hàm.
  - __sleep(): được gọi khi serialize() một đối tượng.
  - __wakeup: được gọi khi unserialize() đối tượng.
  - __set_state(): được dùng khi chúng ta var_export() một đối tượng.
  - __clone(): được sử dụng khi chúng ta clone một object.
  - __debugInfo(): được gọi khi chúng ta sử dụng hàm vardump().

## 5. PSR-4 Autoloader - Tiêu chuẩn viết tự động nạp khởi tạo PHP
- Trước đây trong PHP việc nạp các file thư viện, mã dùng lại vào một file PHP khác thường dùng các lệnh include và require. Điều này thực sự mất thời gian và rắc rối. Tiếp theo từ PHP5 đã có các hàm trợ giúp tự động hóa việc gọi thư viện bằng các hàm như: spl_autoload_register, spl_autoload_functions, spl_autoload_extensions ...
- Từ các hàm này cùng với khái niệm namespace trong PHP, các lập trình viên xây dựng cho mình một bộ code tự động nạp. Tuy nhiên để dễ dàng chia sẻ dùng lại code giữa các framework, giữa các dự án ..., cộng đồng PHP thống nhất một cách thức tự động nạp thư viện theo một chuẩn bố trí thư viện. Việc thống nhất đó hình thành một tiêu chuẩn nên tuân theo đó là PSR - 4 Autoload. Ngoài tiêu chuẩn tự động load PSR-4 còn có tiêu chuẩn tự động load theo PSR - 0 (tuy nhiên đã lỗi thời, các dự án mới không nên theo PSR - 0 nữa). 
- Ứng dụng của tiêu chuẩn này như sau: Phải có một có chế và cách bố trí code trong các thư mục sao cho mọi lớp (class) đều có thể được tham chiếu đến bằng cách viết mã như sau:
- PSR viết tắt của PHP Standard Recommendation là các tiêu chuẩn trong viết code PHP.
- PSR - 4 là các tiêu chuẩn về tự động tải. Nội dung chính của PSR-4 là quy tắc tổ chức các thư mục code sao cho mọi class đưọc tham chiếu đến bằng cách cài đăt như sau:

````php
\<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
````
-Có nghĩa là mỗi lớp bạn phải xây dựng sao cho có thể được tham chiếu đến bởi dòng code ba thành phần: Namespace, Các SubNamespaceNames con, và tên lớp ClassName.
  - NameSpace : Tiền đố đầu tiên bắt buộc phải có - được hiểu là tên vendor.  Tên này do bạn tự đặt, sao cho không xung đột tên các thư viện khác.
  - SubNameSpaces: Các namespace con (theo sau NameSpace đầu tiên - vendor).  Có một hoặc nhiều tùy bạn. Nhưng bắt đầu từ SubNameSpace thì nó tương ứng với cấu trúc thư mục lưu trữ code.  Ví dụ bạn lưu trữ code thư viện tại thư mục gốc là src, và gọi đến một lớp của bạn tên là cls1 với cú pháp như sau \myvendor\namespace1\namespace2\cls1 điều này có nghĩa là trong thư mục src có thư mục tên là namespace1, trong namespace1 có thư mục namespace2.
  - ClassName: Bắt buộc phải có và phải có tên file PHP trùng tên ClassName ở thư mục tương ứng với namespace cuối cùng (ClassName.php), trong file đó sẽ định nghĩa nội dung của code của lớp.

## 6. Clean Code
### Variables(biến):
- Sử dụng tên biến có ý nghĩa và có thể phát âm
- Sử dụng cùng từ vựng cho 1 loại biến
- Sử dụng tên có khả năng tìm kiếm
- sử dụng các biến giải thích
- Tránh các lưới quá sâu và trả về quá sớm: Qúa nhiều ìf-else sẽ làm code khó theo dõi. Rõ ràng tốt hơn ngầm.
- Đừng để người đọc phải dịch nghĩa tên biến của bạn. Rõ ràng thì tốt hơn ngầm định
- Không thêm các ngữ cảnh không cần thiết. Nếu tên lớp/đối tượng của bạn đã nói lên điều gì đó, đừng nhắc lại nó trong tên biến của bạn

## 7.SOLID
- SOLID là viết tắt của 5 chữ cái đầu trong 5 nguyên tắc thiết kế hướng đối tượng. Giúp cho lập trình viên viết ra những đoạn code dễ đọc, dễ hiểu, dễ maintain. Nó được đưa ra bởi Robert C. Martin và Michael Feathers. 5 nguyên tắc đó bao gồm:
  - Single responsibility priciple (SRP):
  - Open/Closed principle (OCP)
  - Liskov substitution principe (LSP)
  - Interface segregation principle (ISP)
  - Dependency inversion principle (DIP)
  
7.1. Single responsibility priciple
- Nguyên lý đầu tiên ứng với chữ S trong SOLID, có ý nghĩa là một class chỉ nên giữ một trách nhiệm duy nhất. Một class có quá nhiều chức năng sẽ trở nên cồng kềnh và trở nên khó đọc, khó maintain
- 
7.2. Open/Closed principle (OCP)
- Có thể thoải mái mở rộng 1 class, nhưng không được sửa đổi bên trong class đó. Theo nguyên lý này, mỗi khi ta muốn thêm chức năng,.. cho chương trình, chúng ta nên viết class mới mở rộng class cũ ( bằng cách kế thừa hoặc sở hữu class cũ) không nên sửa đổi class cũ.

7.3. Liskov Substitution Principle(LSP)
- Trong một chương trình, các object của class con có thể thay thế class cha mà không làm thay đổi tính đúng đắn của chương trình

7.4. Interface Segregation Principle
- Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể

7.5. Dependency inversion principle
- Các module cấp cao không nên phụ thuộc vào các modules cấp thấp.
   Cả 2 nên phụ thuộc vào abstraction. 
- Interface (abstraction) không nên phụ thuộc vào chi tiết, mà ngược lại.
   ( Các class giao tiếp với nhau thông qua interface,
   không phải thông qua implementation.)
