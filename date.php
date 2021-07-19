<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
 <link rel="stylesheet" href="css/jquery-ui.css">
 <!-- <link rel="stylesheet" href="/resources/demos/style.css">-->
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
  $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd', beforeShowDay: $.datepicker.noWeekends});
	$( "#datesam" ).datepicker();
  } );

  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
<p><i class="fa fa-lock" aria-hidden="true"></i></p>

 
<p>Date: <input type="text" id="datesam"></p>
<p><i class="fa fa-lock" aria-hidden="true"></i></p>
 
 
</body>
</html>