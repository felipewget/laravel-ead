@extends('panel/template/templatePanel')

@section('content')

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-default card-table">
              <div class="card-header">Contas Admnistrativas
              </div>
              <div class="card-body">
                <div class="table-responsive noSwipe">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:20%;">Nome</th>
                        <th style="width:17%;">E-mail</th>
                        <th style="width:17%;">Labels</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse($adminAccounts as $adminAccount )
                      <tr class="online">
                        <td class="user-avatar cell-detail">
                            <span>{{$adminAccount->name}}</span>
                            <span class="cell-detail-description">Criado em: {{$adminAccount->created_at}}</span>
                        </td>
                        <td class="cell-detail">
                            <span>{{$adminAccount->email}}</span>
                        </td>
                        <td class="cell-detail">
                            <span>
                            	{{$adminAccount->label or 'MASTER ADMIN'}}
                            </span>
                        </td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Ações <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="{{route('panel.account.edit', $adminAccount->id)}}">Editar Conta</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('panel.account.destroy', $adminAccount->id)}}" method="post">
                                  {!! method_field('DELETE') !!}
                                  {{ csrf_field() }}
                                  <button class="dropdown-item" href="{{route('panel.account.destroy', $adminAccount->id)}}">Excluir Conta</button>
                                </form>
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