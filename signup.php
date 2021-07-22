<?php include( 'header.php' ) ?>

<center>
<form action = 'signup.php' method = 'post'>
<input type = 'email' name = 'em' placeholder = 'Enter Email' class = 'form-control' style = 'width:35%' /><br />
<input type = 'password' name = 'pw' placeholder = 'Enter Password' class = 'form-control' style = 'width:35%' /><br />
<input type = 'password' name = 'con' placeholder = 'Confirm Password' class = 'form-control' style = 'width:35%' /><br />
<input type = 'text' name = 'nm' placeholder = 'Enter Name' class = 'form-control' style = 'width:35%' /><br />
<input type = 'tel' name = 'ph' placeholder = 'Enter Phone' class = 'form-control' style = 'width:35%' /><br />
<input type = 'submit' name = 'sub' value = 'Sign Up' class = 'btn btn-danger' style = 'width:35%' />

<br /><br />

</form>

</center>

<?php

if ( isset( $_POST['sub'] ) ) {
    if ($_POST['pw'] == $_POST['con']) {
        $con = new mysqli('localhost', 'root', '', 'orders');
        $st = $con->prepare('select * from users where email=?');
        $st->bind_param('s', $_POST['em']);
        $st->execute();
        $rs = $st->get_result();
        if ($rs->num_rows > 0) {
            echo '<script>alert("E-mail alerady exist")</script>';
        } else {
            $st = $con->prepare('insert into users values(?,?,?,?)');
            $st->bind_param('ssss', $_POST['em'], $_POST['pw'], $_POST['nm'], $_POST['ph']);
            $st->execute();
            $_SESSION["user"] =$_POST["em"];
            echo '<script>window.location="index.php";</script>';
        }
    }else {
        echo '<script>alert("Password Not Match")</script>';
    }
    }




?>

<?php include( 'footer.php' ) ?>