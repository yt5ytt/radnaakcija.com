<?php
  include("header.php");
 ?>

    <title>Majstori Online - Početna</title>
  </head>
  <body>
    <div id="container">
      <div class="top-line">
          <div class="logo-nav wrapper">
              <div class="logo">
                <h2>MajstoriOnline<small>.com</small></h2>
              </div>

              <span class="nav_btn"><i class="fa fa-bars"></i></span>

              <nav>
                <ul class="nav">
                  <li><a href="#">IDEJA SAJTA</a></li>
                  <li><a href="login.php">PRIJAVI SE</a></li>
                  <li><a href="registracija/register.php?korisnik=klijent">REGISTRUJ SE</a></li>
                </ul>
              </nav>
          </div>
      </div>

      <div class="middle-box wrapper">
        <div class="buttons">
          <div class="largeButton">
            <a href="registrujSe.php">
              (potreban ti je majstor)<br />
              <h2>OBJAVI<br />
              POSAO</h2>
            </a>
          </div>

          <div class="largeButton">
            <a href="majstori/index.php">
              (majstori)<br />
              <h2>PRONAĐITE<br />
              POSAO</h2>
            </a>
          </div>

        </div>
      </div>

<?php
  include("footer.php");
?>
