 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
    body{    
    font-family: 'Roboto Condensed', sans-serif;
    
}
    body{
        background-image:url(dist/img/quad.jpg);
         
    }
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 380px;
  perspective: 1000px;
  margin-left: 5px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 180%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 180%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
    </style>
 </head>
 <body>
    <br>
    <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel" style="background-color: gray;">
    <?php 
  $db=mysqli_connect('localhost','root','','yearbook');
  $goo= 2018;
         $user_check_query = "SELECT * FROM shs WHERE year='$goo' ORDER BY lname";
         $result = mysqli_query($db, $user_check_query);
         while ($row = mysqli_fetch_array($result)){
                echo "&nbsp;<div class='flip-card'>
                        <div class='flip-card-inner'>
                            <div class='flip-card-front'>";
                                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
                            echo "</div>
                        <div class='flip-card-back'>
                            <h3>".$row['lname'].", ".$row['fname']." ".$row['mname']."</h3> 
                            <p>Architect & Engineer</p> 
                            <p>&#10075;&#10075;".$row['quotes']."&#10076;&#10076;</p>
                        </div>
                      </div>
                    </div><br>";
                    }
                    ?>
</div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
     </script>
 </body>
 </html>