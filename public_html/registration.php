<?php 
if($_GET['event_name']=='')
{
     header('Location:index.html');

     //url for registration page
     //registration.php?event_name=csgo
     //registration.php?event_name=valorant
     //registration.php?event_name=chess
     //registration.php?event_name=coding_decoding
     //registration.php?event_name=treasure_hunt
     //registration.php?event_name=web_design
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ICON Somaiya Event Registration </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="icon,icon somaiya, icon 2020, icon 2021 simsr,simsr, somaiya icon,simsr icon, 2021 icon, TECHNOGYRE, Technogyre,icon 2021, icon simsr," name="keywords">
    <meta name="description" content="ICON as the official techfest of K J Somaiya Institute of Management was started in 2008, it has always been our primary motive to encourage scientific thinking, innovation, creativity and some good old-fashioned fun.">

    <!-- Favicons -->
    <link href="assets/img/icon-logo.png" rel="icon">
    <link href="assets/img/icon-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">


    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/venobox/venobox.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/event-carousel.css" rel="stylesheet">


    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    <style>
        #intro {
            width: 100%;
            height: 140vh;
            background: #fff;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }
        
        .landing-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            text-align: center;
            padding-top: 30px;
        }
        
        .landing {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        
        .landing h1 {
            font-size: 50px;
        }
        
        .landing p {
            font-size: 20px;
        }
        
        .countdown.mobile-nav-active {
            font-size: 50vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .countdown {
            font-size: 5vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .countdown div {
            padding: 1vw;
            border: 1px #fff solid;
            border-radius: 2em;
            background: #FFF;
            opacity: 0.7;
            margin: 0.5rem;
        }
        
        .countdown div:first-child {
            background: #FFF;
        }
        
        .countdown span {
            display: block;
            font-size: 3vh;
        }
        
        #events img:hover,
        #games img:hover {
            transform: scale(1.1, 1.1);
            transition: all 0.5s ease;
        }
        
        @media (max-width: 350px) {
            .landing img {
                width: 70%;
            }
            .landing h1 {
                font-size: 40px;
            }
            .countdown {
                font-size: 5vw;
                flex-direction: column;
            }
            .countdown div {
                display: none;
            }
            .countdown div:first-child {
                display: block;
                width: 50%;
                padding: 2rem;
            }
        }

        /**/
        #schedule {
    padding: 100px 0 60px 0;
}
    </style>
</head>

<body>

    
    <!--==========================
    Header
  ============================-->
  <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="./assets/img/KJ-Logo.webp" alt="" title=""></a>
            </div>


            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html#intro">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <!-- <li><a href="index.html#speakers">Guests</a></li> -->
                    <!-- <li><a href="index.html#schedule">CODEICON 2.0</a></li> -->
                    <li><a href="index.html#events">Events</a></li>
                    <!-- <li><a href="https://icon-somaiya.in/MEA/login.php">Enigma</a></li> -->
                    <li><a href="index.html#games">Arcades</a></li>
                    <li><a href="index.html#gallery">Gallery</a></li>
                    <!-- <li><a href="index.html#sponsors">Sponsors</a></li> -->

                    <div>
                        <div id="iconlogo">
                            <!-- Uncomment below if you prefer to use a text logo -->
                            <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                            <a href="index.html#intro" class="sidebarlogo"><img id=iconsidebar src="./assets/img/icon-logo.png" alt="" title=""></a>
                        </div>

                </ul>
            </nav>
            <!-- #nav-menu-container -->

            </div>
    </header>

    <!-- #header -->
    <section id="" class="section-with-bg"  style="margin-top: 100px;">

<div class="container wow fadeInUp" id="">
    <div class="section-header">
    <?php
    $eventt=$_GET['event_name'];
    if($_GET['event_name']=='csgo')
    {
        echo "<h2>CS-Go</h2>";
    }

    elseif($_GET['event_name']=='valorant')
    {
        echo "<h2>Valorant</h2>";
    }
    
    elseif($_GET['event_name']=='chess')
    {
        echo "<h2>Chess</h2>";
    }

    elseif($_GET['event_name']=='web_design')
    {
        echo "<h2>Web Design</h2>";
    }
    
    elseif($_GET['event_name']=='coding_decoding'||
    $_GET['event_name']=='treasure_hunt'||
    $_GET['event_name']=='web_design'||
    $_GET['event_name']=='creatography'||
    $_GET['event_name']=='content_writing')
        {
            echo "<h2>".$_GET['event_name']."</h2>";
        }
    ?>
        <!-- <h2><?php echo $_GET['event_name']  ?></h2> -->
    </div>

   
  
<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">
    <form action="participate.php" method="get" enctype="multipart/form-data">
    <?php
    if($_GET['event_name']=='csgo')
    {

    ?>
   
    <div class="form-group row">
        <div class=" form-group col-md-12">
        <label for="teamname">Enter Team Name CS-GO</label>
         <br>
         <input type="text" class="form-control" name="teamname" id="" placeholder=""  required/>
         <br/>
         <label for="teamname">Enter Team Leader Name and In-Game Name</label>
         <br>
         <input type="text" class="form-control" name="teamcap_name" id="" placeholder="" required/><br>
         <input type="text" class="form-control" name="teamcap_igname" id="" placeholder="In-Game Name" required/>
         <input type="hidden" name="game" value="csgo"/>
        </div>
    </div>
       
<?php 
for ($x = 1; $x <= 5; $x++) {
     
   

?>


<div class="form-group row">
  <div class="form-group col-md-12">
       <h3 class="text-center">Player<?php echo $x; ?></h3>
         <label for="teamname">Enter Player<?php echo $x; ?> Name and In-Game Name</label>
         <br>
         <input type="text" class="form-control" name="player<?php echo $x; ?>_name" id="" placeholder="" required/><br>
         <input type="text" class="form-control" name="player<?php echo $x; ?>_igname" id="" placeholder="In-Game Name" required/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Player<?php echo $x; ?> Email</label>
         <br>
         <input type="email" class="form-control" name="player<?php echo $x; ?>_email" id="" placeholder="" required/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Player<?php echo $x; ?> Mobile number</label>
         <br>
         <input type="text" class="form-control" name="player<?php echo $x; ?>_mobno" id="" placeholder="" required/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Age</label>
         <br>
         <input type="text" class="form-control" name="player<?php echo $x; ?>_age" id="" placeholder="" required/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Select Gender</label>
         <br>
         <input type="radio" name="player<?php echo $x; ?>_gender" id="" value="male" radiogroup   required/> <label for="">Male</label>
         &nbsp;&nbsp;&nbsp;
         <input type="radio" name="player<?php echo $x; ?>_gender" id="" value="female"  radiogroup  required/> <label for="">Female</label>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter College Name</label>
         <br>
         <input type="text" class="form-control" name="player<?php echo $x; ?>_clgname" id="" placeholder="" required/>
    </div> 

    <div class="form-group col-md-12">
         <label for="teamname">enter college Id Card Pic </label>
         <br>
         <input type="file" class="form-control" name="player<?php echo $x; ?>_image" id="" placeholder="" required/>
    </div>

</div>

<?php }?>
<div class="form-group row">
     <div class="form-group col-md-12">
          <label for="">Enter Transaction id and image of transaction</label>
          <input type="text" name="team_transactionid" id="" class="form-control"><br>
          <input type="file" name="transaction_image" class="form-control" id=""></div>
</div>
<div class="form-group row">
            <div class="col-md-12">
                <input type="submit" value="Submit" class="btn">
            </div>

   
       



        <!--valorant-->
        <?php
    }

    elseif($_GET['event_name']=='valorant')
    {
    ?>
   
    <div class="form-group row">
        <div class=" form-group col-md-12">
        <label for="teamname">Enter TeamName valorant</label>
         <br>
         <input type="text" class="form-control" name="teamname" id="" placeholder="" required/>
         <label for="teamname">Enter Team Leader Name and In-Game Name</label>
         <br>
         <input type="text" class="form-control" name="temacap_name" id="" placeholder="" required/><br>
         <input type="text" class="form-control" name="teamcap_igname" id="" placeholder="In-Game Name" required/>
         <input type="hidden" name="game" value="valorant"/>
        </div>
    </div>
       
    <?php 
for ($x = 1; $x <= 5; $x++) {
     
   

?>


<div class="form-group row">
  <div class="form-group col-md-12">
       <h3 class="text-center">Player<?php echo $x; ?></h3>
         <label for="teamname">Enter Player<?php echo $x; ?> Name and In-Game Name</label>
         <br>
         <input type="text" class="form-control" name="player1_name" id="" placeholder="" required/><br>
         <input type="text" class="form-control" name="player1_igname" id="" placeholder="In-Game Name" required/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Player<?php echo $x; ?> Email</label>
         <br>
         <input type="email" class="form-control" name="player1_email" id="" placeholder=""  required/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Player<?php echo $x; ?> Mobile number</label>
         <br>
         <input type="text" class="form-control" name="player1_mobno" id="" placeholder=""  required/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Age</label>
         <br>
         <input type="text" class="form-control" name="player1_age" id="" placeholder=""  required/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Select Gender</label>
         <br>
         <input type="radio" name="player1_gender" id="" value="male" radiogroup  required /> <label for="">Male</label>
         &nbsp;&nbsp;&nbsp;
         <input type="radio" name="player1_gender" id="" value="female"  radiogroup  required/> <label for="">Female</label>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter College Name</label>
         <br>
         <input type="text" class="form-control" name="player1_clgname" id="" placeholder=""  required/>
    </div> 

    <div class="form-group col-md-12">
         <label for="teamname">enter college Id Card Pic </label>
         <br>
         <input type="file" class="form-control" name="player1_image" id="" placeholder=""  required/>
    </div>

</div>

<?php }?>

    <div class="form-group row">
     <div class="form-group col-md-12">
          <label for="">Enter Transaction id and image of transaction</label>
          <input type="text" name="team_transactionid" id="" class="form-control"><br>
          <input type="file" name="transaction_image" class="form-control" id=""></div>
</div>
<div class="form-group row">
            <div class="col-md-12">
                <input type="submit" value="Submit" class="btn">
            </div>
   

        <?php }
        //elseif end

        elseif($_GET['event_name']=='chess')
        {
        ?>

<div class="form-group row">
<div class="form-group col-md-12">
     <label for="">Enter player Name</label>
     <br><input type="text" name="player_name" class="form-control" id="">
     <input type="hidden" name="game" value="chess"/>
</div>


<div class="form-group col-md-12">
         <label for="teamname">Player Email</label>
         <br>
         <input type="email" class="form-control" name="player_email" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter Player Mobile number</label>
         <br>
         <input type="text" class="form-control" name="player_mobno" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Age</label>
         <br>
         <input type="text" class="form-control" name="player_age" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Gender</label>
         <br>
         <input type="radio" name="player_gender" id="" value="male"   /> <label for="">Male</label>
         &nbsp;&nbsp;&nbsp;
         <input type="radio" name="player_gender" id="" value="female"   /> <label for="">Female</label>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter College Name</label>
         <br>
         <input type="text" class="form-control" name="player_clgname" id="" placeholder=""/>
    </div> 

    <div class="form-group col-md-12">
         <label for="teamname">enter college Id Card Pic </label>
         <br>
         <input type="file" class="form-control" name="player_image" id="" placeholder=""/>
    </div>
</div>
<div class="form-group row">
     <div class="form-group col-md-12">
          <label for="">Enter Transaction id and image of transaction</label>
          <input type="text" name="team_transactionid" id="" class="form-control"><br>
          <input type="file" name="transaction_image" class="form-control" id=""></div>
</div>
<div class="form-group row">
            <div class="col-md-12">
                <input type="submit" value="Submit" class="btn">
            </div>

      
    
<?php }

elseif($_GET['event_name']=='web_design'||$_GET['event_name']=='creatography'||$_GET['event_name']=='content_writing')
        {

?>
<div class="form-group row">
<div class="form-group col-md-12">
     <label for="">Enter participant Name</label>
     <br><input type="text" name="player_name" class="form-control" id="">
     <input type="hidden" name="event_name" value="<?php echo $_GET['event_name']; ?>">
     <input type="hidden" name="game" value="web_design"/>
</div>


<div class="form-group col-md-12">
         <label for="teamname">participant Email</label>
         <br>
         <input type="email" class="form-control" name="player_email" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">participant Mobile number</label>
         <br>
         <input type="text" class="form-control" name="player_mobno" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Age</label>
         <br>
         <input type="text" class="form-control" name="player_age" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Gender</label>
         <br>
         <input type="radio" name="player_gender" id="" value="male"   /> <label for="">Male</label>
         &nbsp;&nbsp;&nbsp;
         <input type="radio" name="player_gender" id="" value="female"   /> <label for="">Female</label>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter College Name</label>
         <br>
         <input type="text" class="form-control" name="player_clgname" id="" placeholder=""/>
    </div> 

    <div class="form-group col-md-12">
         <label for="teamname">enter college Id Card Pic </label>
         <br>
         <input type="file" class="form-control" name="player_image" id="" placeholder=""/>
    </div>
</div>
<div class="form-group row">
     <div class="form-group col-md-12">
          <label for="">Enter Transaction id and image of transaction</label>
          <input type="text" name="team_transactionid" id="" class="form-control"><br>
          <input type="file" name="transaction_image" class="form-control" id=""></div>
</div>
<div class="form-group row">
            <div class="col-md-12 text-center">
                <input type="submit" value="Submit" class="btn">
            </div>

      
    


<?php } 

elseif($_GET['event_name']=='coding_decoding'||$_GET['event_name']=='treasure_hunt')
        {

            for($x=0 ;$x<=2;$x++)
            {
?>
<div class="form-group row">
<div class="form-group col-md-12">
     <label for="">Enter participant Name</label>
     <br><input type="text" name="player_name" class="form-control" id="">
     <input type="hidden" name="event_name" value="<?php echo $_GET['event_name']; ?>">
     <input type="hidden" name="game" value="web_design"/>
</div>


<div class="form-group col-md-12">
         <label for="teamname">participant Email</label>
         <br>
         <input type="email" class="form-control" name="player_email" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">participant Mobile number</label>
         <br>
         <input type="text" class="form-control" name="player_mobno" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Age</label>
         <br>
         <input type="text" class="form-control" name="player_age" id="" placeholder=""/>
    </div>

    <div class="form-group col-md-5">
         <label for="teamname">Enter Gender</label>
         <br>
         <input type="radio" name="player_gender" id="" value="male"   /> <label for="">Male</label>
         &nbsp;&nbsp;&nbsp;
         <input type="radio" name="player_gender" id="" value="female"   /> <label for="">Female</label>
    </div>

    <div class="form-group col-md-12">
         <label for="teamname">Enter College Name</label>
         <br>
         <input type="text" class="form-control" name="player_clgname" id="" placeholder=""/>
    </div> 

    <div class="form-group col-md-12">
         <label for="teamname">enter college Id Card Pic </label>
         <br>
         <input type="file" class="form-control" name="player_image" id="" placeholder=""/>
    </div>
</div>

<?php }?>
<div class="form-group row">
     <div class="form-group col-md-12">
          <label for="">Enter Transaction id and image of transaction</label>
          <input type="text" name="team_transactionid" id="" class="form-control"><br>
          <input type="file" name="transaction_image" class="form-control" id=""></div>
</div>
<div class="form-group row">
            <div class="col-md-12 text-center">
                <input type="submit" value="Submit" class="btn">
            </div>

      
    


<?php } ?>

     </div>
        </form>
    </div>
    <div class="col-md-1">

    </div>
</div>
</div>

   </section>


<hr>
   <footer id="footer" >
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <img src="assets/img/icon-logo.webp" alt="ICON logo" style="height: 120px; width: 120px; margin-left: 30%;margin-right: 20%; margin-top: -20px;">
                        <p style="color: #b7202e;font-size: 20px; margin-top: -10px; font-family: 'Fira Sans', sans-serif;" class="text-justify">ICON as the official techfest of Department of Data Science And Technology , it has always been our primary motive to encourage scientific thinking, innovation, creativity and some good old-fashioned fun.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-links">
                        <h4 style="color: #b7202e; ">Useful Links</h4>
                        <ul>
                            <p></p>
                            <li><i class="fa fa-angle-right"></i> <a href="#intro" style="color: #b7202e; ">Home</a></li>
                            <li><i class="fa fa-angle-right "></i> <a href="#about" style="color: #b7202e; ">About us</a></li>
                            <!-- <li><i class="fa fa-angle-right "></i> <a href="#events">Events</a></li> -->
                            <!-- <li><i class="fa fa-angle-right "></i> <a href="#speakers">Guests</a></li> -->
                            <!-- <li><i class="fa fa-angle-right "></i> <a href="#schedule">Schedule</a></li> -->
                            <!-- <li><i class="fa fa-angle-right "></i> <a href="events/retailmela.html ">Retail Mela</a></li> -->
                            <li><i class="fa fa-angle-right "></i> <a href="#gallery " style="font-size:17px; color: #b7202e;">Gallery</a></li>
                            </p>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact " style="font-size:15px; ">
                        <h4 style="color: #b7202e; ">Contact Us</h4>
                        <p style="color: #b7202e; ">
                            K J Somaiya Institute of Management, <br> Somaiya Vidyavihar University,<br>Vidyavihar East
                            <br> Mumbai-400077. <br>
                            <!-- <strong>Sudarshan Sirsat (Co-ordinator) |</strong><a href="tel: +91-7304053115 " style="color: #b7202e; ">+91-7304053115</a><br> -->
                            <!-- <strong>Himani Narang |</strong><a href="tel: +91-8425909901 " style="color: #b7202e; ">+91-8425909901</a><br> -->
                            <strong>Aadil Karim |</strong><a href="tel: +91-7400384813 " style="color: #b7202e; ">+91-7400384813</a><br>
                            <strong>Sumeet |</strong><a href="tel: +91-7400384813 " style="color: #b7202e; ">+91-7400398638</a><br>
                            <strong>Email: </strong><a href="mailto: icon.simsr@somaiya.edu " style="color: #b7202e; ">icon.simsr@somaiya.edu</a><br>
                        </p>
                        <div class="social-links ">
                            <a href="https://www.facebook.com/iconsimsr " class="facebook " target="_blank "><i
                                class="fa fa-facebook "></i></a>
                            <a href="https://instagram.com/icon_2k21?igshid=1pphxo1fdw7ix " class="instagram " target="_blank "><i
                                class="fa fa-instagram "></i></a>
                            <!-- <a href="https://www.linkedin.com/company/national-retail-summit " class="linkedin " target="_blank "><i
                                class="fa fa-linkedin "></i></a> -->
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container ">
            <div class="copyright ">
                &copy; Copyright <strong>ICON</strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="# " class="back-to-top " style="background-color: #b7202e ; "><i class="fa fa-angle-up "></i></a>

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js "></script>
    <script src="assets/lib/jquery/jquery-migrate.min.js "></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/lib/easing/easing.min.js "></script>
    <script src="assets/lib/superfish/hoverIntent.js "></script>
    <script src="assets/lib/superfish/superfish.min.js "></script>
    <script src="assets/lib/wow/wow.min.js "></script>
    <script src="assets/lib/venobox/venobox.min.js "></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js "></script>

    <!-- Contact Form JavaScript File -->
    <script src="assets/contactform/contactform.js "></script>
    <script src="assets/js/script.js"></script>
    <!-- Template Main Javascript File -->
    <script src="assets/js/main.js "></script>
    <script src="assets/js/event-carousel.js "></script>


    <!-- 

     <script>
        const container = document.getElementById('input-cont');

        // Call addInput() function on button click
        function addInput(){
            let input = document.createElement('input');
            input.type='Text';
            input.name='player'
            input.placeholder = 'Type something';
            container.appendChild(input);
        }
    </script>
     -->
</body>
</html>
