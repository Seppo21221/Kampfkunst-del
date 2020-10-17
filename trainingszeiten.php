<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>
    
<style>
    .block-kwt{
        background-color: yellow;
        opacity: 0.6;    
    }
    .block-wt{
        background-color: deepskyblue;
        opacity: 0.6;    
    }
    .block-escrima{
        background-color: forestgreen;
        opacity: 0.6;    
    }
    .block-tkd{
        background-color: red;
        opacity: 0.6;    
    }
</style>

<body>

  <!-- Navigation -->
  <?php include "php/navigation.php";?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Trainingszeiten
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Start</a>
      </li>
      <li class="breadcrumb-item active">Trainingszeiten</li>
    </ol>
      
      <table class="table table-bordered table-striped" style="width:100%">
        <tr>
            <th scope="col"><b>Uhrzeit</b></th>
            <th scope="col"><b>Montag</b></th>
            <th scope="col"><b>Dienstag</b></th>
            <th scope="col"><b>Mittwoch</b></th>
            <th scope="col"><b>Donnerstag</b></th>
            <th scope="col"><b>Freitag</b></th>
        </tr>
          
        <tr>
            <th scope="row">16:30</th>
            <th></th>
            <th></th>
            <th class="block-kwt" style="text-align: center" rowspan="4">Kids WingTsun<br>16:30-17:30</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">16:45</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">17:00</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">17:15</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">17:30</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">17:45</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">18:00</th>
            <th class="block-wt" style="text-align: center" rowspan="6">Wing Tsun<br>18:00-19:30</th>
            <th class="block-tkd" style="text-align: center" rowspan="6">Tae Kwon Do<br>18:00-19:30</th>
            <th class="block-escrima" style="text-align: center" rowspan="6">Escrima<br>18:00-19:30</th>
            <th class="block-tkd" style="text-align: center" rowspan="6">Tae Kwon Do<br>18:00-19:30</th>
            <th class="block-wt" style="text-align: center" rowspan="6">Wing Tsun<br>18:00-19:30</th>
        </tr>
          
          <tr>
            <th scope="row">18:15</th>
        </tr>
          
          <tr>
            <th scope="row">18:30</th>
        </tr>
          
          <tr>
            <th scope="row">18:45</th>
        </tr>
          
          <tr>
            <th scope="row">19:00</th>
        </tr>
          
          <tr>
            <th scope="row">19:15</th>
        </tr>
          
          <tr>
            <th scope="row">19:30</th>
            <th class="block-escrima" style="text-align: center" rowspan="6">Escrima<br>19:30-21:00</th>
            <th></th>
            <th class="block-wt" style="text-align: center" rowspan="6">Wing Tsun<br>19:30-21:00</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">19:45</th>
            <th class="block-wt" style="text-align: center" rowspan="6">Wing Tsun<br>19:45-21:15</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">20:00</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">20:15</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">20:30</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">20:45</th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">21:00</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          <tr>
            <th scope="row">21:15</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          
          
      
      </table><br><br><br>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "php/footer.php";?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
