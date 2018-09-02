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
              <div class="card-header card-header-divider">Adicionar Curso<span class="card-subtitle"></span></div>
              <div class="card-body pl-sm-5">
                
                @if( isset( $course ) )
                <form method="post" action="{{route('panel.course.update', $course->id )}}">
                {!! method_field('PUT') !!}
                @else
                <form method="post" action="{{route('panel.course.create')}}">
                @endif

                  {{ csrf_field() }}

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Título do Curso</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="text" name="title" value="{{$course->title or old('title')}}" placeholder="Digite o Título aqui">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Descrição</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="text" name="description_text" value="{{$course->description_text or old('description_text')}}" placeholder="Digite a descrição aqui">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Descrição HTML</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea class="form-control" name="description_html" placeholder="Digite a descrição aqui">{{$course->description_html or old('description_html')}}</textarea>
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

@push('script')

    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/js/app.js" type="text/javascript"></script>
    <script src="http://foxythemes.net/preview/products/maisonnette/assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
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