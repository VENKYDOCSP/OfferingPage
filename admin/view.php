<?php
// echo "viewd";
// exit();

if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evochef";

    // Check if form is submitted for saving edited data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $status = $_POST["status"];
            try {
                // Establish a PDO database connection
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                // Set PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE eochef SET status='$status' WHERE id='$id'";
                $stmt = $pdo->prepare($sql);
                if ($stmt->execute()) {
                    echo "<script>
                alert('Succesfully Updated ✅');
                window.location.href='data.php?admin=1';
                </script>";
                }
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }


    // select * from table

    try {
        // Establish a PDO database connection
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SELECT query
        $query = "SELECT * FROM eochef where id=$id";
        $statement = $pdo->prepare($query);

        // Execute the SELECT query
        $statement->execute();

        // Fetch all rows as an associative array
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin</title>
            <!-- <link rel="shortcut icon" href="image 2.svg" type="image/x-icon"> -->
            <!-- Bootstrap CSS v5.2.1 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.3.1/css/dataTables.dateTime.min.css">
            <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" />
            <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css" />
        </head>

        <body>
            <div class="container my-5 overflow-scroll">

                <table id="example" class="table table-striped display  table-bordered responsive cell-border wrap rounded" style="width:100%">
                    <thead class="table-dark">


                        <tr>


                            <th style="background-color: #C5312F;">ID</th>
                            <th style="background-color: #C5312F;">Name</th>
                            <th style="background-color: #C5312F;">E-mail</th>
                            <th style="background-color: #C5312F;">Contect</th>
                            <th style="background-color: #C5312F;">Location</th>
                            <th style="background-color: #C5312F;">query</th>
                            <th style="background-color: #C5312F;">submitted on</th>
                            <th style="background-color: #C5312F;">Status</th>
                            <th style="background-color: #C5312F;">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $v) {
                            if (!empty($v['fname'])) {


                        ?>
                                <tr>


                                    <td style="" class="fw-bold"> <?php echo $v["id"]; ?> </td>
                                    <td><?php echo $v['fname']; ?></td>
                                    <td><?php echo $v['email']; ?></td>
                                    <td><?php echo $v['contect']; ?></td>
                                    <td><?php echo $v['Location']; ?></td>
                                    <td><?php echo $v['qury']; ?></td>
                                    <td><?php echo $v["submitted"]; ?></td>
                                    <?php echo "<form method='post' action='" . $_SERVER["PHP_SELF"] . '?id=' . $v["id"] . "'> " ?>
                                    <td> <?php echo "<textarea name='status' value='" . $v["status"] . "' /> " . $v["status"] . " </textarea>"; ?></td>
                                    <td> <?php echo "<input type='hidden' name='id' value='" . $v["id"] . "' />";
                                            echo "<input class='btn btn-primary' name='submit' type='submit' value='Save' />";
                                            echo "</form>"; ?> </td>
                                </tr>

                    <?php }
                        }
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    } ?>
                    </tbody>
                    <thead>

                        </tfoot>
                </table>
            </div>
        <?php


    }
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/v/dt/dt-1.11.4/date-1.1.1/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script> -->
        <script src="https://cdn.datatables.net/datetime/1.3.1/js/dataTables.dateTime.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </body>

        </html>