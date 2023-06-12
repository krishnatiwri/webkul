<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class=" col-md-3">
				<label >Select</label>
               <select onchange="showdata()" id="type" class="form-control">
               <option value="animal">Animal</option>
               <option value="cars">Car</option>
            </select>	
			</div>

			<div class=" col-md-3" class="form-control">
				<select id="valuetype"></select>
			</div>
		</div>
	</div>
</body>
<script>
	function showdata() {
	 // alert();
         var type = $('#type').val();
		if (type=='animal') {
			var animal = ['Elephant','Monkey','Bull','cow'];
			var value ='';
			for (var i = 0;i<=animal.length;i++) {
				value += '<option value="'+animal[i]+'">'+animal[i]+'</option>';
			}
			$('#valuetype').html(value);

		}else{

			var cars = ['BMW','KIA','MARshedies','RangRover'];
			var value ='';
			for (var j = 0;j<=cars.length;i++) {
				value += '<option value="'+cars[j]+'">'+cars[j]+'</option>';
			}
			  $('#valuetype').html(value);
		}
	}
	
</script>
</html>
