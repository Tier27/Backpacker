<!DOCTYPE html>
<html lang="en">
<title>Search Results &amp; Transfers | Backpacker Transfers</title>
<?php include 'header.php'; ?>
<body>

<div class="container">
<div id="bw-search-results-select-transfer-page">

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
        <li><a href="#">Booking Review</a></li>
        <li><a class="bw-active" href="#">Select New Transfer</a><div class="arrow-down"></div></li>
        <li><a href="#">Summary &amp; Payment</a></li>
        <li><a href="#">Confirmation</a></li>
      </ul>
    </nav>
  </div>
</header> 

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Select First Transfer</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="bw-flight-box-border">
    <div class="bw-flight-box-table bw-flight-box-table-select-transfer">

      <div class="row row-loose book-now-option">
            <div class="col-xs-3 col-sm-2 col-md-1 col-tight">
              <label class="booking-widget-label bw-label-vertical-align">Date</label>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-tight">
              <select class="form-control">
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
              </select>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 col-tight">
              <select class="form-control">
                  <option>March 2010</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-tight">
              <img src="images/calendar.png" alt="calendar">
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <a href="#"><img class="booking-widget-btn bw-button-vertical-align" src="images/button_show-transfers.png" alt="show transfers"></a>
            </div>

      </div> <!--/.row-->

    </div> <!--/#bw-flight-info-table-->
    </div> <!--/#bw-flight-info-border-->
  </div>
</div> <!--/.row-->
<br />

<div class="row">
  <div class="col-xs-12">
    <ul class="list-inline text-right">
      <li>Number of Passengers:</li>
      <li>2 Adults</li>
      <li>0 Children</li>
    </ul>
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="table-responsive">
     <table class="table table-bordered table-curved" id="bw-search-results-select-transfer-table">
      <thead>
        <tr class="search-results-select-transfer-table_time-selection">
          <td class="table_time-selection-arrow"><a href="#"><i class="fa fa-arrow-circle-o-left"></a></td>
          <td>10:00 am<br>
              From $25.00
          </td>
          <td>11:00 am<br>
              From $25.00
          </td>
          <td>12:00 pm<br>
              From $25.00
          </td>
          <td class="table_time-selection-active">1:00 pm<br>
              From $25.00
          </td>
          <td>2:00 pm<br>
              From $25.00
          </td>
          <td>3:00 pm<br>
              From $25.00
          </td>
          <td class="table_time-selection-arrow"><a href="#"><i class="fa fa-arrow-circle-o-right"></a></td>
        </tr>
      </thead>
      <thead>
        <tr>
          <th>Date</th>
          <th>From / Pick Up</th>
          <th>Pick Up time</th>
          <th>To / Drop off</th>
          <th>Drop Off Time</th>
          <th>Price Per Adult</th>
          <th>Price Per Child</th>
          <th>Select</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-1"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-2"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-3"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-4"></td>
        </tr>
      </tbody>
    </table>
  </div> <!--/.table-responsive-->
  </div>
</div> <!--/.row-->




<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Select Second Transfer</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="bw-flight-box-border">
    <div class="bw-flight-box-table bw-flight-box-table-select-transfer">

      <div class="row row-loose book-now-option">
            <div class="col-xs-3 col-sm-2 col-md-1 col-tight">
              <label class="booking-widget-label bw-label-vertical-align">Date</label>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-tight">
              <select class="form-control">
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
              </select>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 col-tight">
              <select class="form-control">
                  <option>March 2010</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-tight">
              <img src="images/calendar.png" alt="calendar">
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <a href="#"><img class="booking-widget-btn bw-button-vertical-align" src="images/button_show-transfers.png" alt="show transfers"></a>
            </div>

      </div> <!--/.row-->

    </div> <!--/#bw-flight-info-table-->
    </div> <!--/#bw-flight-info-border-->
  </div>
</div> <!--/.row-->
<br />

<div class="row">
  <div class="col-xs-12">
    <ul class="list-inline text-right">
      <li>Number of Passengers:</li>
      <li>2 Adults</li>
      <li>0 Children</li>
    </ul>
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="table-responsive">
     <table class="table table-bordered table-curved" id="bw-search-results-select-transfer-table">
      <thead>
        <tr class="search-results-select-transfer-table_time-selection">
          <td class="table_time-selection-arrow"><a href="#"><i class="fa fa-arrow-circle-o-left"></a></td>
          <td>10:00 am<br>
              From $25.00
          </td>
          <td>11:00 am<br>
              From $25.00
          </td>
          <td>12:00 pm<br>
              From $25.00
          </td>
          <td>1:00 pm<br>
              From $25.00
          </td>
          <td>2:00 pm<br>
              From $25.00
          </td>
          <td>3:00 pm<br>
              From $25.00
          </td>
          <td class="table_time-selection-arrow"><a href="#"><i class="fa fa-arrow-circle-o-right"></a></td>
        </tr>
      </thead>
      <thead>
        <tr>
          <th>Date</th>
          <th>From / Pick Up</th>
          <th>Pick Up time</th>
          <th>To / Drop off</th>
          <th>Drop Off Time</th>
          <th>Price Per Adult</th>
          <th>Price Per Child</th>
          <th>Select</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-1"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-2"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-3"></td>
        </tr>
        <tr>
          <td>12 June 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>USD 25.00</td>
          <td class="text-center"><input name="search-results-select-transfer" type="radio" id="search-results-select-transfer-4"></td>
        </tr>
      </tbody>
    </table>
  </div> <!--/.table-responsive-->
  </div>
</div> <!--/.row-->


<div class="row">
  <div class="col-sm-6">
    <p>Fine print for the first transfer:</p>
    <div class="search-results-print small">
      <p>This morning's tour provides a great over view of the city and surrounding suburbs.  Tour the city at leisure and see the
        charming architecture for which Brisbane is famous.  See Brisbane's Story Bridge and Kangaroo Point Cliff's.  Tour with cruise
        is optional.  This morning's tour provides a great over view of the city and surrounding suburbs.</p>
    </div> <!--/.search-results-print-->
  </div>
  <div class="col-sm-6">
    <p>Fine print for the second transfer:</p>
    <div class="search-results-print small">
      <p>This morning's tour provides a great over view of the city and surrounding suburbs.  Tour the city at leisure and see the
        charming architecture for which Brisbane is famous.  See Brisbane's Story Bridge and Kangaroo Point Cliff's.  Tour with cruise
        is optional.  This morning's tour provides a great over view of the city and surrounding suburbs.</p>
    </div> <!--/.search-results-print-->
  </div>

  <div class="col-xs-12 col-sm-6 pull-left">
    <div class="bw-advertisement text-center">
      <p>Advertisement</p>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 pull-right">
    <table class="table table-bordered" id="search-results-select-transfer-pricing">
      <tr class="yo">
        <td>Applicable Price Difference:</td>
        <td>$250.00</td>
        <td class="question-mark"><img class="img-centered" src="images/icon_question-mark.png"></td>
      </tr>
    </table>
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-sm-6">
    <a href="#"><img class="booking-widget-btn" src="images/button_booking-retain.png" alt="retain booking"></a>
  </div>
  <div class="col-sm-6 text-right">
    <a href="#"><img class="booking-widget-btn" src="images/button_change-booking.png" alt="book now"></a>
  </div>
</div> <!--/.row-->

</div> <!--/#flight-info-->
</div> <!--/.container-->
<br>

<!-- Javascript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>