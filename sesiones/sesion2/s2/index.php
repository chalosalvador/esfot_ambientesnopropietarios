<?php
function generar_tabla(){

	$i = 0;
	echo '<table width="50%">';
	while($i < 100){
		echo '<tr>';
		for($j=0; $j < 10; $j++){
			$es_primo = es_primo($i);
			echo '<td' . ($es_primo ? ' class="primo"' : '') . '>';
			echo $i++;
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}

function es_primo($num){
	if($num < 2){
		return false;
	} elseif($num == 2) {
		return true;
	} else{
		$es_primo = true;
		for($i = 2; $i <= $num/2; $i ++){
			if($num % $i == 0){
				$es_primo = false;
				break;
			}
		}
		return $es_primo;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Prueba RPC</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div>
		<?php echo "Hoy es " . date("H:i:s") . "."; ?>
	</div>

	<button id="btn">LLamar RPC</button>

	<div id="test"></div>

	<div id="tabla">
		<?php generar_tabla(); ?>
	</div>


	<script type="text/javascript">
	  document.write("Hoy es " + Date() );
	  $('#btn').on('click', function(event) {
	  	event.preventDefault();
	  	$.ajax({
		  	url: 'rpc.php',
		  	 type: 'POST',
		  	// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		  	data: {name: 'Chalo'},
		  })
		  .done(function(msg) {
		  	$('#test').html(msg);
		  	console.log("success");
		  })
		  .fail(function() {
		  	console.log("error");
		  })
		  .always(function() {
		  	console.log("complete");
		  });
		 	
	  });
	   
	</script>

</body>
</html>