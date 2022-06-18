<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style/menubar.css">
</head>
<body>
<!------------------Header-------------------------------------->
<?php
include("header.php");
include("menubar.php");
?>
<!-------------------Staff Directory ------------------------------>
<div class="w3-center w3-margin w3-text-blue">
  <b>GO TO:</b>
  <select id="staff" name="staff" onchange="location = this.value;">
    <option value="#ADMINISTRATORS">Administrators</option>
    <option value="#ACADEMIC SUPPORT">Academic Support</option>
    <option value="#COMPLIANCE">Compliance</option>
    <option value="#DEVELOPMENT">Development</option>
  </select>
</div> 

<div id="table-div" class="w3-container" style="width:80%; text-align: center;">
<div class="w3-row w3-black" width="100%" style="margin-top:20px; margin-bottom: 0px;">
  <div class="w3-col w3-center" style="width:10%"><b><i>IMAGE</i></b></div>
  <div class="w3-col w3-center" style="width:10%"><b><i>NAME</i></b></div>
  <div class="w3-col w3-left" style="width:60%"><b><i>POSITION</i></b></div>
  <div class="w3-col w3-left" style="width:10%"><b><i>EMAIL</i></b></div>
  <div class="w3-col w3-center" style="width:10%"><b><i>PHONE</i></b></div>
</div>
<?php
include("athletics/staff-dir.php")
?>
</div>
<!------------------------------------------------------->
</body>
</html>
