<?php
	include 'conxao.php';
?>

<!DOCTYPE HTML>

<html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Uni++ Cadastro de Salas</title>
        <meta name="description" content="Cadastro de Salas Uni++">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">
        

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/form.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		</head>
    <body data-spy="scroll" data-target="#navmenu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--ESTILIZAÇÃO DA HOME PAGE-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- DISPLAY -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""/></a>
                                    </div>

                                    <!-- LINKS DE NAVEGAÇÃO -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="index.html">Home</a>
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>
                </div>
			</div>
        </header> <!--FIM DO CORPO DO CABEÇALHO -->


		<!--CORPO DA PÁGINA -->
		
		<!-- SESSÃO DO BANNER-->
        <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div id="chamada" class="single_slider wow fadeIn" data-wow-duration="2s">
                                    <h2>Bem vindo ao Sistema Administrativo Uni++</h2>
                                    <p >Ambiente para inserção e edição de cadastros</p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- FIM DA SESSÃO DO BANNER-->


        <form class="jotform-form" action="validacadastro.php" method="post"  accept-charset="utf-8">
		  <input type="hidden" name="formID" value="73019229284660" />
		  <div class="form-all">
			<ul class="form-section page-section">
			  <li id="cid_21" class="form-input-wide" data-type="control_head">
				<div class="form-header-group ">
				  <div class="header-text httal htvam">
					<h2 id="header_21" class="form-header" data-component="header">
					  Cadastro de Salas
					</h2>
					<div id="subHeader_21" class="form-subHeader">
					  Faça aqui um novo cadastro
					</div>
				  </div>
				</div>
			  </li>
			  
			  <li class="form-line" data-type="control_dropdown" id="id_15">
				<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Período </label>
				<div id="cid_15" class="form-input">
				  <select class="form-dropdown" id="input_15" name="periodo" style="width:150px;" data-component="dropdown">
					<option value="">  </option>
					<option value="matutino"> Matutino </option>
					<option value="noturno"> Noturno</option>
				  </select>
				</div>
			  </li>
			  <li class="form-line" data-type="control_textbox" id="id_2">
				<label class="form-label form-label-left form-label-auto" id="label_2" for="input_2"> Curso </label>
				<div id="cid_2" class="form-input">
				  <input type="text" id="input_2" name="curso" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" />
				</div>
			  </li>
			  <li class="form-line" data-type="control_textbox" id="id_4">
				<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Turma </label>
				<div id="cid_4" class="form-input">
				  <input type="text" id="input_4" name="turma" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" />
				</div>
			  </li>
			  <li class="form-line" data-type="control_dropdown" id="id_15">
				<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Semestre </label>
				<div id="cid_15" class="form-input">
				  <select class="form-dropdown" id="input_15" name="semestre" style="width:150px;" data-component="dropdown">
					<option value="">  </option>
					<option value="1"> 1 </option>
					<option value="2"> 2 </option>
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5"> 5 </option>
					<option value="6"> 6 </option>
					<option value="7"> 7 </option>
					<option value="8"> 8 </option>
					<option value="9"> 9 </option>
					<option value="10"> 10 </option>
				  </select>
				</div>
			  </li>
			  <li class="form-line" data-type="control_dropdown" id="id_20">
				<label class="form-label form-label-left form-label-auto" id="label_20" for="input_20"> Número da Sala </label>
				<div id="cid_20" class="form-input">
				  <select class="form-dropdown" id="input_20" name="numerosala" style="width:150px;" data-component="dropdown">
					<option value="">  </option>
					<option value="10"> 10 </option>
					<option value="11"> 11 </option>
					<option value="12"> 12 </option>
					<option value="13"> 13 </option>
					<option value="14"> 14 </option>
					<option value="15"> 15 </option>
					<option value="16"> 16 </option>
					<option value="17"> 17 </option>
					<option value="18"> 18 </option>
					<option value="19"> 19 </option>
					<option value="20"> 20 </option>
					<option value="21"> 21 </option>
					<option value="22"> 22 </option>
					<option value="23"> 23 </option>
					<option value="24"> 24 </option>
					<option value="25"> 25 </option>
					<option value="26"> 26 </option>
					<option value="27"> 27 </option>
					<option value="28"> 28 </option>
					<option value="29"> 29 </option>
					<option value="30"> 30 </option>
					<option value="31"> 31 </option>
					<option value="32"> 32 </option>
					<option value="33"> 33 </option>
					<option value="34"> 34 </option>
					<option value="35"> 35 </option>
					<option value="36"> 36 </option>
					<option value="37"> 37 </option>
					<option value="38"> 38 </option>
					<option value="39"> 39 </option>
					<option value="40"> 40 </option>
					<option value="41"> 41 </option>
					<option value="42"> 42 </option>
					<option value="43"> 43 </option>
					<option value="44"> 44 </option>
					<option value="45"> 45 </option>
					<option value="46"> 46 </option>
					<option value="47"> 47 </option>
					<option value="48"> 48 </option>
					<option value="49"> 49 </option>
					<option value="50"> 50 </option>
					<option value="51"> 51 </option>
					<option value="52"> 52 </option>
					<option value="53"> 53 </option>
					<option value="54"> 54 </option>
					<option value="55"> 55 </option>
					<option value="56"> 56 </option>
					<option value="57"> 57 </option>
					<option value="58"> 58 </option>
					<option value="59"> 59 </option>
				  </select>
				</div>
			  </li>
			  <li class="form-line" data-type="control_dropdown" id="id_15">
				<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Bloco </label>
				<div id="cid_15" class="form-input">
				  <select class="form-dropdown" id="input_15" name="bloco" style="width:150px;" data-component="dropdown">
					<option value="">  </option>
					<option value="A"> Bloco A </option>
					<option value="B"> Bloco B </option>
					<option value="C"> Bloco C </option>
					<option value="D"> Bloco D </option>
					<option value="E"> Bloco E </option>
					<option value="F"> Bloco F </option>
					<option value="G"> Bloco G </option>
					<option value="H"> Bloco H </option>
				  </select>
				</div>
			  </li>
			  <li class="form-line" data-type="control_dropdown" id="id_15">
				<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Andar </label>
				<div id="cid_15" class="form-input">
				  <select class="form-dropdown" id="input_15" name="andar" style="width:150px;" data-component="dropdown">
					<option value="">  </option>
					<option value="2a"> 2º Andar </option>
					<option value="1a"> 1º Andar </option>
					<option value="t"> Térreo </option>
					<option value="1s"> 1º Subsolo </option>
					<option value="2s"> 2º Subsolo </option>
				  </select>
				</div>
			  </li>
			</ul>
			<div id="botoes" align="center">
			<input type="hidden" name="acao" value="enviado"/>
			<p><input name="Novo Cadastro" type="submit" class="botaoat" id="atual" value="Cadastrar"></p>
			<p><input name="Voltar ao Menu" type="button" class="botaoat" id="atual" value="Voltar ao Menu" onClick="Nova2()"></p>
			<p><input name="Voltar ao Site" type="button" class="botaoat" id="atual" value="Voltar ao Site" onClick="Nova3()"></p>
			</div>
		  </div>
		  
		  <?php
		  
		  
		  ?>
		  
			  <script type="text/javascript">
				function Nova1()
				{
				location.href=" index.html"
				}
			</script>
			<script type="text/javascript">
				function Nova2()
				{
				location.href=" opcoesadm.php"
				}
			</script>
			<script type="text/javascript">
				function Nova3()
				{
				location.href=" index.html"
				}
			</script>
		  </div>
		  
		  <script>
		  JotForm.showJotFormPowered = "new_footer";
		  </script>
		  <input type="hidden" id="simple_spc" name="simple_spc" value="73019229284660" />
		  <script type="text/javascript">
		  document.getElementById("si" + "mple" + "_spc").value = "73019229284660-73019229284660";
		  </script>
		</form>
		<!--FIM DO CORPO DA PÁGINA -->
		
		<!--RODAPÉ -->

        <section id="footer" class="footer sections">
            <div class="container">
                <div class="row">
                    <div class="main_footer wow fadeInDown" data-wow-duration="2s">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer_logo">
                                <a href=""><img src="assets/images/logo.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="footer_bottom_area">
                        <div class="col-sm-9 col-xs-12">
                            <div class="fo_bottom_right">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="1s">
                                            <p>Uni++ é um Projeto dos alunos Christian Giorge, Guilherme de Castro, Igor Marques, Luis Toledo e Valdir Nabeiro, para fins avaliativos, do 2º Semestre do Curso Superior Tecnológico em Análise e Desenvolvimento de Sistemas, do Campus UNIP Sorocaba.</p>
                                           
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-3 col-xs-12">
                            <div class="fo_bottom_socail wow fadeIn" data-wow-duration="2.3s">
                                <a href="#"><i class="fa fa-phone"> 015 981767332</i></a>
                                <a href=""><i class="fa fa-envelope"></i> unimaismais@gmail.com</a>
                                <p>Contate-nos</p>
                            </div>
                        </div> 
                    </div>
                </div>
			</div>
        </section><!-- FIM DA SESSÃO DO RODAPÉ -->
		
		<footer id="coppyrights" class="coppyrights">
			<div class="container-fluid">
			<div class="row">
				<div class="coppyright">
					<p class="wow fadeInUp" data-wow-duration="2s">&copy Uni++ 2017.</p>
				</div>
			</div>
			</div>
		</footer>

		<!-- ROLAGEM AO TOPO DA PÁGINA -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

		<!-- SESSÃO DE SCRIPTS -->
		
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>