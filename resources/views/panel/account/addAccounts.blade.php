@extends('panel/template/templatePanel')

@section('content')


  <div class="main-content container">

        @if( isset($errors) && count($errors) > 0 )

          <div>
            @foreach( $errors->all() as $error )
              <div>{{$error}}</div>
            @endforeach
          </div>

        @endif

        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header card-header-divider">Adicionar Conta<span class="card-subtitle"></span></div>
              <div class="card-body pl-sm-5">

                @if( isset( $adminAccount ) )
                <form method="post" action="{{route('admin.account.update', $adminAccount->id )}}">
                {!! method_field('PUT') !!}
                @else
                <form method="post" action="{{route('admin.account.create')}}">
                @endif

                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nome</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" name="name" type="text" value="{{$adminAccount->name or old('name')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">E-mail</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" name="email" type="text" value="{{$adminAccount->email or old('email')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Senha</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" name="password" type="password" value="{{$adminAccount->password or ''}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Rótulo</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" name="label" type="text" value="{{$adminAccount->label or old('label')}}">
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" type="submit">Adicionar</button>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
      

@endsection

@push('style')
	
	<link rel="stylesheet" type="text/css" href="http://foxythemes.net/preview/products/maisonnette/assets/lib/theme-switcher/theme-switcher.min.css">

@endpush

@push('script')

    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/js/app.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>

    <script src="//foxythemes.net/preview/products/maisonnette/assets/lib/datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
      });
      
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      });
      
    </script>

@endpush