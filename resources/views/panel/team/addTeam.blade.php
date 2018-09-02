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
              <div class="card-header card-header-divider">Adicionar Turma<span class="card-subtitle"></span></div>
              <div class="card-body pl-sm-5">

                @if( isset( $adminAccount ) )
                <form method="post" action="{{route('admin.account.update', $adminAccount->id )}}">
                {!! method_field('PUT') !!}
                @else
                <form method="post" action="{{route('admin.account.create')}}">
                @endif

                  {{ csrf_field() }}
                  <input type="hidden" name="label"/>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nome da Turma</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" name="name" type="text" value="{{$adminAccount->name or old('name')}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Alunos</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select class="form-control" multiple="">
                      	@for($i=0;$i<5;$i++)
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        @endfor
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Aulas</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="date" date />
                    </div>
                  </div>

                  <div class="col-6" style="margin: 0 auto;">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" add-lesson type="button">Adicionar</button>
                    </p>
                  </div>

                  <style type="text/css">
                  	#content-lessons-day {
                  		overflow: hidden;
                  	}

                  	div[lesson] {
                  		overflow: hidden;
                  		display: block;
                  		padding-bottom: 10px;
                  	}
                  </style>

                  <div class="col-6" style="margin: 0 auto;">
		               <div id="content-lessons-day"></div>
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

      $(document).ready(function(){


      	$('button[add-lesson]').on('click', function(){

      		var val = $('input[type="date"][date]').val();
      		var count = 0;
      		if( val != '' ){
      			$('input[type="date"][date]').val('');
      			count++;
      			$('#content-lessons-day').prepend('<div lesson="' + count + '"><input type="text" name="day_lesson[]" disabled="true" value="' + val + '"/><span delete_lession="' + count + '">Excluir</span></div>');
      		}

      	});

      	$('body').delegate('span[delete_lession]', 'click', function(){
      		var id = $(this).attr('delete_lession');
      		$('div[lesson="' + id + '"]').remove();
      	});
      })
      
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      });
      
    </script>

@endpush