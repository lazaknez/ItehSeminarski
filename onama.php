<?php

    include("init.php");
 ?>

<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>LetLine</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/ionicons.css" rel="stylesheet" />
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<link href="assets/css/animations.min.css" rel="stylesheet" />
<link href="assets/css/style-solid-black.css" rel="stylesheet" />
<link rel="shortcut icon" href="avion.png">
</head>
<body data-spy="scroll" data-target="#menu-section">

<!-- Glavna sekcija -->
<section>
    <div class="container">
      <div class="row text-center header">
            <h3>O nama</h3>
            <hr />

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="services-wrapper">
              <h1> Dobro došli!</h1>
              <h3 >NA NAJBOLJI SAJT ZA REZERVACIJE LETOVA - LetLine</h3>
			  
              <h3 style="color:rgb(204,0, 153)">Ovo je
              PRIČA O NAMA</h3>
              <br>
              <br>
             
              <p>
<i>
             LetLine je nacionalna avio-kompanija Srbije sa sedištem u Beogradu.Čvorište kompanije je beogradski aerodrom Nikola Tesla.
              Većinski vlasnik je Vlada Srbije (51%), a suvlasnik (sa 49%) je Etihad ervejz, nacionalni avio-prevoznik Ujedinjenih Arapskih Emirata.
              Na konferenciji za novinare, održanoj 1. avgusta 2013,
              saopšteno je da će se aviopark Er Srbije sastojati od 10 novih aviona tipa Erbas A319 i
               da će unutrašnjost aviona biti uređena po uzoru na avione Etihad ervejza.
                Na istoj konferenciji saopšteno je da su u toku pregovori sa Boingom i Erbasom o 
                nabavci novih aviona. Nedugo zatim poručeno je 10 novih letelica Erbas A320neo, 
                a u 2016. godini flota je proširena i iznajmljenim avionom Bombardje CRJ900 i širokotrupnim Erbasom 
                A330-200 koji se od 23. juna koristi za letove ka Njujorku.
                Do 15. oktobra 2017 prevezeno je 10 miliona putnika, dobre 4 godine nakon osnovanja kompanije.
</i>
              </p>
              <script>
								function slika() {
									$.ajax({
									url: "mapa.php",
									type: "post",
									success: function(data) {
											document.getElementById("iframe1").src = data;

									}
									});
									document.getElementById("prikazi").style.visibility = "hidden";
								}
							</script>
                            <div class="col-lg-6 about-top-right" id = "konkaktDesno">
								<button class="btn btn-custom-three " id = "prikazi" onclick = "slika() ">Klikni za prikaz mape aerodroma</button>
								
                <iframe id="iframe1" src="" width="560" height="315" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>




            </div>
          </div>
        </div>
      </div>
</section>

<?php

    include("meni.php");
 ?>
 <?php

     include("slider.php");
  ?>




<?php
    include("footer.php");

 ?>


<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/source/jquery.fancybox.js"></script>
<script src="assets/js/jquery.isotope.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<script src="assets/js/custom-solid.js"></script>
</body>

</html>
