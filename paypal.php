<?php include 'header.php'; ?>
<center>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="sb-sjvpo2222526@business.example.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Eat@Home">
  <input type="hidden" name="amount" value="<?php echo $_SESSION["total"]; ?>">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png"
  alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</center>
<?php include 'footer.php'; ?>