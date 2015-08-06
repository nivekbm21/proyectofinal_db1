<?php 
include('header.php');
?>


		<div id="content_wrapper">

		<div ="Inicio" class="content">

				<div id ="Slider">

					<ul id="galeria">
						<li><img src="img/sliderInicio/carritocompras1.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/carritocompras2.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/carritocompras3.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/marcas.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/promociones1.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/promociones2.jpg" border="0" alt="Error al cargar imagen" /></li>
						<li><img src="img/sliderInicio/producto1.jpg" border="0" alt="Error al cargar imagen" /></li>
						
						
						</ul>

						<script type="text/javascript">

						/** javascript slide-show **/
						var cons = 1;
						function slide_show(){
						var elemento = document.getElementById('galeria').getElementsByTagName('li');	
							for(var n=cons; n <= elemento.length; n++){		
							elemento[n].className = 'selected';
								for(var i = 0; i<elemento.length; i++){
									if(i!=cons){
									elemento[i].className = 'noselected';
									}		
								}
						cons++;							
						break;
							}	
						if(cons >= elemento.length){
							cons = 0;			
						}
								return false;
								}
							window.onload = function(){
							setInterval(slide_show, 5000);
						}

					</script>
				</div>

		</div>



<?php 
include('footer.php');
 ?>

