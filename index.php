<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  border: 1px solid #555;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
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
  color: white;
}
</style>
</head>
<body>

<h2>Vertical Navigation Bar</h2>
<p>In this example, we center the navigation links and add a border to the navigation bar.</p>

<ul>
  <li><a class="active" href="cv.html">Curriculum Vitae</a></li>
  <li><a href="tiltedpage_scroll_demo.html">Interests</a></li>
  <li><a href="ConsultingServices.html">Consulting Services</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</html>