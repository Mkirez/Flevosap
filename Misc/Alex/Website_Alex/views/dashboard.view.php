<!DOCTYPE html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include "includes/nav.view.php" ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "St34ck5#Nice";
        $dbname = "flevosapusers";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sqll = "SELECT  * from gebruikers";
        if (mysqli_query($conn, $sqll))
        {
            echo "";
        }
        else
        {
            echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
        }
        $result = mysqli_query($conn, $sqll);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5"><?php echo $row['Visitors']; ?> Visitors</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5"><?php echo $row['revenue'];?>  Revenue</div>
                    </div>
                    <?php
                    }
                    }
                    else
                    {
                        echo '0 results';
                    }
                    ?>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">123 New Orders!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-support"></i>
                        </div>
                        <div class="mr-5">13 New Tickets!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
                    </a>
                </div>
            </div>
        </div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registration";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sqlll = "SELECT sales from sales_stats";
        if (mysqli_query($conn, $sqlll))
        {
            echo "";
        }
        else
        {
            echo "Error: " . $sqlll . "<br>" . mysqli_error($conn);
        }
        $result = mysqli_query($conn, $sqlll);
        $number=array();
        if (mysqli_num_rows($result) > 0)
        {
// output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                $number[]=$row['sales'];
            }
        }
        else
        {
            echo "0 results";
        }
        $number_formated= "[".implode(",",$number)."]";
        ?>
        <script type="text/javascript">
            window.dataf= <?php echo $number_formated; ?>
        </script>
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Sales Chart</div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name of Product</th>
                            <th>Price of Product</th>
                            <th>Product Category</th>
                            <th>Product Details</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name of Product</th>
                            <th>Price of Product</th>
                            <th>Product Category</th>
                            <th>Product Details</th>
                        </tr>
                        </tfoot>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "registration";
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = 'SELECT * from products';
                        if (mysqli_query($conn, $sql)) {
                            echo "";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        $count=1;
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
// output data of each row
                            while($row = mysqli_fetch_assoc($result)) { ?>
                                <tbody>
                                <tr>
                                    <th>
                                        <?php echo $row['product_id']; ?>
                                    </th>
                                    <td>
                                        <?php echo $row['product_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['product_price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['product_cat']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['product_details']; ?>
                                    </td>
                                </tr>
                                </tbody>
                                <?php
                                $count++;
                            }
                        } else {
                            echo '0 results';
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>