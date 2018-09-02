@extends('panel/template/templatePanel')

@section('content')

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default card-table">
              <div class="card-header">{{$course->title or ''}} - Módulos
              </div>
              <div class="card-body">
                <div class="table-responsive noSwipe">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      	<th style="width:20%;">Ordem</th>
                        <th style="width:20%;">Módulo</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse($modules as $module )
                      <tr class="online">
                        <td class="user-avatar cell-detail user-info">
                            <span>{{$module->order}}</span>
                            <span class="cell-detail-description">Ordenação</span>
                        </td>
                        <td class="cell-detail">
                            <span>{{$module->title}}</span>
                        </td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Ações <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">

                                <a class="dropdown-item" href="{{route('panel.lesson.index', ['idCourse' => $course->id , 'idModule' => $module->id])}}">Gerenciar Aulas</a>

                                <a class="dropdown-item" href="{{route('panel.module.edit', ['idCourse' => $course->id, 'idModule' => $module->id])}}">Editar Módulo</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('panel.module.destroy', ['idCourse' => $course->id, 'idModule' => $module->id])}}" method="post">
                                  {!! method_field('DELETE') !!}
                                  {{ csrf_field() }}
                                  <button class="dropdown-item">Excluir Módulo</button>
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