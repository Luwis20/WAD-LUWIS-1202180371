<!DOCTYPE html>
<html>
<head>
  <title>Book Now</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
  crossorigin="anonymous">
</head>
  <body style="background-color: #FAFAFA">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-tonggle="collapse" data-target="navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul  class="navbar-nav">
    <li  class="nav-item active">
    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li  class="nav-item active">
    <a class="nav-link" href="Booking.php">Booking</a>
</li>
</u1>
</div>
</nav>
</span>
<br>
    <?php
    $type = null;
    if (isset($_GET['type'])){
    $type = $_GET['type'];
}
?>
      <a/>
      <div class="row" style="margin-top: 25px ; margin-left: 100px; margin-right: 10px; margin-bottom:  25px;">
      <div class="col-md-3 mb-2">
      <form action="mybooking.php" method="GET">
      <label for="validationTooltip01">name</label>
      <input type="text" class="form-control" id="validationTooltip01" value=" " required>
      <div class="valid-tooltip">
      </ul>
      </div>
      <label for="validationTooltip01">Check-in</label>
      <input class="form-control" id="checkin" name="Check-in"type="date">
      <div class="col-md-14 mb-14">
      <label for="validationTooltip01"> duration </label>
      <input type="text" class="form-control" id="validationTooltip01" value=" " required>
      <small id="emailHelp" class="form-text text-muted">Day(s)</small>
      <div class="valid-tooltip">
      </ul>
      </div>
      <form>
  <fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">Room Type</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Superior">
    </div>
      </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
         <label for="validationTooltip01">Add Service(s)</label>
      </u1>
      </div>
      <small id="emailHelp" class="form-text text-muted">20 $/Service(s)</small>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Room Services
      </ul>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Breakfast
      </u1>
      </div>
      <div class="col-md-14 mb-14">
      <label for="validationTooltip01">Phone Number</label>
      <input type="text" class="form-control" id="validationTooltip01" value=" " required>
      <div class="valid-tooltip">
      </u1>
      </div>
      </div>
      <br>
      <button class="btn btn-primary btn-lg btn-block"  name="booknow" id="booknow" value="3" type="submit">sumbit</button>
      </form>
      </div>
    <div class ="col-sm-2 ml-2">
        <img src="KamarStandar.jpg">
    </div>
  </div>
</div>