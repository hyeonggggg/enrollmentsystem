<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Enroll Now | Plaridel Integrated National High Schoole</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }
    </style>

</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-5">
                <a class="navbar-brand" href="#">
                    <img src="assets/favicon.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-middle">
                    <b></b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Enrollment</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="enroll.php">Enroll Now</a></li>
                                <li><a class="dropdown-item" href="enrollment-status.php">Check Enrollment Status</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->

                <div class="bg-light rounded-4 py-5 px-4 px-md-05 mb-5">
                    <div class="text-center mb-3">
                        <h1 class="display-4 fw-bolder text-success">ENROLL NOW</h1>
                    </div>
                    <form action="enrollstudent.php" method="POST">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="schoolyear" id="floatingSelect" required aria-label="Floating label select example">
                                            <option selected disabled>Select from options</option>
                                            <option value="2024 - 2025">2024 - 2025</option>
                                        </select>
                                        <label for="floatingSelect">School Year</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="gradelevel" required aria-label="Floating label select example">
                                            <option selected disabled>Select from options</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                        </select>
                                        <label for="floatingSelect">Grade Level to Enroll</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select"  id="lrn" name="lrn">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">With LRN</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="referenceNumber">
                                        <input class="form-control" name="reference" type="text" placeholder="LRN (Learner Reference Number)" maxlength="12" />
                                        <label id="referenceLabel"></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="balikaral" aria-label="Floating label select example">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Returning (Balik-Aral)</label>
                                    </div>
                                    <!-- Name input-->
                                    <div class="form-floating mb-3" id="birthnumber">
                                        <input class="form-control" name="birthnumber" type="text" placeholder="PSA Birth Certificate No. (if available upon registration)" maxlength="12" />
                                        <label id="birthnumber">PSA Birth Certificate No. (if available upon registration)</label>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Last Name" />
                                                <label for="lastname">Last Name</label>
                                            </div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="firstname" name="firstname" type="text" placeholder="First Name" />
                                                <label for="firstname">First Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="middlename" type="text" placeholder="Middle Name" />
                                                <label for="middlename">Middle Name</label>
                                            </div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" name="extension" aria-label="Floating label select example">
                                                    <option selected disabled>Select from options</option>
                                                    <option value="Jr.">Sr.</option>
                                                    <option value="Sr.">Jr.</option>
                                                    <option value="III">III</option>
                                                </select>
                                                <label for="floatingSelect">Extension Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="birthday" name="birthday" type="date" max="9999-12-31" />
                                                <label for="birthday">Birthday</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="age" name="age" type="text" placeholder="Age" readonly />
                                                <label for="age">Age</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="placeofbirth" type="text" placeholder="Place of Birth" />
                                        <label id="placeofbirth">Place of Birth (Municipality/City)</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="ip" name="ip">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Belonging to any Indigenous People (IP)</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="indigenousPeople">
                                        <input class="form-control" name="indigenous" type="text" placeholder="If Yes, please specify" />
                                        <label id="indigenousLabel"></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="pantawid" name="pantawid">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Is your family a beneficiary of 4Ps?</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="pantawidProgram">
                                        <input class="form-control" name="pantawidProgram" maxlength="20" placeholder="If Yes, type the 4Ps Household ID Number below" />
                                        <label id="pantawidLabel"></label>
                                    </div>
                                    <h5 class="text-success"><strong>Current Address</strong></h5>
                                    <div class="row g-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="region_text" id="region-text" required>
                                            <label class="form-label">Region</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="province_text" id="province-text" required>
                                            <label class="form-label">Province</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="city_text" id="city-text" required>
                                            <label class="form-label">City / Municipality</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
                                            <label class="form-label">Barangay</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-md" maxlength="4" name="zipcode" id="zipcode" required>
                                            <label class="form-label">Zip Code</label>
                                        </div>
                                    </div>
                                    <h5 class="text-success"><strong>Permanent Address</strong></h5>
                                    <div class="row g-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_region_text" id="permanent_region-text" required>
                                            <label class="form-label">Region</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_province_text" id="permanent_province-text" required>
                                            <label class="form-label">Province</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_city_text" id="permanent_city-text" required>
                                            <label class="form-label">City / Municipality</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_barangay_text" id="permanent_barangay-text" required>
                                            <label class="form-label">Barangay</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-md" maxlength="4" name="permanent_zipcode" id="permanent_zipcode" required>
                                            <label class="form-label">Zip Code</label>
                                        </div>
                                    </div>
                                    <h5 class="text-success"><strong>Parents/Guardian's Information</strong></h5>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-success mb-0"><strong>Father's Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input type="text" class="form-control" name="fathers_lastname"  id="fathers_lastname" placeholder="Last Name" required/>
                                                    <label for="lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" name="fathers_firstname" id="fathers_firstname" placeholder="First Name" required/>
                                                    <label for="firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" type="text" name="fathers_middlename" id="fathers_middlename" type="text" placeholder="Middle Name" />
                                                    <label for="firstname">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="fathers_phonenumber" id="fathers_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="fathers_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-success mb-0"><strong>Mother's Maiden Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" id="mothers_lastname" name="mothers_lastname" placeholder="Last Name" />
                                                    <label for="mothers_lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" id="mothers_firstname" name="mothers_firstname" placeholder="First Name" />
                                                    <label for="mothers_firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" type="text" id="mothers_middlename" name="mothers_middlename" placeholder="Middle Name" />
                                                    <label for="mothers_firstname">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="mothers_phonenumber" id="mothers_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="mothers_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-success mb-0"><strong>Guardian's Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" id="guardians_lastname" name="guardians_lastname" type="text" placeholder="Last Name" />
                                                    <label for="guardians_lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" id="guardians_firstname" name="guardians_firstname" type="text" placeholder="First Name" />
                                                    <label for="guardians_firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" id="guardians_middlename" name="guardians_middlename" type="text" placeholder="Middle Name" />
                                                    <label for="guardians_middlename">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="guardians_phonenumber" id="guardians_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="guardians_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-success btn-lg" id="submitButton" type="submit">SUBMIT</button></div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact cards-->
                <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                        <div class="h5 mb-2">Chat with us</div>
                        <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                        <div class="h5">Ask the community</div>
                        <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                        <div class="h5">Support center</div>
                        <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                        <div class="h5">Call us</div>
                        <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-success py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></div>
                </div>
                <div class="col-auto">
                    <b>
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </b>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('birthday').addEventListener('input', function(e) {
                var birthdate = new Date(e.target.value);
                var today = new Date();
                var age;
                if (!isNaN(birthdate.getTime())) { // Check if birthdate is a valid date
                    age = today.getFullYear() - birthdate.getFullYear();
                    var m = today.getMonth() - birthdate.getMonth();
                    if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
                        age--;
                    }
                } else {
                    age = '';
                }
                document.getElementById('age').value = age;
            });
        });
    </script>
    <script>
        document.querySelector('[name="firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers-lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers-firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers-middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="reference"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        document.querySelector('[name="zipcode"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
    <script>
        document.getElementById('lrn').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('referenceNumber').style.display = 'block';
                document.getElementById('referenceLabel').textContent = 'Learner Reference Number (LRN)';
            } else {
                document.getElementById('referenceNumber').style.display = 'none';
            }
        });

        document.getElementById('ip').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('indigenousPeople').style.display = 'block';
                document.getElementById('indigenousLabel').textContent = 'If Yes, please specify:';
            } else {
                document.getElementById('indigenousPeople').style.display = 'none';
            }
        });

        document.getElementById('pantawid').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('pantawidProgram').style.display = 'block';
                document.getElementById('pantawidLabel').textContent = 'If Yes, type the 4Ps Household ID Number below';
            } else {
                document.getElementById('pantawidProgram').style.display = 'none';
            }
        });
    </script>
    <script src="js/ph-address-selector.js"></script>
    <script src="js/ph-address-selector-two.js"></script>
</body>

</html>