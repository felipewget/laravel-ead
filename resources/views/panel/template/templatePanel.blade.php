<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://foxythemes.net/preview/products/maisonnette/assets/img/favicon.png">
    <title>Maisonnette</title>
    <link rel="stylesheet" type="text/css" href="http://foxythemes.net/preview/products/maisonnette/assets/lib/stroke-7/style.css">
    <link rel="stylesheet" type="text/css" href="http://foxythemes.net/preview/products/maisonnette/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="http://foxythemes.net/preview/products/maisonnette/assets/lib/theme-switcher/theme-switcher.min.css"><link type="text/css" href="http://foxythemes.net/preview/products/maisonnette/assets/css/app.css" rel="stylesheet">  

    @stack('style')

  </head>
  <body>

    <div class="mai-wrapper">
      <nav class="navbar navbar-expand-lg mai-sub-header">
        <div class="container">
                    <nav class="navbar navbar-expand-md">
                      <button class="navbar-toggler hidden-md-up collapsed" type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="#mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="icon-bar"><span></span><span></span><span></span></div>
                      </button>
                      <div class="navbar-collapse collapse mai-nav-tabs" id="mai-navbar-collapse">
                        <ul class="nav navbar-nav">
                                    <li class="nav-item parent open"><a class="nav-link" href="#" role="button" aria-expanded="false"><span class="icon s7-home"></span><span>Cursos</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                        
                                        <li class="nav-item">
                                          <a class="nav-link active" href="index.php">
                                            <span class="icon s7-monitor"></span>
                                            <span class="name">Gerenciar Cursos</span>
                                          </a>
                                        </li>

                                        <li class="nav-item">
                                          <a class="nav-link" href="index.php">
                                            <span class="icon s7-monitor"></span>
                                            <span class="name">Criar Curso</span>
                                          </a>
                                        </li>

                                      </ul>
                                    </li>
                                    <li class="nav-item parent">
                                      <a class="nav-link" href="#" role="button" aria-expanded="false">
                                        <span class="icon s7-rocket"></span><span>Alunos</span>
                                      </a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                        <li class="nav-item">
                                          <a class="nav-link" href="form-elements.php">
                                            <span class="name">Gerenciar Alunos</span>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="form-elements.php">
                                            <span class="name">Criar Aluno</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>

                                    
                                    <li class="nav-item parent"><a class="nav-link" href="#" role="button" aria-expanded="false"><span class="icon s7-portfolio"></span><span>Turmas</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                        <li class="nav-item"><a class="nav-link" href="pages-profile.php"><span class="icon s7-user"></span><span class="name">Gerenciar Turmas</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="pages-profile.php"><span class="icon s7-user"></span><span class="name">Criar Turma</span></a>
                                        </li>                                        
                                      </ul>
                                    </li>
                                    <li class="nav-item parent"><a class="nav-link" href="#" role="button" aria-expanded="false"><span class="icon s7-display1"></span><span>Gerenciadores</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                          <li class="nav-item"><a class="nav-link" href="charts-flot.php"><span class="icon s7-graph"></span><span class="name">Gerenciar Administradores</span></a>
                                          </li>
                                          <li class="nav-item"><a class="nav-link" href="charts-flot.php"><span class="icon s7-graph"></span><span class="name">Criar Administrador</span></a>
                                          </li>
                                      </ul>
                                    </li>
                        </ul>
                      </div>
                    </nav>
          
        </div>
      </nav>
      <div class="main-content container">

    @yield('content')

    </div>
    </div>
    
    <div class="ft_theme_switcher ocult">
      <div class="toggle"><i class="icon s7-settings"></i></div>
      <div class="desc">
        <h3>Theme Switcher</h3>
        <p>Select a color scheme. You can create your own color theme with sass variables.</p>
      </div>
      <div class="style_list">
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #9674c8;"></div>
            <div class="name"> Default</div>
          </div><a href="?theme=default"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #4db8ea;"></div>
            <div class="name">Blue Sky</div>
          </div><a href="?theme=blue-sky"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #fa6163;"></div>
            <div class="name">Passion</div>
          </div><a href="?theme=passion"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #fe8458;"></div>
            <div class="name">Little Fox</div>
          </div><a href="?theme=little-fox"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #FBAC4F;"></div>
            <div class="name">Orange Juice</div>
          </div><a href="?theme=orange-juice"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #f3818e;"></div>
            <div class="name">Pink Love</div>
          </div><a href="?theme=pink-love"></a>
        </div>
        <div class="style">
          <div class="colors">
            <div class="color" style="background: #2cc185;"></div>
            <div class="name">Green Apple</div>
          </div><a href="?theme=green-apple"></a>
        </div>
      </div>
    </div>

    @stack('script')
  
  </body>
</html>