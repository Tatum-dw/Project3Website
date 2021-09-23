<?php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>My Calendar</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="calendar.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  
  <style>
	body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
	body {font-size:16px;}
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
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
			<h3 class="w3-padding-64"><b>TASK<br>CHECKER</b></h3>
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
		  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">X</a>
		  <span>Task Checker</span>
		</header>

		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<!-- !PAGE CONTENT! -->
		<div class="w3-main" style="margin-left:340px;margin-right:40px">

		  <!-- Header -->
		  <div class="w3-container" style="margin-top:80px" id="showcase">
			<h1 class="w3-jumbo"><b>My Calendar</b></h1>
			<hr style="width:50px;border:5px solid red" class="w3-round">
		  </div>
                  
                  <style>
                    /*Calendar Top Navigation*/
                      div#calendar{
                        margin:0px auto;
                        padding:20px;
                        font-family:Helvetica, "Times New Roman", Times, serif;
                      }
                  </style> 
                  
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
                
                //Script for update, adding, and deleting on calendar   
                $(document).ready(function() {
                 var calendar = $('#calendar').fullCalendar({
                  editable:true,
                  header:{
                   left:'prev,next today',
                   center:'title',
                   right:'month,agendaWeek,agendaDay'
                  },
                  events: 'loadFromDB.php',
                  selectable:true,
                  selectHelper:true,
                  displayEventTime:false,
                  select: function(start, end, allDay)
                  {
                   var title = prompt("Enter Event Title");
                   if(title)
                   {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                     url:"insertIntoDB.php",
                     type:"POST",
                     data:{title:title, start:start, end:end},
                     success:function()
                     {
                      calendar.fullCalendar('refetchEvents');
                      alert("Added Successfully");
                     }
                    })
                   }
                  },
                  editable:true,
                  eventResize:function(event)
                  {
                      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                   var title = event.title;
                   var id = event.id;
                   $.ajax({
                    url:"updateDB.php",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function(){
                     calendar.fullCalendar('refetchEvents');
                     alert('Event Update');
                    }
                   })
                  },

                eventDrop:function(event)
                {
                 var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                 var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                 var title = event.title;
                 var id = event.id;
                 $.ajax({
                  url:"updateDB.php",
                  type:"POST",
                  data:{title:title, start:start, end:end, id:id},
                  success:function()
                  {
                   calendar.fullCalendar('refetchEvents');
                   alert("Event Updated");
                  }
                });
                },

                eventClick:function(event)
                {
                 if(confirm("Are you sure you want to remove it?"))
                 {
                  var id = event.id;
                  $.ajax({
                   url:"deleteFromDB.php",
                   type:"POST",
                   data:{id:id},
                   success:function()
                   {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Removed");
                   }
                  })
                 }
                },

               });
              });
   
  </script>
 </head>
 <body>
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>