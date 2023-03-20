<!doctype html>
<html lang="en">

<head>
    <title>Input</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./form.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="POST">
            <div class="inputbox">
                <input type="text" required="required" name="us">
                <span>User name</span>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="pw">
                <span>Password</span>
            </div>


            <div class="inputbox">
                <center>
                    <input type="submit" value="submit" name="btn">
                </center>
            </div>

        </form>


        <?php
        if (isset($_POST['btn'])) {
            $username = $_POST['us'];
            $password = $_POST['pw'];

            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $dbname = 'company';

            $conn = mysqli_connect($host, $user, $pass, $dbname);
            if (!$conn) {
                die('Could not connect: ');
            } else {
                $sql_name = "SELECT em_name FROM employee WHERE em_name = '$username';";
                $sql_avt = "SELECT em_avatar FROM employee WHERE em_name = '$username';";
                $sql_pass = "SELECT em_pass FROM employee WHERE em_pass = '$password';";
                $result_name = mysqli_query($conn, $sql_name);
                $result_avt = mysqli_query($conn, $sql_avt);
                $result_pass = mysqli_query($conn, $sql_pass);
                
                if (mysqli_num_rows($result_name) == 0) {
                    echo "You haven't registered before!";
                } else {
                    if (mysqli_num_rows($result_pass) == 0) {
                        $row_avt = mysqli_fetch_assoc($result_avt);
                        echo "<div class='images'> <h2>Is this your avatar?</h2> <img class='imgs' src='" . $row_avt['em_avatar'] . "'/></div>";
        ?>
        <?php
                    } else {
                        echo "<script type='text/javascript'>alert('Login successful');</script>";
                    }
                }
            }
        }
        ?>
    </div>
</body>
<style>
    .images {

        width: 300px;
        display: flex;
        flex-direction: column;
    }

    h2 {
        display: inline;
    }

    .imgs {
        display: inline;
    }
</style>

</html>