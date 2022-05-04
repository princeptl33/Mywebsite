<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>

  <?php  include 'nav.php' ; ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/p1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption text-body">
          <h3>WELCOME TO PRINCE TECHNOLOGY</h3>
          <p>Learn the software wih us.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/p2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption text-body">
          <h3>Join with PRINCE TECHNOLOGY </h3>
          <p>Analyze Your Abilities</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/p3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption text-info">
          <h3>Work with PRINCE TECHNOLOGY</h3>
          <p>Improve Your Skill </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>


  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">About Us</h3>
    </div>
    <div class=container-fluid>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/About-us-min.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="mx-5">I Am <strong>Prince Technology</strong></h2>
          <p class="py-3 text-size"> Hii I Am prince. I Am Complete MY <strong>IT Engineering</strong> In Diploma From Polytechnic Ahemadabad. I Am Enjoying To Devlop Websites. I Made Many Responsive Websites. I Have also Some Knowledge In App Devlopment & Software Devlopment.</p>
          <a href="about.php" class="btn btn-success">Check More Details</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-3">
    <div class="py-3">
      <h3 class="text-center"> Our <strong>Services</strong>  </h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="images/web1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Web Devlopment</h4>
              <p class="card-text">Some example of website.</p>
              <a href="#" class="btn btn-primary">See websites</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="images/app1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">App Devlopment</h4>
              <p class="card-text">Some example of Application.</p>
              <a href="#" class="btn btn-primary">See Apps</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="images/software1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Software Devlopment</h4>
              <p class="card-text">Some example of software.</p>
              <a href="#" class="btn btn-primary">See Software</a>
            </div>
          </div>
        </div>


      </div>
    </div>

  </section>

  <section class="my-3">
    <div class="py-3">
      <h3 class="text-center"> Collection of <strong>Technology</strong>  </h3>
    </div>
     <div class="container-fluid ">
       <div class="row   ">
        <div class="col-lg-4 col-md-4 col-12 mb-3">
          <img src="images/a1.jpg" alt="" class="img-fluid h-90">
         </div>
         <div class="col-lg-4 col-md-4 col-12 mb-3 ">
          <img src="images/a2.jpg" alt=""class="img-fluid h-90">
         </div>
         <div class="col-lg-4 col-md-4 col-12 mb-3">
          <img src="images/web1.jpg" alt="" class="img-fluid h-90">
         </div>
         <div class="col-lg-4 col-md-4 col-12 mb-3">
          <img src="images/i2.jpg" alt="" class="img-fluid h-10">
         </div>
         <div class="col-lg-4 col-md-4 col-12 mb-3">
          <img src="images/a6.jpg" alt="" class="img-fluid h-80">
         </div>
         <div class="col-lg-4 col-md-4 col-12 mb-3">
          <img src="images/a7.jpg" alt="" class="img-fluid h-90">
         </div>
       </div>
     </div>
   </section>  

   <section class="my-3">
    <div class="py-3">
      <h3 class="text-center"> Contact US  </h3>
    </div>
    
    <div class="w-50  m-auto">
      <form action="contact.php" method="post">
        <div class="form-group">
        <label for="">username</label>
        <input type="text" name="user" autocomplet="off" class="form-control">
        </div> 
        <div class="form-group">
        <label for="">Email Id</label>
        <input type="email" name="email" autocomplet="off" class="form-control">
        </div> 
        <div class="form-group">
        <label for="">Mobile No</label>
        <input type="number" name="mobile" autocomplet="off" class="form-control">
        </div> 
        <div class="form-group">
        <label for="">Comment</label>
        <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
        </div> 
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
   </section>

  <?php include 'footer.php'; ?>
   



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>