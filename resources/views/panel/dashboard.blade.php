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
                        <th style="width:5%;">
                          <label class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </th>
                        <th style="width:20%;">User</th>
                        <th style="width:17%;">Last Commit</th>
                        <th style="width:15%;">Milestone</th>
                        <th style="width:10%;">Branch</th>
                        <th style="width:10%;">Date</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="user-avatar cell-detail user-info"><img src="http://foxythemes.net/preview/products/maisonnette/assets/img/avatar.jpg" alt="Avatar"><span>John Peterson</span><span class="cell-detail-description">Developer</span></td>
                        <td class="cell-detail"> <span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                        <td class="milestone"><span class="completed">8 / 15</span><span class="version">v1.2.0</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 45%;"></div>
                          </div>
                        </td>
                        <td class="cell-detail"><span>master</span><span class="cell-detail-description">63e8ec3</span></td>
                        <td class="cell-detail"><span>May 06, 2018</span><span class="cell-detail-description">8:30</span></td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Open <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="online">
                        <td>
                          <label class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="user-avatar cell-detail user-info"><img src="http://foxythemes.net/preview/products/maisonnette/assets/img/avatars/img1.jpg" alt="Avatar"><span>Ryan Lawrence</span><span class="cell-detail-description">Designer</span></td>
                        <td class="cell-detail"> <span>Main structure</span><span class="cell-detail-description">CLI Connector</span></td>
                        <td class="milestone"><span class="completed">22 / 30</span><span class="version">v1.1.5</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 75%;"></div>
                          </div>
                        </td>
                        <td class="cell-detail"><span>develop</span><span class="cell-detail-description">4cc1bc2</span></td>
                        <td class="cell-detail"><span>Apr 22, 2018</span><span class="cell-detail-description">14:45</span></td>
                        <td class="text-right">
                          <div class="btn-group btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Open <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label class="custom-control custom-control-sm custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="user-avatar cell-detail user-info"><img src="http://foxythemes.net/preview/products/maisonnette/assets/img/avatars/img2.jpg" alt="Avatar"><span>Benji Miller</span><span class="cell-detail-description">Designer</span></td>
                        <td class="cell-detail"> <span>Left sidebar adjusments</span><span class="cell-detail-description">Back-end Manager</span></td>
                        <td class="milestone"><span class="completed">10 / 30</span><span class="version">v1.1.3</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 33%;"></div>
                          </div>
                        </td>
                        <td class="cell-detail"><span>develop</span><span class="cell-detail-description">5477993</span></td>
                        <td class="cell-detail"><span>Apr 15, 2018</span><span class="cell-detail-description">10:00</span></td>
                        <td class="text-right">
                          <div class="btn-group dropup btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Open <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, -2px, 0px);"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="user-avatar cell-detail user-info"><img src="http://foxythemes.net/preview/products/maisonnette/assets/img/avatars/img3.jpg" alt="Avatar"><span>Justin Adams</span><span class="cell-detail-description">Developer</span></td>
                        <td class="cell-detail"> <span>Topbar dropdown style</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                        <td class="milestone"><span class="completed">25 / 40</span><span class="version">v1.0.4</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 55%;"></div>
                          </div>
                        </td>
                        <td class="cell-detail"><span>master</span><span class="cell-detail-description">8cb98ec</span></td>
                        <td class="cell-detail"><span>Apr 08, 2018</span><span class="cell-detail-description">17:24</span></td>
                        <td class="text-right">
                          <div class="btn-group dropup btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Open <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="online">
                        <td>
                          <label class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="user-avatar cell-detail user-info"><img src="http://foxythemes.net/preview/products/maisonnette/assets/img/avatars/img4.jpg" alt="Avatar"><span>Brett Harris</span><span class="cell-detail-description">Designer</span></td>
                        <td class="cell-detail"> <span>Right sidebar adjusments</span><span class="cell-detail-description">CLI Connector</span></td>
                        <td class="milestone"><span class="completed">38 / 40</span><span class="version">v1.0.1</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 98%;"></div>
                          </div>
                        </td>
                        <td class="cell-detail"><span>master</span><span class="cell-detail-description">65bc2da</span></td>
                        <td class="cell-detail"><span>Mars 18, 2018</span><span class="cell-detail-description">13:02</span></td>
                        <td class="text-right">
                          <div class="btn-group dropup btn-hspace">
                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Open <span class="icon-dropdown s7-angle-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </td>
                      </tr>
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