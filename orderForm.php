<?php include 'header.php'; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Book Event</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
body {font-family:"Times New Roman", serif}
h1,h2,h3,h4,h5,h6 {font-family:serif; letter-spacing:5px}

form div #bgImage{
    padding: 0 4px;
}
input[type=text], input[type=address]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin: 6px 0 16px 0;
    resize: vertical;
    font-weight: 500;
    font-size: 18px;
}

</style>
<body>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Contact -->
<div id="contact" class="container">
<h1>Book an Event</h1>

<p class="w3-text-green w3-large">
<b>Catering Service, Thana Nagfani, Moradabad</b></p>
<p class="w3-text-light-gray w3-large">You can also contact us by phone <b>+91 xxx xx xxx xx</b> or email <b>catering@catering.com</b>, or Book an event here:</p>

<form action="order.php" method="POST">
    
    <div class="row">

    <div class="col-sm-12" id="bgImage">
    <!-- <label for="text">First Name</label> -->
          <p><input type="name" placeholder="Your Name..." required name="fullName"></p>
</div>
        <div class="col-sm-6" id="bgImage">

          <!-- <label for="number">Mobile Number</label> -->
          <p><input type="tel" placeholder="Mobile Number..." required name="mobileNum"></p>

          <!-- <label for="number">Number of Guest</label> -->
          <p><input type="number" placeholder="Numbers of Guests..." name="People" pattern="[0-9]{10}" required></p>
        </div>

        <div class="col-sm-6" id="bgImage">

          <!-- <label for="email">E-mail</label> -->
          <p><input type="email" placeholder="E-mail" required name="emailAdd"></p>
          
          <!-- <label for="date">Event Time & Date</label> -->
          <p><input type="datetime-local" placeholder="Date and time" required name="date" ></p>
        </div>

        <div class="col-sm-12" id="bgImage">
          <!-- <label for="text">Service Types</label> -->
          <p><input type="text" placeholder="Service Type..." required name="serviceType"></p>
          </div>

         <div class="col-sm-12" id="bgImage">
          <!-- <label for="text">First Name</label> -->
          <p><input type="text" placeholder="Address..." required name="Address"></p>
          </div>
          
          <div class="col-sm-12" id="bgImage">
          <textarea id="message" name="fmsg" placeholder="Write something..." style="height:100px"></textarea>
           </div>
    </div>

    <div class="w3-center">
       <p><input type="submit" name="submit" value="Book Event"></p>
    </div>
    

</form>


    </div>  



<!-- End Content -->
</div>

<?php include 'footer.php'; ?>

</body>
</html> 