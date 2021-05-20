<!DOCTYPE html>
<html lang='fr'>
<!--<Head-->
<head>
	<meta charset="utf-8">
	<title>Est ce que Charles est en week-end ?</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" media="screen and (max-width: 480px)" href="style/mobile.css"/>
  <style> @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap');</style>
<!--   <link rel="icon" type="image/svg" href="img/logo/reservia.svg"> -->
  <script src="https://kit.fontawesome.com/635b13c360.js" crossorigin="anonymous"></script>
  </head>
<!--Head>-->
<!--<Body-->
<body>
<!--<Header-->
  <header>

  </header>
<!--Header>-->
<!--<Main-->
  <main>
    <div class="question">Est ce que Charles est en week end ?</div>

    <div class="reponse">
      <?php
       if(date('D') == 'Sun') 
      { 
        echo "Oui, mais c\'est la fin :(.";
      } else      
      if(date('D') == 'Sat') 
      { 
        echo "Oui, il est en plein dedans.";
      } else
      if(date('D') == 'Fri') 
      {
        echo "Oui, ce soir c\est la fête";
      } else 
      if(date('D') == 'Thu') 
      {
        echo "Possiblement ce soir !";
      } else 
      if(date('D') == 'Mon' || date('D') == 'Tue' || date('D') == 'Wed')
      {
        echo "Non mais il aimerait bien :(";
      }



      ?>


    </div>


  </main>
<!--Main>-->
<!--<Footer-->
  <footer>

  </footer>
    <!--<Footer-->
</body>
</html>
