<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    </style>
    <meta charset="utf-8">
    <title>e-Wallet Management System</title>
  </head>
  <body>
        <h1>E-Wallet Management System</h1>
        <label for="balance"><h1>Balance: RM5000</h1> </label>

        <table><td>

<fieldset>
        <form class="" action="" method="post">
          <h1>Topup</h1>


          <label for="Topup">Topup: </label>
          <input type="radio" name="rm" value="3">RM3
          <input type="radio" name="rm" value="5">RM5
          <input type="radio" name="rm" value="8">RM8
          <input type="radio" name="rm" value="10">RM10

          <br><br>

          <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans">

          <br><br>

          <label for="amount">Type of payment:</label>
          <input type="radio" name="amount" value="1">Credit Card
          <input type="radio" name="amount" value="2">FPX

          <br><br>Top up with Credit Card will get <b>RM 0.50</b> cash back
          <br><br>

          <input type="submit" name="submit" value="Topup">


        </form>

      </fieldset></td>
<td>
        <br><br>

        <fieldset>
          <form class="" action="" method="post">
          <h1>Payment</h1>

          <!-- <label for="balance">Balance: </label> -->
          <!-- <input type="number" name="bal2" > -->


          <label for="Payment">Payment: </label>
          <input type="number" name="pay" value="">

          <!-- <br><br> -->

          <!-- <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans2"> -->

          <br><br>

          <label for="Time of transaction"> Time of transaction: </label>
          <input type="time" name="timetrans" value="">

          <br><br>Discount of <b>10%</b> only peak hours
          <br><br>  <b>12 - 1pm</b>
          <br><br>

          <input type="submit" name="submit2" value="Pay">

        </form>
        </fieldset>
  </body>
  <br><br>

</td></table>
  <fieldset>


  <?php
  include "view.php"
   ?>

     </fieldset>
</html>
