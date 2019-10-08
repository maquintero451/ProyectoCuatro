$(document).ready(function () {
	$('#btnEnviar').click(function(event){

		$.ajax({

			url:'index.php',
			type:'POST',
			dataType:'JSON',
			data: $('#form').serialize()
			

		})
		

	})
})