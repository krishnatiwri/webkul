<!DOCTYPE html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
 <!--    <button onclick='printnumber()'>Print 1 to 10</button>
    <div id="integerenumbere"></div>
    <br>

    <button onclick='addInput()'>+Add input</button>
    <div id="input_fields"></div>

	<script>
      
       function printnumber(){
        	for(var i = 1 ; i <= 10 ; i++){
        		$('#integerenumbere').append(i+'<br>');
        	}
        }

        function addInput(){ 
        	
            $('#input_fields').append('<input type="text"><br><br>');
        }

       
    </script> -->


    <button onclick="addprintnumber()">Print 1 to 10</button>
    <div id="printnumber"></div>

    <button onclick="addrow()">Add Row</button>
    <div id="rowadd"></div>
       

    <script>
    	function addprintnumber()
    	{
    		for(var i=1; i <=10;i++){
    		$('#printnumber').append(i+'<br>');
    	  }
    	}

    	function addrow()
    	{
    		$('#rowadd').append('<input type="text"><br><br>');
    	}

    	
    </script>