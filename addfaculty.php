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
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        a {
            text-decoration: none;
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
                    <form class="needs-validation" action="addnewfaculty.php" method="POST" novalidate>
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
                            <h1 class="h1 mb-0 text-success" style="text-transform:uppercase;"><b>Add Faculty</b></h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-1">
                                    <button type="submit" class="btn btn-md btn-success">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4 p-4">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="firstName" class="text-success font-weight-bold">First Name</label>
                                        <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" placeholder="First Name" required >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="middleName" class="text-success font-weight-bold">Middle Initial</label>
                                        <input type="text" class="form-control form-control-lg" id="middleName" name="middleName" placeholder="Middle Name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="lastName" class="text-success font-weight-bold">Last Name</label>
                                        <input type="text" class="form-control form-control-lg" id="lastName" name="lastName" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="rank" class="text-success font-weight-bold">Position</label>
                                        <select class="form-control form-control-lg" id="position" name="position" required>
                                            <option selected disabled>Choose from options</option>
                                            <option value="Teacher I">Teacher I</option>
                                            <option value="Teacher II">Teacher II</option>
                                            <option value="Teacher III">Teacher III</option>
                                            <option value="Special Science Teacher I">Special Science Teacher I</option>
                                            <option value="Special Science Teacher II">Special Science Teacher II</option>
                                            <option value="Special Science Teacher III">Special Science Teacher III</option>
                                            <option value="Special Science Teacher IV">Special Science Teacher IV</option>
                                            <option value="Special Science Teacher V">Special Science Teacher V</option>
                                            <option value="Master Teacher I">Master Teacher I</option>
                                            <option value="Master Teacher II">Master Teacher II</option>
                                            <option value="Master Teacher III">Master Teacher III</option>
                                            <option value="Master Teacher IV">Master Teacher IV</option>
                                            <option value="Head Teacher I">Head Teacher I</option>
                                            <option value="Head Teacher II">Head Teacher II</option>
                                            <option value="Head Teacher III">Head Teacher III</option>
                                            <option value="Head Teacher IV">Head Teacher IV</option>
                                            <option value="Head Teacher V">Head Teacher V</option>
                                            <option value="Head Teacher VI">Head Teacher VI</option>
                                            <option value="Assistant Principal I">Assistant Principal I</option>
                                            <option value="Assistant Principal II">Assistant Principal II</option>
                                            <option value="Principal I">Principal I</option>
                                            <option value="Principal II">Principal II</option>
                                            <option value="Principal III">Principal III</option>
                                            <option value="Principal IV">Principal IV</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputCity" class="text-success font-weight-bold">Track</label>
                                        <select class="form-control form-control-lg" id="track" name="track">
                                            <option selected disabled>Choose from options</option>
                                            <option value="STEM">STEM</option>
                                            <option value="HUMSS">HUMSS</option>
                                            <option value="ABM / ICT">ABM / ICT</option>
                                            <option value="HE / AFA">HE / AFA</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity" class="text-success font-weight-bold">Type</label>
                                        <select class="form-control form-control-lg" id="type" name="type" required>
                                            <option selected disabled>Choose from options</option>
                                            <option value="Principal">Principal</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Subject Group Head">Subject Group Head</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
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
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
    document.querySelector('[name="firstName"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
    });
    document.querySelector('[name="middleName"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
    });
    document.querySelector('[name="lastName"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
    });
</script>

</body>

</html>