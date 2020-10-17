<?php
echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Kampfkunst Delmenhorst</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="selbstverteidigung.php">Selbstverteidigung</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Angebot
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-kidswt.php">Kids Wing Tsun</a>
              <a class="dropdown-item" href="portfolio-2-wt.php">Wing Tsun</a>
              <a class="dropdown-item" href="portfolio-3-escrima.php">Escrima</a>
              <a class="dropdown-item" href="portfolio-4-tkd.php">Tae Kwon Do</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trainingszeiten.php">Trainingszeiten</a>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dachverbände
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="dachverband-1-ewto.php">EWTO</a>
                <a class="dropdown-item" href="dachverband-2-wtf.php">World Taekwondo</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trainer.php">Trainer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="impressum.php">Impressum</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>';
?>