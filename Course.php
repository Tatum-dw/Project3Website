<!DOCTYPE html>
<html lang="en">
	<title>Courses</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link href="Courses.css" type="text/css" rel="stylesheet" />
	
	<style>
	body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
	body {font-size:16px;}
	.w3-half img{margin-bottom:100px;margin-top:100px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}
        
        .topnav {
        overflow: hidden;
        background-color: white;
        }

      .topnav .search-container {
        float: left;
        margin-left: 300px;
        }

      .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
        }

      .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
        }

      .topnav .search-container button:hover {
        background: white;
        }

        @media screen and (max-width: 600px) {
        .topnav .search-container {
          float: none;
        }
        
        .topnav input[type=text], .topnav .search-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
        
        .topnav input[type=text] {
          border: 1px solid #ccc;  
        }
      }
      
      /* Remove margins and padding from the list */
        ul {
          margin: 0;
          padding: 0;
        }

        /* Style the list items */
        ul li {
          position: relative;
          padding: 12px 8px 12px 40px;
          list-style-type: none;
          font-size: 18px;
          transition: 0.2s;
        }

        /* When clicked on, add strike out text */
        ul li.checked {
          text-decoration: line-through;
        }

        /* Style the input */
        input {
          margin: 0;
          border: none;
          border-radius: 0;
          width: 75%;
          padding: 10px;
          float: left;
          font-size: 16px;
        }

        /* Style the "Add" button */
        .addBtn {
          padding: 10px;
          width: 25%;
          background: #d9d9d9;
          color: #555;
          float: left;
          text-align: center;
          font-size: 16px;
          cursor: pointer;
          transition: 0.3s;
          border-radius: 0;
        }

        .addBtn:hover {
          background-color: #bbb;
        }
	</style>
	
	<body>
            <!-- Search bar -->
            <div class="topnav">    
                <div class="search-container">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            
		<!-- Sidebar/menu -->
		<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:250px;font-weight:bold;" id="mySidebar"><br>
		  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
		  <div class="w3-container">
			<h3 class="w3-padding-64"><b>Website<br>Name</b></h3>
		  </div>
		  <div class="w3-bar-block">
			<a href="#Home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
			<a href="#Courses" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Courses</a> 
			<a href="#GoalsAndDeadlines" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Goals and Deadlines</a> 
			<a href="#MyCalendar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My Calendar</a> 
			<a href="#Progress" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Progress</a> 
		  </div>
		</nav>

		<!-- Top menu on small screens -->
		<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
		  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
		  <span>Website Name</span>
		</header>

		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<!-- !PAGE CONTENT! -->
		<div class="w3-main" style="margin-left:340px;margin-right:40px">

		  <!-- Header -->
		  <div class="w3-container" style="margin-top:80px" id="showcase">
			<h1 class="w3-jumbo"><b>My Courses</b></h1>
			<hr style="width:50px;border:5px solid red" class="w3-round">
		  </div>
                  
                  <style>
                    /*Calendar Top Navigation*/
                      div#calendar{
                        margin:0px auto;
                        padding:0px;
                        width: 602px;
                        font-family:Helvetica, "Times New Roman", Times, serif;
                      }

                      div#calendar div.box{
                          position:relative;
                          top:0px;
                          left:0px;
                          width:100%;
                          height:40px;
                          background-color:   #787878 ;      
                      }

                      div#calendar div.header{
                          line-height:40px;  
                          vertical-align:middle;
                          position:absolute;
                          left:11px;
                          top:0px;
                          width:582px;
                          height:40px;   
                          text-align:center;
                      }

                      div#calendar div.header a.prev,div#calendar div.header a.next{ 
                          position:absolute;
                          top:0px;   
                          height: 17px;
                          display:block;
                          cursor:pointer;
                          text-decoration:none;
                          color:#FFF;
                      }

                      div#calendar div.header span.title{
                          color:#FFF;
                          font-size:18px;
                      }

                      div#calendar div.header a.prev{
                          left:0px;
                      }

                      div#calendar div.header a.next{
                          right:0px;
                      }

                      /*Calendar Content Cells*/
                      div#calendar div.box-content{
                          border:1px solid #787878 ;
                          border-top:none;
                      }

                      div#calendar ul.label{
                          float:left;
                          margin: 0px;
                          padding: 0px;
                          margin-top:5px;
                          margin-left: 5px;
                      }

                      div#calendar ul.label li{
                          margin:0px;
                          padding:0px;
                          margin-right:5px;  
                          float:left;
                          list-style-type:none;
                          width:80px;
                          height:40px;
                          line-height:40px;
                          vertical-align:middle;
                          text-align:center;
                          color:#000;
                          font-size: 15px;
                          background-color: transparent;
                      }

                      div#calendar ul.dates{
                          float:left;
                          margin: 0px;
                          padding: 0px;
                          margin-left: 5px;
                          margin-bottom: 5px;
                      }

                      /** overall width = width+padding-right**/
                      div#calendar ul.dates li{
                          margin:0px;
                          padding:0px;
                          margin-right:5px;
                          margin-top: 5px;
                          line-height:80px;
                          vertical-align:middle;
                          float:left;
                          list-style-type:none;
                          width:80px;
                          height:80px;
                          font-size:25px;
                          background-color: #DDD;
                          color:#000;
                          text-align:center; 
                      }
                      
                      div#calendar ul.dates li.this_today {
                        background-color: #ff0000;
                      }

                      :focus{
                          outline:none;
                      }

                      div.clear{
                          clear:both;
                      }     
                  </style>  

