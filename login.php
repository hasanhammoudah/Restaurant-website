<?php include("header.php") ?>


<center>
    <form action="login.php" method="post">
        <input type="email" name="em" placeholder="Enter Email" class="form-control" style="width:35%" /><br />
        <input type="password" name="pw" placeholder="Enter Password" class="form-control" style="width:35%" /><br />
        <input type="submit" name="sub" value="Sign In" class="btn btn-danger" style="width:35%" />
        <br /><br />
        <a href="signup.php" class="btn btn-primary" style="width:35%">Sign Up</a>

    </form>

</center>

<?php
if (isset($_POST["sub"])) {
    $con = new mysqli("localhost", "root","", "orders");
    $st = $con->prepare("select * from users where email=? and password=?");
    $st->bind_param('ss', $_POST["em"], $_POST["pw"]);
    $st->execute();
    $rs = $st->get_result();
    if ($rs->num_rows == 0) {
        echo '<script>alert("Login Fsil");</script>';
    }else{
            $_SESSION["user"] =$_POST["em"];
            echo '<script>window.location="index.php";</script>';
    }
}

?>




<?php include("footer.php") ?>