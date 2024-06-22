<?php
session_start();

include 'conn.php';

if (isset($_SESSION['user'])) {
    if (time() - $_SESSION['login_time_stamp'] > 600) {
        session_unset();
        session_destroy();
        header("Location: admin-login.php");
    } else {
        $_SESSION['login_time_stamp'] = time();
    }
} else {
    header('Location: admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />

    <title>Settings | Plaridel Integrated National High School</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <style>
        .btn-secondary {
            background-color: #1cc88a;
            border-color: #1CC88A;
            margin-bottom: 10px;
        }

        .btn-secondary:hover {
            background-color: WHITE;
            color: #1CC88A;
            border-color: green;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            border-radius: 5px;
            border: 1px solid #1CC88A;
        }

        div.dataTables_wrapper div.dataTables_filter input:focus {
            border-radius: 5px;
            border: 1px solid #1CC88A;
            box-shadow: none;
        }

        div.dataTables_wrapper div.dataTables_length label {
            margin-left: 15px;
            margin-bottom: 10px;
        }

        div.dataTables_wrapper div.dataTables_length select {
            border-radius: 5px;
            border: 1px solid #1CC88A;
        }

        div.dataTables_wrapper div.dataTables_length select:focus {
            border-radius: 5px;
            border: 1px solid #1CC88A;
            box-shadow: none;
        }

        .pagination .page-item.active .page-link {
            background-color: #1CC88A;
            border-color: #1CC88A;
            color: black
        }

        .pagination .page-link {
            margin-bottom: 10px;
            color: #1CC88A;
            box-shadow: none;
        }

        @media print {
            @page {
                size: landscape;
            }
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="superadminhome">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img width="50" src="assets/favicon.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SETTINGS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Faculty</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link text-success d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform:uppercase;">Logged in as, <span class="text-success"><strong><?php echo $_SESSION['user']; ?></strong></span></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="superadmin-logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
                        <h1 class="h1 mb-0 text-success" style="text-transform:uppercase;"><b>Faculty</b></h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-1">
                                <a type="button" href="addfaculty" class="btn btn-md btn-success">
                                    <i class="fa fa-plus-circle"></i> Add New Faculty
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['successaddfaculty'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show text-start" role="alert">
                            <i class="fas fa-check-circle" width="24" height="24"></i>
                            <?= $_SESSION['successaddfaculty']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                        unset($_SESSION['successaddfaculty']);
                    }
                    ?>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Middle Initial</th>
                                            <th>Last Name</th>
                                            <th>Position</th>
                                            <th>Track</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Middle Initial</th>
                                            <th>Last Name</th>
                                            <th>Position</th>
                                            <th>Track</th>
                                            <th>Type</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        include 'conn.php';
                                        $query = "SELECT * FROM faculty";
                                        $query_run = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $items) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?= $items['id']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['firstName']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['middleName']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['lastName']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['position']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['track']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $items['type']; ?>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>