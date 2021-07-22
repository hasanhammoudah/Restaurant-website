<?php include("header.php"); ?>
<div class="container-fluid text-center">
    <div class="row text-center">
        <div class="col-sm-2">
            <ul id="sm">
                <?php

                $con = new mysqli("localhost", "root", "", "orders");
                $st = $con->prepare("select distinct category from items");
                $st->execute();
                $rs = $st->get_result();
                while ($row = $rs->fetch_assoc())
                    echo '
                       <li>
                       <a href="?cat=' . $row["category"] . '">' . $row["category"] . '</a>
                       </li>'


                ?>

            </ul>
        </div>


        <?php
        if (isset($_GET["cat"]))
            $cat = $_GET["cat"];
        else
            $cat = "Salad";

        $con = new mysqli("localhost", "root", "", "orders");
        $st = $con->prepare("select * from items where category=?");
        $st->bind_param("s", $cat);
        $st->execute();
        $rs = $st->get_result();
        while ($row = $rs->fetch_assoc()) {
            echo '<div class="col-sm-1">
            <div class="thumbnail">
                    <img src="img/' . $row["photo"] . '"
                     width="100%" height="100%" />
                     <p>' . $row["name"] . '</p>
                    <p>' . $row["price"] . ' JOD</p>
                    <a href=add_item.php?itemid=' . $row["id"] .
                '><img src="img/add.png" style="height:35%;width:35%"/></a> 
                    </div>
                    </div>';
        }
        ?>

        <div class="col-sm-6">
            <table border="1" width="90%" id="crt">

                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Delete</th>

                </tr>
                <?php
                $con = new mysqli("localhost", "root", "", "orders");
                $st = $con->prepare("select id,name,price,qty 
                  from items inner join temp_order 
                  on items.id=temp_order.itemid 
                  where email=?");
                $st->bind_param("s", $_SESSION["user"]);
                $st->execute();
                $rs = $st->get_result();
                $total = 0;
                while ($row = $rs->fetch_assoc()) {
                    $subtotal = $row["qty"] * $row["price"];
                    $total = $total + $subtotal;
                    '<br><br>';
                    echo '<tr>';
                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>' . $row["price"] . '</td>';
                    echo '<td>' . $row["qty"] . '</td>';
                    echo '<td>' . $subtotal . '</td>';
                    echo '<td><a href=delete.php?id=' . $row["id"] . '>
                      <img src="img/delete.png" height="16" width="16" />
                       </a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
                <h1><?php echo $total;
                    $_SESSION["total"] = $total;
                    ?>
                    JOD
                </h1>
                <form action="bill.php" method="post">
                    <input type="submit" value="Confirm_order" class="btn btn-danger" />
                </form>
           
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("li")
    })
</script>

<?php include("footer.php"); ?>