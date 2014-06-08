<!DOCTYPE html>
<html lang="en">
<title>Booking Review</title>
<?php include 'header.php'; ?>
<body>

<div class="container">
<div class="bw-page" id="bw-booking-review">
  
<div class="page-header">
  <h3><img src="images/bw-logo.png" width="50"> Change / Cancel </h3>
</div>
  
<header class="navbar" role="banner" id="bw-header">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bw-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse bw-navbar-collapse" role="navigation" id="header-responsive">
      <ul class="nav navbar-nav social header">
        <li><a href="#">Search</a></li>
        <li><a class="bw-active" href="#">Booking Review</a> <div class="arrow-down"></div></li>
        <li><a href="#">Select New Transfer</a></li>
        <li><a href="#">Summary &amp; Payment</a></li>
        <li><a href="#">Confirmation</a></li>
      </ul>
    </nav>
  </div>
</header> 

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Change Transfer Review</h4>
    <div class="table-responsive">
     <table class="table table-bordered table-curved" id="bw-search-results-select-transfer-table">
        <tr>
          <th>Date</th>
          <th>From / Pick Up</th>
          <th>Pick Up time</th>
          <th>To / Drop off</th>
          <th>Drop Off Time</th>
          <th>Name</th>
          <th>Price</th>
          <th>No. of Passengers</th>
          <th>Change</th>
          <th>Cancel</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12 June 2010</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 am</td>
          <td><strong>Backpackers</strong></td>
          <td>11:45 am</td>
          <td>Albert</td>
          <td>USD 25.00</td>
          <td>22</td>
          <td><a href="#"><img src="images/button_booking-change.png" alt="Change"></a></td>
          <td><a href="#"><img src="images/button_booking-cancel.png" alt="Cancel"></a></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 am</td>
          <td><strong>Backpackers</strong></td>
          <td>11:45 am</td>
          <td>Albert</td>
          <td>USD 25.00</td>
          <td>22</td>
          <td><a href="#"><img src="images/button_booking-change.png" alt="Change"></a></td>
          <td><a href="#"><img src="images/button_booking-cancel.png" alt="Cancel"></a></td>
        </tr>
      </tbody>
    </table>
  </div> <!--/.table-responsive-->
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="col-sm-6">
      <a href="#"><img class="img-centered-small" src="images/button_booking-retain.png" alt="Retain"></a>
    </div>
    <div class="col-sm-6 text-right">
      <ul class="list-inline">
        <a href="#"><img class="img-centered-small" src="images/button_booking-change-both.png" alt="Change Both"></a>
        <a href="#"><img class="img-centered-small" src="images/button_booking-cancel-both.png" alt="Cancel Both"></a>
      </ul>
    </div>
  </div>
</div>

</div> <!--/.bw-page-->
</div> <!--/.container-->

<!-- Javascript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>