<!DOCTYPE html>
<html>
    <head>
        <style>
         /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
    
    
    
    
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 400px;
  background-color: #f1f1f1;
  border: 1px solid #555;
  margin-top: 150px;
  margin-bottom: 200px;
  margin-right: 200px;
  margin-left: 500px;
}

li a {
  display: block;
  color: #000;
  padding: 50px 50px;
  text-decoration: none;
}

li {
  text-align: center;
  border-bottom: 1px solid #555;
}

li:last-child {
  border-bottom: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: green;
}











</style>
    </head>
<body>
 
    
    <div class="topnav">
  <a href="ConsultingServices.html">Consulting Home</a>
    <a href="cv.html">Cv Home</a>

</div>
    
    
    <!-- //Starting the session to get the session variable from the last page-->
    <div>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameVal = $_POST['txtName'];
        $NumberVal = $_POST['txtNum'];
        echo "The name is: ".$fullNameVal.".";
        echo "<br></br>";
        echo "The phone number is: ".$NumberVal.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
    ?>
    </div>




</body>

</html>


