<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="Ex1.css">

</head>

<body>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <td colspan="2">
                        <input type="email" name="email" placeholder="Work email">
                    </td>

                </tr>
                <tr>
                    <td>
                        <input type="text" name="fname" placeholder="First name">
                    </td>
                    <td>
                        <input type="text" name="lname" placeholder="Last name">
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        <input type="password" name="password" placeholder="Password" minlength="8" maxlength="15">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" value="Sign up"></input>
                    </td>
                </tr>
            </table>
        </center>
    </form>

    <?php



    if (isset($_POST['btn'])) {

        $err = "";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];


// Fname and lname check
        if (isset($_POST['fname']) && isset($_POST['lname'])) {

            if (preg_match("/^([a-zA-Z' ]+)$/", $fname)) {

            } else {
                $err = "fname";
                echo '<script language="javascript" type="text/javascript"> ';
                echo 'alert("Invalid first name given")';
                echo '</script>';
            }
            if (preg_match("/^([a-zA-Z' ]+)$/", $lname)) {

            } else {
                $err = "lname";
                echo '<script language="javascript" type="text/javascript"> ';
                echo 'alert("Invalid last name given")';
                echo '</script>';
            }
        }
// Email check
        if (isset($_POST["email"])) {

        } else {
            echo '<script language="javascript" type="text/javascript"> ';
            echo 'alert("Input email")';
            echo '</script>';
        }
// Pass check
        if (isset($_POST["password"])) {
        } else {
            echo '<script language="javascript" type="text/javascript"> ';
            echo 'alert("Input password")';
            echo '</script>';
        }

// Error check
        if ($err == null){
            echo "<center>First name: " . $fname . "</center><br>";
            echo "<center>Last name: " . $lname . "</center><br>";
            echo "<center>Email: " . $email . "</center><br>";
            echo "<center>Password: " . $password . "</center><br>";
        }
    }
    ?>


    <main>

    </main>
    <footer>
       
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>