<?php
	include("config.php");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Combo</title>
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery.jCombo.min.js"></script>
</head>
<body>
<h3>jCombo Example...</h3>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

  <table>
    <tr>
      <td>Country</td>
      <td><select name="country" id="country">
        </select></td>
    </tr>
    <tr>
      <td>City</td>
      <td><select name="city" id="city">
        </select></td>
    </tr>
    <tr>
      <td>Zone</td>
      <td><select name="zone" id="zone">
        </select></td>
    </tr>
  </table>
  <?php
  
	// calculate first values to populate data (Victoria Park, Calgary, Canada) id = 13
	/*
	$query = "	SELECT zones.id_zone, cities.id_city, countries.id_country FROM zones 
				INNER JOIN cities ON zones.id_city = cities.id_city 
				INNER JOIN countries ON countries.id_country = cities.id_country
				WHERE zones.id_zone = '13'";
	$result = mysql_query($query);
	if($result && mysql_num_rows($result)>0) {
		$row = mysql_fetch_assoc($result);
		$country_id = intval($row['id_country']);	
		$city_id = intval($row['id_city']);	
		$zone_id = intval($row['id_zone']);	
	}
	
	*/
?>
  <script type="text/javascript">
$(function() {
	$("#country").jCombo("services/getCountries.php", { selected_value : '<?php print(27); ?>' } );
    $("#city").jCombo("services/getCities.php?id=", { 
					parent: "#country", 
					parent_value: '<?php print(27); ?>', 
					selected_value: '<?php print($city_id); ?>' 
				});		
    $("#zone").jCombo("services/getZones.php?id=", { 
					parent: "#city", 
					parent_value: '<?php print($city_id); ?>', 
					selected_value: '<?php print($zone_id); ?>' 
				});

	
});
</script> 
</body>
</html>