<div class="w3-half">
    <style>
    select {
        width: 300px;
        margin: 10px;
    }
    select:focus {
        min-width: 250px;
        width: auto;
    }
    </style>
     <BODY bgcolor ="teal">  
      
                    
 <?php
 $mysqli = NEW MySQLi('localhost','root','','course');
 
 $resultSet = $mysqli ->query("Select course_name From course");
 
$color1 = "green";
$color2 = "orange";
$color = $color1;
?>
 <select>  
      <option value="">--- My Courses ---</option>      
  <?php    
         while ($rows = $resultSet-> fetch_assoc()) 
         {
            $color == $color1 ? $color = $color2 : $color = $color1;
            
           $dept_name = $rows[course_name];
           echo "<option value='$dept_name' style='background:$color;'>$dept_name</option>";
             
         }
  ?>
 </select>          
</body>
</div>
                            


                    <div class="w3-half">
                        <div>
                          <!-- Call to calendar class-->
                            <?php
                                include 'Calendar.php';
                                $calendar = new Calendar();
                                echo $calendar->show();
                            ?>
                        </div>
                    </div>
                  </div>
                  
                  <footer><p></p></footer>
		<!-- End page content -->
		</div>

		<script>
		// Script to open and close sidebar
		function w3_open() {
		  document.getElementById("mySidebar").style.display = "block";
		  document.getElementById("myOverlay").style.display = "block";
		}
		 
		function w3_close() {
		  document.getElementById("mySidebar").style.display = "none";
		  document.getElementById("myOverlay").style.display = "none";
		}
                
		//Script to open and close accordion
		function myAccFunc(id) {
		  var x = document.getElementById(id);
		  if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		  } else { 
			x.className = x.className.replace(" w3-show", "");
		  }
		}
                
		// Add a "checked" symbol when clicking on a list item
		var list = document.querySelector('ul');
		list.addEventListener('click', function(ev) {
		  if (ev.target.tagName === 'LI') {
                    ev.target.classList.toggle('checked');
		  }
		}, false);

		// Create a new list item when clicking on the "Add" button
		function newElement() {
		  var li = document.createElement("li");
		  var inputValue = document.getElementById("myInput").value;
		  var t = document.createTextNode(inputValue);
		  li.appendChild(t);
		  if (inputValue === '') {
                    alert("You must write something!");
		  } else {
                    document.getElementById("myUL").appendChild(li);
		  }
                document.getElementById("myInput").value = "";
                }
                
		</script>  
	</body>
</html>
