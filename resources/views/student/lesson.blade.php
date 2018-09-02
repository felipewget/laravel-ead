<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/student/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/student/classroom.css')}}">

    <title>Hello, world!</title>
  </head>
  <body>

  	<nav navbar>
      <button>Voltar</button>
  		<div logo-header>Curso nome bla bla bal </div>
  	</nav>
  	<div space-header></div>

  	<div container-vertical-menu>

  		<div title>Conteúdo do Curso</div>

  		<?php for( $i=0; $i<3;$i++){ ?>
  		<div module>
  			<div title-module>
  				<p>Módulo 1</p>
  				<span>0/15</span>
  				<div text-title-module>Introdução ao PHP</div>
  			</div>

  			<div class-module active>
  				<div class-module-title>1. Como configurar meu servidor? adicionando https</div>
  				<div check class="icon-lock2"></div>
  			</div>
  			<?php for( $i2=0; $i2<2;$i2++){ ?>
  			<div class-module>
  				<div class-module-title>1. Como configurar meu servidor? adicionando https</div>
  				<div check class="icon-lock2"></div>
  			</div>
  			<?php } ?>

  		</div>
  		<?php } ?>

  	</div>

  	<div container-content>

  		<div block-class>
	  		<div title>asdipasdkpodpoask</div>
	  		<iframe width="100%" height="500" src="https://www.youtube.com/embed/8UlJz3eIR2g" frameborder="0" allowfullscreen></iframe>
  		</div>

  		<div bottom-bar>
  			<button comment>Comentários & Perguntas</button>
  			<button next>Próxima Aula</button>
  		</div>

  	</div>

    <script src="{{ asset('vendor/jquery.js')}}"></script>
    <script src="{{ asset('js/student/classroom.js')}}"></script>

  </body>
</html>