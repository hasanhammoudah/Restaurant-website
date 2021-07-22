<?php include 'header.php'; ?>

<?php 
    $con =new mysqli("localhost","root","","orders");
    //insert to Bill
    $st1 = $con->prepare("insert into bill(email) values(?)");
    $st1->bind_param("s", $_SESSION["user"]);
    $st1->execute();
    //select max bill no
    $st2 = $con->prepare("select max(bill_no) as lastno from bill 
            where email=?");
    $st2->bind_param("s", $_SESSION["user"]);
    $st2->execute();
    $rs2 = $st2->get_result();
    $row2 = $rs2->fetch_assoc();
    //select from temp order
    $st3 = $con->prepare("select * from temp_order 
            where email=?");
    $st3->bind_param("s", $_SESSION["user"]);
    $st3->execute();
    $rs3 = $st3->get_result();
    while ($row3 = $rs3->fetch_assoc())
    {
        //insert to Bill Det
        $st4 = $con->prepare("insert into billdet values(?,?,?)");
        $st4->bind_param("iii", $row2["lastno"],
                $row3["itemid"],$row3["qty"]);
        $st4->execute();
    }
    //Delete from temp order
        $st5 = $con->prepare("delete from temp_order where email=?");
        $st5->bind_param("s", $_SESSION["user"]);
        $st5->execute();
        echo '<script>window.location="paypal.php";</script>';
?>

<?php include 'footer.php'; ?>