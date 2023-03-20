<!doctype html>
<html lang="en">

<head>
    <title>Hello</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./10th.css">
</head>


<?php



class Person
{
    public $name;
    public $address;
    public $phonenumber;

    public $email;

    public $age;

    public function __construct($name, $age, $address, $email, $phonenumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
    }
    public function getInfor()
    {
        echo "Name: " . $this->name . "<br>"
            . "Age: " . $this->age . " years old." . "<br>"
            . "Address: " . $this->address . "<br>"
            . "Email: " . $this->email . "<br>"
            . "Phone number: " . $this->phonenumber . "<br>";
    }
}

// Employee is inherited from Person
class Employee extends Person
{
    public $degree;
    public function __construct($degree)
    {
        $this->degree = $degree;
    }
    public function getDegree()
    {
        echo "Degree: " . $this->degree;
    }
    public function getEmployee()
    {
        parent::__construct("Hoang", 20, "Kon Tum", "thaihoang@gmail.com", "0823 714 169");
        parent::getInfor();
        self::getDegree();
    }
}

class Customer extends Person
{
    public $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        echo "Type: " . $this->type;
    }
    public function getCustomer()
    {
        parent::__construct("Hoang", 20, "Kon Tum", "thaihoang@gmail.com", "0823 714 169");
        parent::getInfor();
        self::getType();
    }
}



echo "Employee:<br>";
$objE = new Employee("Bachelor");
$objE->getEmployee();
echo "<br>----------------------<br>";
echo "Customer: <br>";
$objE = new Customer("VIP");
$objE->getCustomer();



class Phanso
{
    private $type;
    private $mauso1;
    private $tuso1;
    private $mauso2;
    private $tuso2;
    public function __construct($type, $tuso1, $mauso1, $tuso2, $mauso2)
    {
        $this->type = $type;
        $this->mauso1 = $mauso1;
        $this->tuso1 = $tuso1;
        $this->mauso2 = $mauso2;
        $this->tuso2 = $tuso2;
    }
    public function getCalculate()
    {
        if ($this->type == "+") {
            $addtu = ($this->tuso1) + ($this->tuso2);
            $addmau = ($this->mauso1) + ($this->mauso2);
            return
                "<sup>" . $this->tuso1 . "</sup>&frasl;" . "<sub>" . $this->mauso1 . "</sub>" . "+" .
                "<sup>" . $this->tuso2 . "</sup>&frasl;" . "<sub>" . $this->mauso2 . "</sub>" . "=" .
                "<sup>" . $addtu . "</sup>&frasl;" . "<sub>" . $addmau . "</sub>" . "<br>";
        } else if ($this->type == "-") {
            if ($this->mauso1 == $this->mauso2) {
                $subtu = ($this->tuso1) - ($this->tuso2);
                return
                    "<sup>" . $this->tuso1 . "</sup>&frasl;" . "<sub>" . $this->mauso1 . "</sub>" . "-" .
                    "<sup>" . $this->tuso2 . "</sup>&frasl;" . "<sub>" . $this->mauso2 . "</sub>" . "=" .
                    "<sup>" . $subtu . "</sup>&frasl;" . "<sub>" . $this->mauso1 . "</sub>" . "<br>";
            } else {
                return "Hãy nhập mẫu số bằng nhau để thực hiện hành động này vì chưa update";
            }
        } else if ($this->type == "*") {
            $multitu = ($this->tuso1) * ($this->tuso2);
            $multimau = ($this->mauso1) * ($this->mauso2);
            return
                "<sup>" . $this->tuso1 . "</sup>&frasl;" . "<sub>" . $this->mauso1 . "</sub>" . "*" .
                "<sup>" . $this->tuso2 . "</sup>&frasl;" . "<sub>" . $this->mauso2 . "</sub>" . "=" .
                "<sup>" . $multitu . "</sup>&frasl;" . "<sub>" . $multimau . "</sub>" . "<br>";
        } else if ($this->type == ":") {
            $divtu = ($this->tuso1) * ($this->mauso2);
            $divmau = ($this->mauso1) * ($this->tuso2);
            return
                "<sup>" . $this->tuso1 . "</sup>&frasl;" . "<sub>" . $this->mauso1 . "</sub>" . ":" .
                "<sup>" . $this->tuso2 . "</sup>&frasl;" . "<sub>" . $this->mauso2 . "</sub>" . "=" .
                "<sup>" . $divtu . "</sup>&frasl;" . "<sub>" . $divmau . "</sub>" . "<br>";
        }
    }
}


echo "<br>----------------------<br>";
echo "Phan so:" . "<br>";
$calsum = new Phanso("+", 1, 2, 1, 2);
echo $calsum->getCalculate();

$caldevide = new Phanso("-", 4, 2, 1, 2);
echo $caldevide->getCalculate();

$calmulti = new Phanso("*", 1, 3, 1, 2);
echo $calmulti->getCalculate();

$calmulti = new Phanso(":", 1, 3, 1, 2);
echo $calmulti->getCalculate();





# Connect MySQL


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'fruit';
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ');
} else {
    echo 'Connected successfully';
}


echo "<br>";
$sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);

?>








<table>
    <tr>
        <th>Số thứ tự</th>
        <th>Tên sản phẩm</th>
        <th>Đơn vị tính</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>";
    ?>
            <tr>
                <td><?php echo $row["pro_id"] ?></td>
                <td><?php echo $row["pro_name"] ?></td>
                <td><?php echo $row["unit"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><?php echo $row["pro_quantity"] ?></td>
                <td><img class="imgs" src="<?php echo $row["fruit_image"] ?>" /></td>
            </tr>

    <?php
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</table>

</html>