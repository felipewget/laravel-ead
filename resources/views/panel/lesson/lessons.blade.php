@extends('panel/template/templatePanel')

@section('content')

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default card-table">
              <div class="card-header">Aulas
              </div>
              <div class="card-body">
                <div class="table-responsive noSwipe">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:20%;">Título da Aula</th>
                        <th style="width:17%;">Módulo</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse($lessions as $lession )
                      <tr class="online">
                        <td class="user-avatar cell-detail">
                            <span>Aula adasd sdas d asdas1 asda</span>
                        </td>
                        <td class="cell-detail">
                            <span>1</span>
                            <span class="cell-detail-description">Módulo</span>
                        </td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Ações <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="#">Editar Aula</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Excluir Aula</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @empty
                      <div>Nenhuma conta administrativa cadastrada</div>
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