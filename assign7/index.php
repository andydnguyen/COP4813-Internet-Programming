<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>COP 4813: Internet Programming</title>
    <link rel="stylesheet" href="../normalize.css">
  <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assign1/style.css">
    <link rel="stylesheet" href="../responsive.css">
    <script src="main.js" type="text/javascript"></script>
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
</head>
<body>

  <script type="text/javascript" language="javascript">
    function ajaxDepFilter(){
      var ajaxReq;
      try{
              // Opera 8.0+, Firefox, Safari
              ajaxReq = new XMLHttpRequest();
      } catch (e){
              // Internet Explorer Browsers
              try{
                      ajaxReq = new ActiveXObject("Msxml2.XMLHTTP");
              } catch (e) {
                      try{
                              ajaxReq = new ActiveXObject("Microsoft.XMLHTTP");
                      } catch (e){
                              return false;
                      }
              }
      }
      ajaxReq.onreadystatechange = function(){
              if(ajaxReq.readyState == 4){
                      
                      document.getElementById('results').innerHTML = ajaxReq.responseText;
              }
      }
      //var selected = document.selection.employee.value;
      var selected = document.getElementById('department');
      var departValue=selected.options[selected.selectedIndex].value;
      console.log(departValue);
      ajaxReq.open("GET", "process.php?departValue=" + departValue, true);
      ajaxReq.send(null);
    }
</script>

<?php
	error_reporting(0);
	$error =$_GET['error'];
	$status = $_GET['status'];
?>

    <header>
    <a href="../index.html" id="logo" id="top">
      <h1>Assignment 7: Introduction to Asynchronous JavaScript and XML</h1>
      <h2 id="mid">Andy Nguyen</h2>
      <h2 id="right">Return to ePortfolio<h2>
    </a>
  </header>



    <ul id="assignment2">
      <li>
      <div class="assignment2">
        <h1 class="order-form"> Faculty Staff</h1>
          <h3>Department Filter</h3>

                <select  id="department" placeholder="Department" onchange='ajaxDepFilter()'>
                        <option value="" default selected>Select A Department</option>
                        <option value="All">All Departments</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Information Science">Information Science</option>
                        <option value="Information Systems">Information Systems</option>
                </select>
      </div>
    </li>

     <li>
      <div id="results">
        <br>
        

      </div>
    </li>
  </ul>




<footer>
    <p id="backtotop"> <a href="#top">Back to Top</a><p>
    <a href="Http://twitter.com/andyn92" target="_blank"><img src="../assign1/img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
    <a href="http://facebook.com/andynguyen904" target="_blank"><img src="../assign1/img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
    <p>&copy; 2015 Andy Nguyen.</p>
  </footer>
</body>
</html>
