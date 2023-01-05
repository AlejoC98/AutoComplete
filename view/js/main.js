$(".info input").on('change', function(event) {
	var valorCampo = $(this).val();
	var condicion = $(this).attr('name');

	var jasom_params = {
		valor:valorCampo,
		condicion:condicion
	}

	$.ajax({
		type: "POST",
		url: "view/php/busca_datos.php",
		data: jasom_params,
		success:function(response) {
			$(".mensajes").fadeOut('fast');
			switch (response) {
				case "Error":
					$(".mensajes").css('display', 'block');
					$(".mensajes p").text('No hay coincidencias');
					$(".info input").val("");
					break;
				default:
					var data = JSON.parse(response);
					$.each(data, function(index, value) {
						$("input[name="+index+"]").val(value);						
					});
					break;
			}
		}
	});
	$("input[name="+condicion+"]").focus();
});