<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta, title
   ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Backpacker Transfers</title>
  <!-- CSS
   ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/custom-style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- Fonts & Icons
    ================================================== -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <!-- Documentation extras
   ================================================== -->
  <!--[if lt IE 8]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <div class="alert alert-danger" id="ie-alert">
      <div class="container">
        <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
      </div>
    </div>
  <![endif]-->

</head>

<body>

<br>

<div class="container">
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3" id="booking-widget">
    <div class="booking-widget">
        <ul id="booking-tabs" class="nav nav-tabs">
          <li class="active"><a href="#book-now" data-toggle="tab">Book Now</a></li>
          <li><a href="#change-cancel" data-toggle="tab">Change/Cancel</a></li>
        </ul>

      <div class="booking-widget-border">
      <div id="booking-widget-content" class="tab-content">
        <div class="tab-pane active" id="book-now">

          <div class="row book-now-option">
              <div class="col-xs-4">
                <label class="radio-inline booking-widget-label">
                  <input type="radio" name="group1" id="transfers" value="transfers" checked> <span>Transfers</span>
                </label>
              </div>
              <div class="col-xs-4">
                <label class="radio-inline booking-widget-label">
                  <input type="radio" name="group1" id="activities" value="activities"> <span>Activities</span>
                </label>
              </div>
              <div class="col-xs-4">
                <label class="radio-inline booking-widget-label">
                  <input type="radio" name="group1" id="tours" value="tours"> <span>Tours</span>
                </label>
              </div>
          </div> <!--/.row-->

          <hr class="widget-hr">

          <div class="row book-now-option">
            <div class="col-xs-4">
              <label class="radio-inline booking-widget-label">
                <input type="radio" name="group2" id="oneway" value="oneway"> <span>Oneway</span>
              </label>
            </div>
            <div class="col-xs-4">
              <label class="radio-inline booking-widget-label">
                <input type="radio" name="group2" id="return" value="return"> <span>Return</span>
              </label>
            </div>
            <div class="col-xs-4">
              <!-- empty -->
            </div>
          </div> <!--/.row-->

          <hr class="widget-hr">

          <div class="row row-loose book-now-option">
            <div class="col-xs-12 col-sm-6 col-tight">
                <label class="booking-widget-label">Country</label>
                <select class="form-control">
                  <option>Select Country</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-6 col-tight">
                <label class="booking-widget-label">City</label>
                <select class="form-control">
                  <option>Select City</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>

            <div class="col-xs-12 col-sm-6 col-tight">
                <div class="form-group">
                  <label class="booking-widget-label" for="pick-up">Pick Up:</label>
                  <input type="text" class="form-control input" id="pick-up">
                  <span class="booking-widget-small-label">Eg. Airport, City</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-tight">
                <div class="form-group">
                  <label class="booking-widget-label" for="drop-off">Drop Off:</label>
                  <input type="text" class="form-control input" id="drop-off">
                  <span class="booking-widget-small-label">Eg. Backpackers, Airport</span>
                </div>
            </div>
          </div> <!--/.row-->

          <hr class="widget-hr">

          <div class="row row-loose book-now-option">
            <div class="col-xs-12 col-tight">
              <label class="booking-widget-label">Departing Date</label>
            </div>
            <div class="col-xs-4 col-sm-3 col-tight">
              <select class="form-control">
                  <option>12</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-6 col-sm-5 col-tight">
              <select class="form-control">
                  <option>March 2010</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-4 col-tight">
              <img src="images/calendar.png" alt="calendar">
            </div>

            <div class="col-xs-12 col-tight">
              <label class="booking-widget-label">Return Date</label>
            </div>
            <div class="col-xs-4 col-sm-3 col-tight">
              <select class="form-control">
                  <option>12</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-6 col-sm-5 col-tight">
              <select class="form-control">
                  <option>March 2010</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-4 col-tight">
              <img src="images/calendar.png" alt="calendar">
            </div>
              <div class="col-xs-12 col-sm-6 col-tight">
                <label class="booking-widget-label passengers">Number of Passengers:</label>
              </div>
              <div class="col-xs-6 col-sm-3 col-tight">
                <select class="form-control passengers">
                    <option>&nbsp;</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <span class="booking-widget-small-label">(Adult)</span>
              </div>
              <div class="col-xs-6 col-sm-3 col-tight">
                <select class="form-control passengers">
                    <option>&nbsp;</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <span class="booking-widget-small-label">(Child 2-11 yrs)</span>
              </div>
          </div> <!--/.row-->

          <hr class="widget-hr">

          <div class="row">
            <div class="col-xs-12 text-center">
              <a href="#"><img id="book-orange-btn" src="images/button_find-now.png" alt="find now"></a>
            </div>
          </div> <!--/.row-->

        </div> <!--/#book-now-->


        <div class="tab-pane" id="change-cancel">

          <div class="row book-now-option">
          <form>
            <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                <div class="form-group" style="margin-bottom: 0;">
                  <label class="booking-widget-label">Enter Confirmation Number: <span class="booking-widget-asterisk">&#10045;</span></label>
                  <input type="text" class="form-control input" id="booking-widget-change_confirmation" required>
                </div>
                 <div class="form-group">
                  <label class="booking-widget-label">Enter Your Email Address: <span class="booking-widget-asterisk">&#10045;</span></label>
                  <input type="email" class="form-control input" id="booking-widget-change_email" required>
                </div>
            </div>

             
          </div> <!--/.row-->

          <hr class="widget-hr">
         

          <div class="row row-loose book-now-option">

            <div class="col-xs-12 col-tight">
              <label class="booking-widget-label">Date of Transfer, Tour or Activity: <span class="booking-widget-asterisk">&#10045;</span></label>
            </div>
            <div class="col-xs-4 col-sm-3 col-tight">
              <select class="form-control" name="booking-widget_change_day" required>
                  <option value-"22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value"26">26</option>
              </select>
            </div>
            <div class="col-xs-6 col-sm-5 col-tight">
              <select class="form-control" name="booking-widget_change_month-year" required>
                  <option>March 2010</option>
                  <option>April 2010</option>
                  <option>May 2010</option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-4 col-tight">
              <img src="images/calendar.png" alt="calendar"> <!-- needs to be substituted -->
            </div> 
             
          </div> <!--/.row-->

          <hr class="widget-hr">


           <div class="row book-now-option">
            <div class="col-xs-12">
              <label class="booking-widget-label">I would like to... <span class="booking-widget-asterisk">&#10045;</span></label>
            </div>
            <div class="col-xs-12 col-sm-6">
              <label class="radio-inline booking-widget-label">
                <input type="radio" name="booking-widget-change" id="booking-widget-change_change" value="change"> <span>Change my booking</span>
              </label>
            </div>
            <div class="col-xs-12 col-sm-6">
              <label class="radio-inline booking-widget-label">
                <input type="radio" name="booking-widget-change" id="booking-widget-change_cancel" value="cancel"> <span>Cancel my booking</span>
              </label>
            </div>
          </div> <!--/.row-->

           <hr class="widget-hr">

           <div class="row book-now-option">
            <div class="col-xs-12">
              <label class="booking-widget-label">
                <input type="checkbox" id="booking-widget-change_agree"> I agree to the <a href="#">Terms and Conditions</a></a></input><br>
              </label>
              <label class="booking-widget-label">
                <input type="checkbox" id="booking-widget-change_accepted"> I have acknowledged and accepted the Change/Cancel Conditions</a></input>
              </label>

            </div>


          </div> <!--/.row-->

           <hr class="widget-hr">

          <div class="row">
            <div class="col-xs-12 text-center">
              <a href="#"><img id="book-orange-btn" src="images/button_change-cancel.png" alt="change/cancel"></a>
            </div>
          </div> <!--/.row-->
          </form>

        </div> <!--/#book-now-->

        </div> <!--/#change-cancel-->
      </div> <!--/#booking-widget-content-->
      </div> <!--/.booking-widget-border-->
    </div> <!--/.booking-widget-->
  </div>
</div><!-- /.container -->
</div><!-- /.row -->

<!-- Javascript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>