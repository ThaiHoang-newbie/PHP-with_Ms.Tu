<?php 
session_start()
?>

<body>
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#" method="post">
            <div class="field email">
                <div class="input-area">
                    <input type="email" placeholder="Email Address" name="username">
                    <i class="icon fas fa-envelope"></i>

                </div>
                <div class="error error-txt">Email</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" name="password">
                    <i class="icon fas fa-lock"></i>
                </div>
            </div>
            <input type="submit" value="Login" name="btn">
        </form>
    </div>
</body>







<?php # Form đăng nhập dùng mảng liên hợp
if (isset($_POST["username"]) || isset($_POST["password"])) {
    $us = $_POST["username"];
    $pw = $_POST["password"];
    # Session here
    $_SESSION["username"] = $us;
    
}

if (isset($_POST["btn"])) {
    $account = array(
        "1@gmail.com" => "hoang2011",
        "h@gmail.com" => "h2011"
    );
    $check = 0;

    foreach ($account as $a => $b) {
        if ($us == $a) {
            if ($pw == $b) {
                header('Location: 7th_day.php');
                exit;
            } else {
                $check = 0;
            }
        } else {
            $check++;
        }}

    if ($check != 0) {
        echo "<script> alert('Sai tài khoản') </script>";
    }else{
        echo "<script> alert('Sai mật khẩu') </script>";
    }
}
?>