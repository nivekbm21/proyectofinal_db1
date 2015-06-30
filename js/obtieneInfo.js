var app = {
	init : function(){
		app.jsonData();
	},
	jsonData : function() {
		$.getJSON('./jsonUsuarios.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					$('#usuarios').append('<div class="infoUsuario" data-filtro="'+data[i].id+'"><p> Nombre: ' 
						+ data[i].nombre +'</p><p> Apellido: ' 
						+ data[i].apellido +'</p><p> Usuario: ' 
						+ data[i].usuario +'</p><p><a href="?userId=' 
						+ data[i].id +'">Ver Ususario</a></p></div>').fadeIn("slow");
				};
			} else{
				$('#usuarios').append('<div class="info"><p>No Hay Registros</p></div>');
			};
			
		});

	}
};

$(document).ready(
	function () {
		app.init();
	}
);