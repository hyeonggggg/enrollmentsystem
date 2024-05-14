<?php
session_start();

if (empty($_POST['schoolyear']) || empty($_POST['gradelevel']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
  header('Location: index.php');
} else {

  $schoolyear = $_POST['schoolyear'];
  $gradelevel = $_POST['gradelevel'];
  $lrn = $_POST['lrn'];
  $reference = $_POST['reference'];
  $balikaral = $_POST['balikaral'];
  $birthnumber = $_POST['birthnumber'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $extension = $_POST['extension'];
  $birthday = $_POST['birthday'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $placeofbirth = $_POST['placeofbirth'];
  $ip = $_POST['ip'];
  $indigenous = $_POST['indigenous'];
  $pantawid = $_POST['pantawid'];
  $pantawidProgram = $_POST['pantawidProgram'];
  $region_text = $_POST['region_text'];
  $province_text = $_POST['province_text'];
  $city_text = $_POST['city_text'];
  $barangay_text = $_POST['barangay_text'];
  $zipcode = $_POST['zipcode'];
  $permanent_region_text = $_POST['permanent_region_text'];
  $permanent_province_text = $_POST['permanent_province_text'];
  $permanent_city_text = $_POST['permanent_city_text'];
  $permanent_barangay_text = $_POST['permanent_barangay_text'];
  $permanent_zipcode = $_POST['permanent_zipcode'];
  $fathers_lastname = $_POST['fathers_lastname'];
  $fathers_firstname = $_POST['fathers_firstname'];
  $fathers_middlename = $_POST['fathers_middlename'];
  $fathers_phonenumber = $_POST['fathers_phonenumber'];
  $mothers_lastname = $_POST['mothers_lastname'];
  $mothers_firstname = $_POST['mothers_firstname'];
  $mothers_middlename = $_POST['mothers_middlename'];
  $mothers_phonenumber = $_POST['mothers_phonenumber'];
  $guardians_lastname = $_POST['guardians_lastname'];
  $guardians_firstname = $_POST['guardians_firstname'];
  $guardians_middlename = $_POST['guardians_middlename'];
  $guardians_phonenumber = $_POST['guardians_phonenumber'];

  include 'conn.php';
  mysqli_query($conn, "INSERT INTO enrollment(schoolyear, gradelevel, lrn, reference, balikaral, birthnumber, lastname, firstname, middlename, extension, birthday, age, sex, placeofbirth, ip, indigenous, pantawid, pantawidProgram, region_text, province_text, city_text, barangay_text, zipcode, permanent_region_text, permanent_province_text, permanent_city_text, permanent_barangay_text, permanent_zipcode, fathers_lastname, fathers_firstname, fathers_middlename, fathers_phonenumber, mothers_lastname, mothers_firstname, mothers_middlename, mothers_phonenumber, guardians_lastname, guardians_firstname, guardians_middlename, guardians_phonenumber)VALUES('$schoolyear', '$gradelevel', '$lrn', '$reference', '$balikaral', '$birthnumber', '$lastname', '$firstname', '$middlename', '$extension', '$birthday', '$age', '$sex', '$placeofbirth', '$ip', '$indigenous', '$pantawid', '$pantawidProgram', '$region_text', '$province_text', '$city_text', '$barangay_text', '$zipcode', '$permanent_region_text', '$permanent_province_text', '$permanent_city_text', '$permanent_barangay_text', '$permanent_zipcode', '$fathers_lastname', '$fathers_firstname', '$fathers_middlename', '$fathers_phonenumber', '$mothers_lastname', '$mothers_firstname', '$mothers_middlename', '$mothers_phonenumber', '$guardians_lastname', '$guardians_firstname', '$guardians_middlename', '$guardians_phonenumber')") or die('Query Error');

  header('Location: success.php');
}
?>