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
                <div class="error error-txt">Password</div>
            </div>
            <input type="submit" value="Login" name="btn">
        </form>
    </div>
</body>





<?php # Form đăng nhập dùng mảng liên hợp
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password "];
}

if (isset($_POST["btn"])) {
    $account = array(
        "hoang" => "hoang2011",
        "h@gmail.com" => "h2011"
    );

    foreach ($account as $a => $b) {
        if ($username == $a && $password == $b) {
            echo '<p class="error">Username password combination is wrong!</p>';
        }

    }
}
?>