@extends('panel/template/templateLogin')

@section('content')

<div class="be-wrapper be-login">
	<div class="be-content">
	  <div class="main-content container-fluid">
	    <div class="splash-container">
	      <div class="card card-border-color card-border-color-primary">
	        <div class="card-header"><img class="logo-img" src="//foxythemes.net/preview/products/beagle/assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Login Administrativo</span></div>
	        <div class="card-body">
	          <form>
	            <div class="form-group">
	              <input class="form-control" id="username" type="text" placeholder="E-mail" autocomplete="off">
	            </div>
	            <div class="form-group">
	              <input class="form-control" id="password" type="password" placeholder="Senha">
	            </div>
	            <div class="form-group login-submit">
	            	<button class="btn btn-primary btn-xl" href="index.html" data-dismiss="modal">Sign me in</button>
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@endsection