 
<?php
$conn =mysqli_connect('localhost','root','','test');
if(isset($_POST['name'])){
	
  $name      = $_POST['name']; 
  $password  = $_POST['password']; 
  $sql= mysqli_query($conn,"INSERT INTO home(name,password) VALUES('".$name."','".$password."')");
}

 ?>

<!DOCTYPE>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
 <form id="fromrecord" method="post" onsubmit="return false">
    <input type="text" name="name" />
    <input type="password" name="password" />
    <button type="button" value="save" onclick="adddata()">Save Data</button>
</form>
<script>
    function adddata(){
            $.ajax({
                url: 'Adddata.php',
                type: 'POST',
                data: $('#fromrecord').serialize(),
      
                success: function (returndata) 
                {
                   alert('Insert Data');
                   location.reload();

                }
    		});
        }
</script>
</body>
</html>

 