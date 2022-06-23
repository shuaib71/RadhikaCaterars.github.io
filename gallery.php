<?php include 'header.php'; ?>
<div class="container">
       <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white;">Gallery</h1>
       <hr style="color: white;">
       <div class="row">
              

              <div class="col-sm-4 p-3"><img src="./images/photos/img54.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img55.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img57.png" alt="" class="img-fluid"></div>
        
              <div class="col-sm-4 p-3"><img src="./images/photos/img1.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img25.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img10.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img7.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img9.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img6.png" alt="" class="img-fluid"></div>

              <div class="col-sm-4 p-3"><img src="./images/photos/img40.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img42.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img44.png" alt="" class="img-fluid"></div>

              <div class="col-sm-4 p-3"><img src="./images/photos/img61.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img63.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img62.png" alt="" class="img-fluid"></div>
         
              <div class="col-sm-4 p-3"><img src="./images/photos/img69.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img72.png" alt="" class="img-fluid"></div>
              <div class="col-sm-4 p-3"><img src="./images/photos/img71.png" alt="" class="img-fluid"></div>
              


              <?php

              $mysqli = new mysqli('localhost','root','','images') or die($mysqli->connect_error);
              $table = 'cats';
    
              $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

              while ($data = $result->fetch_assoc()){
                     echo "<div class='col-sm-4'>";
                     echo "<a href='{$data['img_dir']}' title='Travel' class='gallery-image' data-gallery>";
                     echo "<img src='{$data['img_dir']}' class='img-fluid'></a>";
                     echo "</div>";
                     }
              ?>
              
       </div>
       <div class="upload">
              <form class="input-group" action="upload.php" method="POST" enctype="multipart/form-data">
                     <input class="form-control choose" type="file" name="userfile[]" value="" multiple="">
                     <span class="input-group-btn">
                     <input class="form-control btn btn-default" type="submit" name="submit" value="Upload Your Favourite Moment">
                     </span> 
              </form> 
       </div>
</div>
<?php include 'footer.php'; ?>