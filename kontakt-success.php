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

<body>

  <!-- Navigation -->
  <?php include "php/navigation.php";?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Kontakt</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Start</a>
      </li>
      <li class="breadcrumb-item active">Kontakt</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe style="width: 100%; height: 400px; border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d569.1966423048565!2d8.642674699999995!3d53.04570620000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b0d5081889c0f1%3A0xac4caac72598c80a!2sBienenschauer%2018%2C%2027749%20Delmenhorst!5e1!3m2!1sen!2sde!4v1602862975835!5m2!1sen!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Kampfkunstzentrum Delmenhorst</h3>
        <p>
          Bienenschauer 18
          <br>27751 Delmenhorst
          <br>
            <b>Eingang links am Gebäude</b><br>
        </p>
        <p>
          Telefon: +49 (4221) 5901770
        </p>
        <p>
          E-Mail:
          <a href="mailto:name@example.com">mail@kampfkunst-del.de
          </a>
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->        
        <form action="php/mail.php" method="post">
              <div class="control-group form-group">
            <div class="controls">
              <label>Name:</label>
              <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Bitte Ihren Namen eintragen.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>E-Mail Adresse:</label>
              <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Bitte Ihre E-Mail Adresse eintragen.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Telefonnummer(optional):</label>
              <input type="tel" class="form-control" id="tel" name="tel">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Nachricht:</label>
              <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Bitte Ihre Nachricht eintragen." maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
            <div id="success" class="alert alert-success" role="alert">Ihre Nachricht wurde gesendet, vielen Dank!</div> 
          <!-- For success/fail messages -->
<input type="submit" class="btn btn-primary">
</form><br><br><br>
    
    </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "php/footer.php";?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
