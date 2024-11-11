<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<title> Factora.net </title>
		<meta name="description" content="">
		<meta name="author" content="by Bud Spencer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css/bootstrap.min.css') !!}">
		<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css/smartadmin-production-plugins.min.css') !!}">
		<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css/smartadmin-production.min.css') !!}">
		<link rel="shortcut icon" href="{!! asset('img/favicon/favicon.ico') !!}" type="image/x-icon">
		<link rel="icon" href="{!! asset('img/favicon/favicon.ico') !!}" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
	</head>

	<body class="no-menu">
		<header id="header">
			<div id="logo-group">
				<span id="logo"> <img src="images/logo.png" alt="SmartAdmin"> </span>
			</div>
		</header>
		<div id="main" role="main">
			<div id="content">
				<section id="widget-grid" class="">
				</section>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content" id="payment_promise">
						</div>
					</div>
				</div>
			</div>
			<div id="content">
				<section id="widget-grid" class="">
					<div class="row">
						<article class="col-md-12 col-lg-1"></article>
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
							<!--<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">-->
							<div class="jarviswidget" id="wid-id-1" style="border-top: none; border-left: none">
								<div style="border-top: 1px solid #CCC; border-left: 1px solid #CCC; border-width: 1px 1px 1px 1px">
									<div class="widget-body">
										<fieldset>
											<legend style="padding-top: 0px"><h1 style="color:#29a22d; font-weight: bold">CONSULTA TU DEUDA</h1></legend>
										</fieldset>
										<form id="form_consulta_deuda" class="form-horizontal">
											{{csrf_field()}}
											<fieldset>
												<div class="form-group">
													<label class="control-label col-md-1" style="padding-top: 10px;color: #29a22d; font-weight: bold;" for="appendprepend">N° de Dni</label>
													<div class="col-md-2">
														<div class="row">
															<div class="col-md-12">
																<div class="icon-addon addon-md">
							                    <input id="txtDni" name="txtDni" type="text" placeholder="Dni" class="form-control" value="">
							                    <label style="color:#29a22d" for="dni" class="fa fa-list-alt" rel="tooltip" title="" data-original-title="Ingrese el numero del Dni"></label>
								                </div>
															</div>
														</div>
													</div>
													<label class="control-label col-md-1" style="padding-top: 10px; text-align: left;color: #29a22d; font-weight: bold;" for="appendprepend">N° Movil</label>
													<div class="col-md-2">
														<div class="row">
															<div class="col-md-12">
																<div class="icon-addon addon-md">
							                    <input type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono" class="form-control">
							                    <label  style="color:#29a22d" for="telefono" class="fa fa-phone" rel="tooltip" title="" data-original-title="Ingrese un numero telefonico"></label>
								                </div>
															</div>
														</div>
													</div>
													<label class="control-label col-md-1" style="padding-top: 10px;color: #29a22d; font-weight: bold;" for="appendprepend">Email</label>
													<div class="col-md-5">
														<div class="row">
															<div class="col-md-12">
																<div class="icon-addon addon-md">
							                    <input type="text" id="txtEmail" name="txtEmail" placeholder="Email" class="form-control">
							                    <label  style="color:#29a22d" for="email" class="fa fa-envelope" rel="tooltip" title="" data-original-title="Ingrese una direccion Email"></label>
								                </div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<div class="form-group">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-12">
															</div>
														</div>
													</div>
													<label class="control-label col-md-1" style="padding-top: 10px;color: #29a22d; font-weight: bold;" for="appendbutton">Captcha</label>
													<div class="col-md-5" align="right">
														<div class="row" align="right">
															<div class="col-sm-12" align="right">
																<div class="input-group" align="right">
																	<input class="form-control" id="appendbutton" name="captcha" type="text">
																	<div class="input-group-btn" style="text-align: left;">
																		<div class="captcha">
																			<span id="id_captcha" style="border-color:#29a22d">{!! captcha_img() !!}</span>
																			<button type="button" class="btn btn-success btn-refresh" style="background-color: #29a22d; border-color: #29a22d"><i class="fa fa-refresh"></i></button>
																		</div>
																	</div>
																	<div class="input-group-btn" style="text-align: left; padding-left: 10px">
																		<button id="btnConsultar" type="button" class="btn btn-warning" style="margin-left: 10px">
																			<i class="fa fa-search"></i> Consultar Deudas
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
										</form>
										<form id="checkout-form" class="form-horizontal" novalidate="novalidate">
											<fieldset>
												<div class="jarviswidget" role="no-menu"  id="wid-id-0" data-widget-editbutton="false">
													<header style="background-color: #29a22d; border-color: #29a22d; color: #ffffff">
														<span class="widget-icon"> <i class="fa fa-reorder"></i> </span>
														<h2 style="font-weight: bold">LISTADO DE DEUDAS </h2>
													</header>
													<div style="padding-top: 7px">
														<div id="id_results_table" class="widget-body no-padding">
														</div>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</article>
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-1"></article>
					</div>
				</section>
			</div>
		</div>

		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');

				document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><\/script>');
				document.write('<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><\/script>');
				document.write('<script src="js/bootstrap/bootstrap.min.js"><\/script>');

				// Date Range Picker
			$("#from").datepicker({
					defaultDate: "+1w",
			    changeMonth: true,
			    numberOfMonths: 2,
			    minDate: '+1d',
					maxDate: '+15d',
					dateFormat: 'dd/mm/yy', 
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onClose: function (selectedDate) {
			        //$("#to").datepicker("option", "maxDate", selectedDate);
			    }
		
			});
			}
		</script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
		<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
		<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
		<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
		<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
		<script>

			// Date Range Picker
			$("#from").datepicker({
					defaultDate: "+1w",
			    changeMonth: true,
			    numberOfMonths: 2,
			    minDate: '+1d',
					maxDate: '+15d',
					dateFormat: 'dd/mm/yy', 
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onClose: function (selectedDate) {
			       //$("#to").datepicker("option", "maxDate", selectedDate);
			    }
		
			});

		/* Carga la ventana de compromiso de pago */
		function load_payment_promise(dni, id_deuda){
			var p_dni= dni;
			var p_id = id_deuda;
			$.ajax({         
         type: "get",                 
         url: 'compromiso-pago/'+p_dni+"/"+id_deuda,
         success: function(data)             
         {
           console.log(data);
           $('#payment_promise').empty().html(data);
         }
     });
		}

		$(document).ready(function() {

			// Date Range Picker
			$("#from").datepicker({
					defaultDate: "+1w",
			    changeMonth: true,
			    numberOfMonths: 2,
			    minDate: '+1d',
					maxDate: '+15d',
					dateFormat: 'dd/mm/yy', 
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onClose: function (selectedDate) {
			        //$("#to").datepicker("option", "maxDate", selectedDate);
			    }
		
			});

			$('#btnConsultar').click(function(){
				var dni = $.trim($('#txtDni').val());
			  var telefono = $.trim($('#txtTelefono').val());
			  var email = $.trim($('#txtEmail').val());

			  /*if (dni.length < 8) {
			  	alert("Dni incorrecto");
			  	exit();
			  }

			  if (telefono.length < 9) {
			  	alert("Telefono incorrecto");
			  	exit();
			  }

			  if (valida_email(email) == false ) {
			  	alert("Email incorrecto");
			  	exit();
			  }*/

	      $.ajax({                        
	         type: "POST",                 
	         //url: '{{url('consulta-deuda')}}',
		url: '/consulta-deuda',
	         data: $("#form_consulta_deuda").serialize(), 
	         success: function(data)             
	         {
	           console.log(data);
	           $("#refresh_captcha").click();
	           $('#id_results_table').empty().html(data);
	           paginacion();
	         }
		     });
		    });

		    $(".btn-refresh").click(function(){
					$.ajax({
						type:'GET',
						url:'/refresh_captcha',
						success:function(data){
							$(".captcha span").html(data.captcha);
						}
					})
				})
		
		/* Valida el formato de la direccion de correo */	
		function valida_email(email){
			return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email); 
		}

		//Listamos algunos datos iniciales al cargar la web
		$.ajax({
			type:'get',
			url:'{{url('listall')}}',
			success: function(data){
				$('#id_results_table').empty().html(data);
				paginacion();
			}
		});

		//pageSetUp();
			
		function paginacion(){
			var responsiveHelper_dt_basic = undefined;
			var responsiveHelper_datatable_fixed_column = undefined;
			var responsiveHelper_datatable_col_reorder = undefined;
			var responsiveHelper_datatable_tabletools = undefined;
			var breakpointDefinition = {
				tablet : 1024,
				phone : 480
			};

			$('#dt_basic').dataTable({
				"sDom": "t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
		        "oLanguage": {
				    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					if (!responsiveHelper_dt_basic) {
						responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_dt_basic.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_dt_basic.respond();
				}
			});
		}
	})
	</script>

	</body>

</html>
