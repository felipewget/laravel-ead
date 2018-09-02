@extends('panel/template/templatePanel')

@section('content')

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default card-table">
              <div class="card-header">Cursos
              </div>
              <div class="card-body">
                <div class="table-responsive noSwipe">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:20%;">Nome do Curso</th>
                        <th style="width:17%;">Alunos</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse($courses as $course )
                      <tr class="online">
                        <td class="user-avatar cell-detail">
                            <span>{{$course->title}}</span>
                            <span class="cell-detail-description">Criado em: {{$course->created_at}}</span>
                        </td>
                        <td class="cell-detail">
                            <span>15</span>
                            <span class="cell-detail-description">Ver Alunos</span>
                        </td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Ações <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="{{route('panel.module.index', $course->id)}}">Gerenciar Módulos</a>
                                <a class="dropdown-item" href="{{route('panel.course.edit', $course->id)}}">Editar Curso</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('panel.course.destroy', $course->id)}}" method="post">
                                  {!! method_field('DELETE') !!}
                                  {{ csrf_field() }}
                                  <button class="dropdown-item" href="{{route('panel.course.destroy', $course->id)}}">Excluir Curso</button>
                                </form>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @empty
                      <div>Sem Registros</div>
                      @endforelse
                      
                    </tbody>
                  </table>
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