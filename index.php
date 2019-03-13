<!DOCTYPE html>
<html lang="en">
<head>
<!-- <<Mobile Viewport Code>> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- <<Attched Stylesheets>> -->
<link rel="stylesheet" href="css/theme.css" type="text/css" />


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
    .navbar-custom {
        background-color: #eb6b6b;
    }
</style>

<!--datepicker-->
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
      rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Javascript -->
<script>
    $(function() {
        $( "#datepicker-1" ).datepicker({
            minDate: 0
        });
        $( "#datepicker-2" ).datepicker({
            minDate: 0
        });
    });
</script>
<!--datepicker end-->

<!-- cardviews cdn -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<!-- ***************************************end of added code ***************************************************************-->


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<!-- cardviews cdn -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      
      margin: auto;
  }
  </style>

<div class="row">
  <div class="col-sm-12">
    <?php
    include('header.php');
    ?>
  </div>
</div>
</head>
<body>


<div class="row">
  <div class="col-sm-12">
    <?php
    //include('carousel.php');
    ?>
  </div>
</div>
<div
      style="background-image: images\hero.png;">
  </div>
<br/><br/>
<div class="row">
<div class="col-sm-12">
            <div align="center">
                <img src="images/promise.png">
                <br/>
                <h4>We promise to deliver</h4>
                <br/><br/>
            </div>
        </div>
</div>

<div class="container">
    <div class="row">
                <div class="col-sm-4">
                    <div class="w3-container">
                        <div class="w3-card-4" style="width:100%;">
                            <header class="w3-container" style="height:25%;">
                                <h6>Confrence</h6>
                                <div align="center">
                                <img src="images/confrence.jpg" height="150" width="80%"/>
                                <br/>
                                </div>
                            </header>
                                <br/>
                                We provide the best confrence halls with servieces like: 
                                <ul>
                                    <li>special lighting/Sound system</li>
                                    <li>confotable seats</li>
                                    <li>Among Others</li>
                                 </ul>


                            <footer class="w3-container">
                                <a href="hall.php">view More</a>
        
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w3-container">
                        <div class="w3-card-4" style="width:100%;">
                            <header class="w3-container" style="height:25%;">
                                 <h6>Dinning/catering</h6>
                            <div align="center">
                                <img src="images/dinning2.jpg" height="150" width="80%"/>
                                <br/>
                            </div>
                              
                            </header>
                             <br/>
                            We provide Dinning and  catering services including:
                            <ul>
                                <li>Family (upto to Five)</li>
                                <li>Family (Upto ten)</li>
                                <li>Among Others</li>
                            </ul>
                            <footer class="w3-container">
                                <a href="Dinner.php">view More</a>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w3-container">
                        <div class="w3-card-4" style="width:100%;">
                            <header class="w3-container"  style="height:25%;">
                                <h6>Recreational activities</h6>
                                <div align="center">
                                <img src="images/recrational.jpg" height="150" width="80%"/>
                                <br/>
                                 </div>
                            </header>
                            <br/>
                            We have several Recreational activities in our compound including:
                            <ul>
                                <li>bike-ridding</li>
                                <li>pitch (football, basketball)</li>
                                <li>Among Others</li>
                            </ul>

                            <footer class="w3-container">
                                <a href="rectreational.php">view More</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>