<?php if (isset($_POST["btn"])) {
    $tk = $_POST["1"];
    $mk = $_POST["2"];
    $a = ["h"];
    $b = ["h123"];
    if ($a[0] == $tk && $b[0] == $mk) {
        echo "<script> alert ('Đăng nhập thành công')</script>";
        header("refresh:0.5; url =  https://www.youtube.com/");
    } elseif ($a[0] != $tk && $b[0] != $mk) {
        echo "<script> alert('sai tài khoản và password') </script>";
    } elseif ($a[0] != $tk) {
        echo "<script> alert ('đăng nhập sai tài khoản') </script>";
    } elseif ($b[0] != $mk) {
        echo "<script> alert ('đăng nhập sai password') </script>";
    }
}
?>



<body>
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#" method="post">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address" name="1">
                    <i class="icon fas fa-envelope"></i>

                </div>
                <div class="error error-txt">Email</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" name="2">
                    <i class="icon fas fa-lock"></i>

                </div>
                <div class="error error-txt">Password</div>
            </div>
            <input type="submit" value="Login" name="btn">
        </form>

    </div>


</body>

</html>