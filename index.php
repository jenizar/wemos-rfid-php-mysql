<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" src="jquery/jquery.min.js">
   </script>
   <title>RFID Attendance System</title> 
   <script type="text/javascript">
      $(document).ready(function(){
         setInterval(function(){
            $("#display").load('transaction.php');
         }, 2000);
      });
   </script>      
</head>
<body>
            <h1 style='font-size:170px;'><span id="display"></span></h1>                
</body>
</html>