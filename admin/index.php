<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://atmastco.s3.eu-north-1.amazonaws.com/favlogo.png" type="image/x-icon">
  <title> Atmastco admin</title>
  <link rel="shortcut icon" href="image 2.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>


<style>
  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
  }

 
  .vv:hover {
    opacity: 0.9;
  }
</style>

<body>
  <section class="  ">
    <div class="container  text-center my-3 my-md-5"><img class="img-fluid" width="350px" src="https://atmastco.s3.eu-north-1.amazonaws.com/Atmastco+logo.png" alt=""></div>

    <div class="container   d-flex justify-content-center align-items-center">


      <div class="col-12 col-md-5   offset-xl-1 shadow p-5">
        <form method="post" action="data.php">
          <div class="d-flex  align-items-center justify-content-center  ">
            <p class="lead fw-normal mb-0 me-3 " style="font-weight: bold; color:#2D80C3">Admin Login</p>

          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"> </p>
          </div>

          <!-- Email input -->
          <div class="form-outline my-4 ">
            <input style="  border: 2px solid #2D80C3; 
  padding: 10px;
  box-shadow: 6px 4px #2D80C3;" type="text"  id="form3Example3" name="uname" required class="form-control form-control-lg" placeholder="Username" />
            <!-- <label class="form-label" for="form3Example3" ><b> User Name </b></label> -->
          </div>

          <!-- Password input -->
          <div class="form-outline my-5">
            <input style="  border: 2px solid #2D80C3;
  padding: 10px;
  box-shadow: 6px 4px #2D80C3;" type="text" id="form3Example4"   required name="pass" class="form-control form-control-lg" placeholder="password" />
            <!-- <label class="form-label" for="form3Example4" name="pass"> <b> Password</b></label> -->
          </div>



          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn vv  btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: #2D80C3; color: #eee;">Login</button>

          </div>

        </form>
      </div>
    </div>
    </div>

  </section>

  <?php if (isset($_SESSION['invalid']) && $_SESSION['invalid'] == "true") { ?>
    <script type="text/javascript">
      window.onload = function() {
        alert("Invalid credentials");
      }
    </script>
  <?php }


  ?>


</body>

</html>