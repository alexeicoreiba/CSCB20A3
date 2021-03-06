<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="contact.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><!--Used fontawesome for icons -->
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet"> <!--Used google fonts for some fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

</head>

<body>
  <?php
    include('navbar.php');
  ?>
  <div id="background">
    <div id="CourseTitle">
        <div class="myBounceDiv">
      <h1>CONTACT</h1>

      <br>
      <i class="far fa-envelope fa-5x"></i>
        </div>
      <div class="card">

        <div class="container">

          <h4><b>DR.ANNA BRETSCHESR</b></h4>
          <div class="title">
            <p> <b>Email:</b> <a href="mailto:bretscher@utsc.utoronto.ca">bretscher@utsc.utoronto.ca</a></p>
            <p> <b>Office:</b> IC493</p>
            <p> <b>Phone: </b><a href="tel:14162084745">(416) 208-4745</a></p>
              <p> <b>Office Hours:</b> 11:00-12:00 WENESDAY</p>
          </div>


        </div>
      </div>
    </div>
     <div id="CourseTitle"style="margin-top: 40px;">
      <h1>TA INFO</h1>

        <div class="container" >

          <h4><b>TA</b></h4>
          <div class="title">
            <p> <b>Email:</b> <a href="mailto:bretscher@utsc.utoronto.ca">TA@mail.utoronto.ca</a></p>
            <p> <b>Tutorial Room:</b> IC493</p>
            <p> <b>Tutorial</b><br> 11:00-12:00 WENESDAY <br>4:00-6:00 FRIDAY</p>
              <p> <b>Office Hours:</b><br> 11:00-12:00 WENESDAY <br>
             4:00-6:00 FRIDAY
            <br>
             1:00-2:00 THURSDAY </p>
          </div>
      </div>
    </div>
<br>
<?php
   include('footer.php');
?>
</body>

</html>
