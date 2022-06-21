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