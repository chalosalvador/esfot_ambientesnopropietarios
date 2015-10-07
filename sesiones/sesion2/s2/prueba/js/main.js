$(document).ready(function() {
	$('#btn').on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: 'rpc.php',
			type: 'POST',
			// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: {nombre: 'Edwin'},
		})
		.done(function(msg) {
			$('#saludo').html('<p>' + msg + '</p>');
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
		/* Act on the event */
	});
});