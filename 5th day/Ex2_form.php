<?php if (isset($_POST["btn"])) {
    $tk = $_POST["txtTK"];
    $mk = $_POST["txtMK "];
    $a = ["h"];
    $b = ["h123"];
    if ($a[0] == $tk && $b[0] == $mk) {
        echo "<script> alert ('Đăng nhập thành công')</script>";
        header("refresh:0.5; url =  https://www.youtube.com/");
    } elseif ($a[0] != $tk && $b[0] != $mk) {
        echo "<script> alert('Sai tài khoản hoặc mật khẩu') </script>";
    } elseif ($a[0] != $tk) {
        echo "<script> alert ('Sai tài khoản hoặc mật khẩu') </script>";
    } elseif ($b[0] != $mk) {
        echo "<script> alert ('Sai tài khoản hoặc mật khẩu') </script>";
    }
}
?>



<body>
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#" method="post">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address" name="txtTK">
                    <i class="icon fas fa-envelope"></i>

                </div>
                <div class="error error-txt">Email</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" name="txtMK">
                    <i class="icon fas fa-lock"></i>

                </div>
                <div class="error error-txt">Password</div>
            </div>
            <input type="submit" value="Login" name="btn">
        </form>
    </div>


</body>

</html>