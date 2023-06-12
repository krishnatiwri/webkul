<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	

	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<label >Select4</label>
               <select onchange="showdata()" id="type" class="form-control">
               <option value="animal">Animal</option>
               <option value="cars" selected="">Car</option>
              </select>	
			</div>

			<div class="col-md-6">
				<select id="valuetype" class="form-control"></select>
			</div>
			
		</div>
	</div>
</div>
</body>
<script>
	function showdata() {
		    var type = $('#type').val();
		 if (type=='cars') {
		 	var cars = ['BMW','KIA','TATA','Rang-Rover'];
		 	var values = '';
		 	for (var j=0;j <=cars.length;j++) {
		 		 values += '<option value="'+cars[j]+'">'+cars[j]+'</option>';
		 	}
		 	$('#valuetype').html(values);
		 }
		 else{
		 	var animal = ['Elephant','Monkey','Bull','cow'];
		 	for(var i=0;i <=animal.length;i++){
		 		// document.write(animal[i]);
		 		values += '<option value="'+animal[i]+'">'+animal[i]+'</option>';
		 	}
		 		$('#valuetype').html(values);
		 }
	}
</script>
</html>
