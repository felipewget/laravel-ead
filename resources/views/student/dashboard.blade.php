@extends('student/template/templateDashboard')

@section('content')







<main>
        <section class="slice">
            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <div class="card card-profile  text-center">
                            <div class="card-profile-cover">
                                <img alt="Image" src="https://preview.webpixels.io/purpose-website-ui-kit-v1.0.1/assets/img/prv/img-1-800x400.jpg" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <img src="https://preview.webpixels.io/purpose-website-ui-kit-v1.0.1/assets/img/prv/team-1-800x800.jpg" class="avatar shadow">
                                </a>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h5 class="mb-0">Felipe Oliveira</h5>
                                        <span class="text-muted">felipe.wget@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="page-header mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <a href="#" class="h5 mb-0">Cursos Concluídos</a>
                                </div>
                            </div>
                        </div>
                        
                        @for( $i=0; $i < 1; $i++ )
                        <div class="card mb-4">
                            <div class="card-body py-3">
                                <div class="row row-grid align-items-center">
                                    <div class="col-sm-8">
                                        <div class="media align-items-center">
                                            <img src="https://preview.webpixels.io/purpose-website-ui-kit-v1.0.1/assets/img/prv/team-1-800x800.jpg" class="avatar avatar-lg mr-3">
                                            <div class="media-body">
                                                <h5 class="font-weight-300 mb-0">Nome do Curso</h5>
                                                <a href="#" class="font-weight-700">Rever Aulas</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-4 mt-sm-0 text-sm-right">
                                        <a href="#" class="btn btn-sm btn-primary btn-circle btn-icon shadow">
                                            <span class="btn-inner--icon"><svg class="svg-inline--fa fa-user-tie fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="user-tie" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"></path></svg><!-- <i class="fas fa-user-tie"></i> --></span>
                                            <span class="btn-inner--text">Imprimir Certificado</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor


                        <div class="page-header mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <a href="#" class="h5 mb-0">Cursos Não Concluídos</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">



                            <div class="row mb-4">


                            	@for( $i = 0; $i < 8; $i++ )

                                <div class="col-md-6 mb-4 mb-md-5" style="cursor: pointer;">
                                    <div class="card shadow--hover">
                                        <div class="card-header">
                                            <small class="text-muted font-weight-700">10% Concluído</small>
                                        </div>
                                        
                                        <div class="card-body text-center">
                                            <img src="https://preview.webpixels.io/purpose-website-ui-kit-v1.0.1/assets/img/prv/brand-avatar-1.png" class="rounded-circle shadow">
                                            <h5 class="my-4">Nome do Curso</h5>
                                            <span class="font-weight-700 text-warning">Curso não conluído</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                @endfor

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </main>






@endsection