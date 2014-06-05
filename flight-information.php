<!DOCTYPE html>
<html lang="en">
<title>Flight Information | Backpacker Transfers</title>
<?php include 'header.php'; ?>
<body>

<div class="container">
<div class="bw-page">

<div class="page-header">
  <h3><img src="images/bw-logo.png" width="50"> Book Transfer </h3>
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
        <li><a class="bw-active" href="#">Flight Information</a> <div class="arrow-down"></div></li>
        <li><a href="#">Select New Transfer</a></li>
        <li><a href="#">Summary &amp; Payment</a></li>
        <li><a href="#">Confirmation</a></li>
      </ul>
    </nav>
  </div>
</header> 

<div class="row">
  <div class="col-xs-12">
    <div class="bw-flight-box-border">
    <div class="bw-flight-box-table">
      <h3>Flight Information</h3>
      
      <div class="row">
        <div class="col-xs-12">
          <ul class="list-inline bw-flight-info-table">
            <li>I am on a</li>
            <li>
              <label class="radio-inline bw-flight-info-label">
                  <input type="radio" name="bw-flight-info" id="bw-flight-info-domestic" checked> <span>Domestic Flight</span>
                </label>
            </li>
            <li>
              <label class="radio-inline bw-flight-info-label">
                  <input type="radio" name="bw-flight-info" id="bw-flight-info-international"> <span>International Flight</span>
                </label>
            </li>
            <li>
              <label class="radio-inline bw-flight-info-label">
                  <input type="radio" name="bw-flight-info" id="bw-flight-info-no-flight"> <span>Not on a Flight</span>
                </label>
            </li>
          </ul>
        </div>
      </div><!--/.row-->

      <hr class="widget-hr">

      <div class="row bw-flight-info-section">
        <div class="col-xs-12 col-sm-4">
          <p>My flight arrives on the: <b>12th April 2010</b>
        </div>
        <div class="col-xs-12 col-sm-4">
          <ul class="list-inline bw-flight-info-table">
            <li>at</li>
            <li><input type="text" class="form-control bw-input" id="bw-flight-info-arrive-at"></li>
            <li>(24:00 format)</li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4">
          <ul class="list-inline bw-flight-info-table">
            <li>Flight Number:</li>
            <li><input type="text" class="form-control bw-input" id="bw-flight-info-arrive-flight-number"></li>
          </ul>
        </div>
      </div> <!--/.row-->

       <hr class="widget-hr">

      <div class="row bw-flight-info-section">
        <div class="col-xs-12 col-sm-4">
          <p>My flight departs on the: <b>12th April 2010</b>
        </div>
        <div class="col-xs-12 col-sm-4">
          <ul class="list-inline bw-flight-info-table">
            <li>at</li>
            <li><input type="text" class="form-control bw-input" id="bw-flight-info-depart-at"></li>
            <li>(24:00 format)</li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4">
          <ul class="list-inline bw-flight-info-table">
            <li>Flight Number:</li>
            <li><input type="text" class="form-control bw-input" id="bw-flight-info-depart-flight-number"></li>
          </ul>
        </div>
      </div> <!--/.row-->

      <hr class="widget-hr">

      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="#"><img class="booking-widget-btn" src="images/button_show-transfer-options.png" alt="show transfer options"></a>
        </div>
      </div> <!--/.row-->

    </div> <!--/#bw-flight-info-table-->
    </div> <!--/#bw-flight-info-border-->
  </div>
</div> <!--/.row-->

</div> <!--/.bw-page-->
</div> <!--/.container-->

<!-- Javascript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>