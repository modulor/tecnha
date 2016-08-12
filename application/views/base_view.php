<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>TECNHA - Professional Glass Solution</title>	
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />    
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/ct-navbar.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>    
</head>
<body>	
	<div id="navbar-full">
	    <div id="navbar">	       
	        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">          
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand navbar-brand-logo" href="<?php echo base_url() ?>">							
							<img src="<?php echo base_url('assets/images/logo-header.png') ?>" width="200" height="48">
						</a>
					</div>				
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="<?php echo base_url() ?>">
							    	<i class="pe-7s-home"></i>
							    	<p>Inicio</p>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>">
							    	<i class="pe-7s-user"></i>
							    	<p>Qui&eacute;nes somos</p>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>">
							    	<i class="pe-7s-box2"></i>
							    	<p>Productos</p>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>">
							    	<i class="pe-7s-mail"></i>
							    	<p>Contacto</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	    </div>
	</div>

	<div class="container">
		<div class="row margin-bottom-extra">
			<div class="col-md-8">
				<div class="container-gray touch-glass">
					<div class="row banner-touch-glass">
						<div class="col-md-12">
							<img src="<?php echo base_url('assets/images/banner-touch-glass.png') ?>" alt="the touch of glass">
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="row-intro-text">
								<strong>MAKE THE GLASS HAPPEN<br>POR FIN EN MONTERREY.</strong>
							</div>

							<p>Una gama de posibilidades en vidrio. Soluciones funcionales y un servicio a tu medida, con garant&iacute;as integrales, &uacute;nicas en el mercado.</p>

							<p>Ven a descubrir la experiencia Tecnha y dale un toque de vidrio a tu residencia.</p>

							<p>Todas las garant&iacute;as. Todos los mantenimientos.</p>
						</div>
						<div class="col-md-7">
							<img src="<?php echo base_url('assets/images/banner-cascada.png') ?>" alt="cascada" class="img-responsive" align="right">
						</div>
					</div>
				</div>				
			</div>
			<div class="col-md-4">
				<div class="container-gray container-contact-form">
					<div class="row">
						<div class="col-xs-5">
							<p class="contact-title">CONTACTO</p>
						</div>
						<div class="col-xs-7">
							<div class="blue-line"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form class="form-horizontal form-contact">
								<div class="form-group">
								    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
								    <div class="col-sm-10">
							      		<input type="text" class="form-control" name="nombre">
								    </div>
							  	</div>
							  	<div class="form-group">
								    <label for="telefono" class="col-sm-2 control-label">Tel&eacute;fono:</label>
								    <div class="col-sm-10">
							      		<input type="text" class="form-control" name="telefono">
								    </div>
							  	</div>
							  	<div class="form-group">
								    <label for="direccion" class="col-sm-2 control-label">Direcci&oacute;n:</label>
								    <div class="col-sm-10">
							      		<textarea name="direccion" class="form-control" rows="3"></textarea>
								    </div>
							  	</div>
							  	<label class="margin-bottom-extra">Producto que deseas cotizar</label>
							  	<div class="row margin-bottom-extra">
							  		<div class="col-sm-6">
							  			<input type="checkbox" class="form-control" name="producto" value="Canceles"> Canceles
							  		</div>
							  		<div class="col-sm-6">
							  			<input type="checkbox" class="form-control" name="producto" value="Barandales"> Barandales
							  		</div>
							  	</div>
								<div class="row margin-bottom-extra">
							  		<div class="col-sm-6">
							  			<input type="checkbox" class="form-control" name="producto" value="Puertas"> Puertas
							  		</div>
							  		<div class="col-sm-6">
							  			<input type="checkbox" class="form-control" name="producto" value="Espejos"> Espejos
							  		</div>
							  	</div>
							  	<div class="row margin-bottom-extra">
							  		<div class="col-sm-12 text-center">
							  			<input type="checkbox" class="form-control" name="producto" value="Accesorios"> <label class="accesorios">Accesorios</label>
							  		</div>
							  	</div>
							  	<div class="row margin-bottom-extra">
							  		<div class="col-sm-12">
							  			<label>Te gustar&iacute;a una cita para toma de medidas:</label>
							  			<input type="text" name="cita_medidas" class="form-control">
							  		</div>
							  	</div>
							  	<div class="text-center">
							  		<div class="divBtnSubmit">
							  			<button type="button" class="btnSubmit">Enviar</button>	
							  		</div>							  		
							  	</div>
							</form>
							<div class="row">
								<div class="col-sm-12 text-center">
									<p><strong>Cotiza con nosotros &iexcl;Ll&aacute;manos!</strong></p>
								</div>
							</div>
							<div class="row color-ta footer-contact">
								<div class="col-sm-6 text-center">
									<a class="contact-facebook" href="https://www.facebook.com/tecnha" target="_blank"><i class="fa fa-facebook-official"></i> Tecnha</a>
								</div>
								<div class="col-sm-6 text-center">
									<i class="fa fa-phone"></i> <strong>2136-5555</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin-bottom-extra">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">					
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo base_url('assets/images/slider/one.jpg') ?>" alt="one">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="<?php echo base_url('assets/images/slider/two.jpg') ?>" alt="two">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="<?php echo base_url('assets/images/slider/three.jpg') ?>" alt="three">
							<div class="carousel-caption"></div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>						
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row margin-bottom-extra">
			<div class="col-sm-12">
				<div class="container-gray">
					<div class="row">
						<div class="col-sm-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.8660627089403!2d-100.41318261360422!3d25.74194250084502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662973e9d464199%3A0xe876ac225d0985cc!2zUcO6IFBsYXph!5e0!3m2!1ses!2smx!4v1471014527478" width="100%" height="350" frameborder="0" style="border:0; padding: 0; margin: 0;" allowfullscreen></iframe></div>
						<div class="col-sm-6">
							<!-- contacto -->
							<div class="container-gray container-contact-form-footer">
								<div class="row">
									<div class="col-xs-5">
										<p class="contact-title">CONTACTO</p>
									</div>
									<div class="col-xs-7">
										<div class="blue-line"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal form-contact form-contact-footer">
											<div class="form-group">
											    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
											    <div class="col-sm-10">
										      		<input type="text" class="form-control" name="nombre">
											    </div>
										  	</div>
										  	<div class="form-group">
											    <label for="telefono" class="col-sm-2 control-label">Tel&eacute;fono:</label>
											    <div class="col-sm-10">
										      		<input type="text" class="form-control" name="telefono">
											    </div>
										  	</div>
										  	<div class="form-group">
											    <label for="direccion" class="col-sm-2 control-label">Direcci&oacute;n:</label>
											    <div class="col-sm-10">
										      		<textarea name="direccion" class="form-control" rows="3"></textarea>
											    </div>
										  	</div>
										  	<label class="margin-bottom-extra">Producto que deseas cotizar</label>
										  	<div class="row margin-bottom-extra">
										  		<div class="col-sm-12 text-center">
										  			<input type="checkbox" class="form-control" name="producto" value="Canceles"> Canceles &nbsp;&nbsp;&nbsp;
										  			<input type="checkbox" class="form-control" name="producto" value="Barandales"> Barandales &nbsp;&nbsp;&nbsp;
													<input type="checkbox" class="form-control" name="producto" value="Puertas"> Puertas &nbsp;&nbsp;&nbsp;
													<input type="checkbox" class="form-control" name="producto" value="Espejos"> Espejos &nbsp;&nbsp;&nbsp;
													<input type="checkbox" class="form-control" name="producto" value="Accesorios"> <label class="accesorios">Accesorios</label> 
										  		</div>										  		
										  	</div>											
										  	<div class="row">
										  		<div class="col-sm-12 text-center">
											  		<div class="divBtnSubmit">
											  			<button type="button" class="btnSubmit">Enviar</button>	
											  		</div>
										  		</div>
										  	</div>
										</form>										
									</div>
								</div>
							</div>
							<!-- contacto end -->
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>	

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-footer">Plaza QU (junto al Super Roma) Local 3 / Planta Alta Av. Paseo de los Leones 2001 en Cumbres Madeira. Mty., N.L.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->



	<script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>	
	<script src="<?php echo base_url('assets/js/ct-navbar.js') ?>"></script>
</body>
</html>