<?php


 

if (isset($_POST["uname"]) && strtolower($_POST["uname"]) == "atmastco" && isset($_POST["pass"]) && strtolower($_POST["pass"]) == "atmastco@2023")
     {
   

	include 'config.php';



 //sql

    $stmt = $conn->prepare("SELECT * FROM  contect_us");

    // execute the query
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
     }
    else if(isset($_GET) && $_GET['admin']=="1"){
	 
      include 'config.php';
      
    
     
      //sql
    
      $stmt = $conn->prepare("SELECT * FROM  contect_us");
    
      // execute the query
      $stmt->execute();
      // set the resulting array to associative
      $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
    } else {
      echo "<script>
    alert('invalid credentials');
    window.location.href='./index.php';
    </script>";
    }

?>



<!doctype html>
<html lang="en">

<head>
  <title>Admin-Data</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://atmastco.s3.eu-north-1.amazonaws.com/favicon.jpg" type="image/x-icon">

<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.3.1/css/dataTables.dateTime.min.css">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css"/>
<link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css"/>
<!-- <link  href="https://cdn.datatables.net/datetime/1.3.1/css/dataTables.dateTime.min.css"> -->
</head>

<style>
  .btn-group, .btn-group-vertical {
 
    margin-top: 14px;
    margin-left: 50px;
   

}
@media only screen and (max-width: 400px) {
  .btn-group, .btn-group-vertical {
 
  margin-left: 50px;


}
}
</style>
<body>
  <header>
    <!-- place navbar here --> 
   <div class="text-end me-5 mt-3"> <form action="logout.php" method="post">
               <input  class="bg-secondary text-white fw-semibold  " type="submit" name="logout" value="Log Out">
          </form></div>
                      
  </header>
  <main>
  <div class="container" style="margin-top: -10px;">
    <table border="0" class="mt-2 mb-5" cellspacing="5" cellpadding="5"  >
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody>
  
  </table>
    <table id="example" class="table table-striped table-bordered responsive text-dark rounded" style="width:100%">
        <thead class="table-dark ">
            <tr>
               
							  <th style="background-color: #2D80C3;">Id</th>
                <th style="background-color: #2D80C3;" >Name</th>
                <th style="background-color: #2D80C3;" >E-mail</th>
                <th style="background-color: #2D80C3;" >Contect</th>
                <th style="background-color: #2D80C3;" >Country</th>
                <th style="background-color: #2D80C3;" >Message</th>
                <th style="background-color: #2D80C3;" >submitted on</th> 
               
            </tr>
        </thead>
        <tbody>
                <?php
                foreach ($result as $v) {
                    if (!empty($v['Name'])) {
 
                ?> 
                        <tr>

                           <td style="background-color: #E7E9EC;">    <?php echo $v["id"]; ?> </td>
                            <td><?php echo $v['Name']; ?></td>
                            <td><?php echo $v['Email']; ?></td>
                            <td><?php echo $v['Phone_Number']; ?></td>
                            <td><?php echo $v['Country']; ?></td>
                            <td><?php echo $v['Text_Message']; ?></td>
                            <td><?php echo $v["submitted"]; ?></td> 
                             
                        </tr>

                <?php 
                }
                } ?>
            </tbody>
 
    </table>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.11.4/date-1.1.1/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.3.1/js/dataTables.dateTime.min.js"></script>
<script   src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
  <script>

    $(document).ready( function () {

        var minDate, maxDate;
    
    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date( data[6] );
    
            if (
                ( min === null && max === null ) ||
                ( min === null && date <= max ) ||
                ( min <= date   && max === null ) ||
                ( min <= date   && date <= max )
            ) {
                return true;
            }
            return false;
        }
    );
        minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
     var table = $('#example').DataTable({
buttons:['copy','csv','excel','pdf'],
responsive: true,
						 
             scrollX: true,

     });
     table.buttons().container()
     .appendTo('#example_wrapper .col-md-6:eq(0)');

     
     $('#min, #max').on('change', function () {
        table.draw();
    });});

  </script>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

<?php 


 

?>