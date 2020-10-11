<!DOCTYPE html>
<html>
<head>
  <title>Booking</title>
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
      <div class="container mt-4 ">
      <div class="row no-gutters">
      <div class="col-md-4">
      <form action="mybooking.php" method="GET">
              <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" required class="form-control" name="nama">
      <u1>
      </div>
      <div class="form-group">
              <label for="date">Check In</label>
              <input type="date" class="form-control" name="tgl">
              </div>
      <div class="form-group">
              <label for="duration">Duration</label>
              <input type="text" class="form-control" name="durasi">
              <small id="eduration" class="form-text text-muted">Day(s).</small>
      <u1>
      </div>
              <div class="form-group">
              <label for="roomtype">Room Type</label>
                  <?php if (isset($type)) { ?>
              <select class="custom-select mr-sm-3" name="jeniskamar" >
                  <option value="<?= $type ?>"><?= $type ?></option>
              </select>
                  <?php } else { ?>
              <select class="custom-select mr-sm-3" name="jeniskamar">
                  <option value="Standar">Standar</option>
                  <option value="Superior">Superior</option>
                  <option value="Luxury">Luxury</option>
              </select>
                  <?php } ?>
      </u1>
      </div>
              <div class="form-group">Add Service(s)</div>
              <small id="eduration" class="form-text text-muted">$ 20/ service</small>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Room Service" name="service[]">
              <label class="form-check-label" for="service1"> 
                  Room Service
      </label>
              </div>
      <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Breakfast" name="service[]">
              <label class="form-check-label" for="service2">
                  Breakfast
      </label>
      </div>
      </u1>
      <br>
              <div class="form-group">
              <label for="nohp">Phone Number</label>
              <input type="text" class="form-control" name="nohp">
      </div>
               <input type="submit" value="Book Now" class="btn btn-primary btn-lg btn-block">
        </form>
      </div>
              <div class="col-md-5">
              <div class="card-body" style="padding-left : 50px">
                  <?php
                       $img = '';
                        if (trim($type) == "Standar") {
                            echo "<img src='KamarStandar.jpg'  alt='Standar'  style=' width:35rem; height: 25rem;' name='img'>";
                        } elseif (trim($type) == "Superior") {
                            echo "<img src='KamarSuperior.jpg' alt='Superior' style=' width:35rem; height: 25rem;' name='img'>";
                        } else {
                            echo "<img src='KamarLuxury.jpg'   alt='Luxury'   style=' width:35rem; height: 25rem;' name='img'>";
                        }
                        ?>
              <u1>
            </u1>
        </div>
      </div>
    </body>
</html>