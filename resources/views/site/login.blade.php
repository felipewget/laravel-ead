@extends('site/template/tamplateLogin')

@section('content')

	<main>
        <div class="container h-100vh d-flex align-items-center">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <form class="form-stacked">
                            <div class="text-center mb-4">
                                <img class="mb-4" src="../assets/img/brand/purpose-solid.svg" alt="" width="72" height="72">
                                <h4 class="heading h3">Àrea do Estudante</h4>
                            </div>
                            <label class="sr-only">E-mail</label>
                            <input type="email" class="form-control form-control-lg" placeholder="E-mail" required="">
                            <label class="sr-only">Senha</label>
                            <input type="password" class="form-control form-control-lg" placeholder="Senha" required="">
                            <div class="row my-4">
                                <div class="col-12">
                                    <p class="text-muted mb-0">Ao clicar em "Conectar, você concorda com nossos Termos e Condições e com nossa Política de Privacidade.</p>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Conectar</button>
                            <p class="mt-5 mb-3 text-muted text-center">© <?=Date('Y');?> - Todos os Direitos Reservados.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection