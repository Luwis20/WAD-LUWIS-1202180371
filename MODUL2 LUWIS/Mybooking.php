<!DOCTYPE html>
<html>
<head>
<title>Mybooking</title>
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
        <php
        $name = $_GET['nama'];
        $date = $_GET['tgl'];
        $nohp = $_GET['nohp'];
        $durasi = $_GET['durasi'];
        $jeniskamar = $_GET['jeniskamar'];
            if ($jeniskamar == 'Standar') { 
                $sum = 90 * $durasi;
        } else if ($jeniskamar == 'Superior') {
                $sum = 150 * $durasi;
        } else {
                $sum = 200 * $durasi;
        }
        ?>
    <br>
    <div class="container mt-5">
            <table class="table text-center">
            <thead>
    <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check-in</th>
            <th scope="col">Check-out</th>
            <th scope="col">Room Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Service</th>
            <th scope="col">Total Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
            <th scope="row"><?php echo rand(); ?></th>
            <td><?php echo $name; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $checkout = date('Y-m-d', strtotime($date . ' + ' . $durasi . ' days'));; ?></td>
            <td><?php echo $jeniskamar; ?></td>
            <td><?php echo $nohp; ?></td>
             <td><?php if (!empty($_GET["servis"])){
                $service = $_GET['service'];
                $much = count($service);
                $sum = $sum + (20 * $much);
                    foreach ($service as $row) { ?>
    <ul>
    <li>
    <?= $row ?>
    </li>
    </ul>
                <?php  }
                        } else {
                 $service = "no service";
                        echo $service;
                }
                        ?>
                        </td>
                        <td><?php echo $sum; ?> $</td>
                </tr>
            </tbody>
        </table>
    </div>
</html>