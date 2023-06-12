<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#myDropdown {
  margin-bottom: 10px;
}

#relatedOptionsContainer {
  padding: 10px;
  background-color: #f0f0f0;
}
	</style>
</head>
<body>

<select id="myDropdown" onchange="showOptions()">
  <option value="">Select an option</option>
  <option value="car">CAR</option>
  <option value="frutes">Frutes</option>
</select>


<select id="relatedOptionsContainer"></select>


</body>
</html>
<script>
	function showOptions() {
  var dropdown = document.getElementById("myDropdown");
  var selectedValue = dropdown.value;
  var relatedOptionsContainer = document.getElementById("relatedOptionsContainer");

  relatedOptionsContainer.innerHTML = "";

  if (selectedValue === "car") {
    relatedOptionsContainer.innerHTML = "Related options for Option 1";
  } else if (selectedValue === "frutes") {
    relatedOptionsContainer.innerHTML = "Related options for Option 2";
  }
}
</script>