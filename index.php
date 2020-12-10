<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link href="css/style.css" rel="stylesheet">
    <title>Hello, world!</title>
   
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Lucas Matheus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato" tabindex="-1" aria-disabled="true">Contato</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> Botao de pesquisa-->
  </div>
</nav>


  <div class="box">
  <section class="banner">
    <div class="overlay"></div>
    <div class="container chamada-banner">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2> <?php echo htmlentities('<') ?>Lucas Matheus <?php echo htmlentities('/>') ?></h2>
          <p>Analista de Sistema e Desenvolvedor Web<p>
          <a href="">Entre em contato!</a>
        </div>
      </div><!--row-->
    </div>
  </section>

    <section class="cadastro-lead">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6">
              <h2> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-alarm-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
            </svg> Entre na nossa lista!</h2>
            </div>
            <div class="col-md-6">
              <form method="post">
                <input type="text" name="nome"/><input type="submit" value="Enviar" />
              </form>
            </div>
          </div>
        </div>
    </section>
    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>

            <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat eleifend nisi, molestie mattis tortor cursus eu. Donec facilisis, ligula quis faucibus imperdiet, nibh elit malesuada eros, ac imperdiet nulla purus vel eros. Phasellus placerat, neque sit amet vehicula consectetur, dolor odio congue ex, eget dictum enim neque sed ex. Nullam eu"</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa!</h2>

      <div class="container diferenciais-container">
        <div class="row">
          <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M10.828 5.172a.5.5 0 0 0-.707 0L6.025 9.268V6.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H9.5a.5.5 0 0 0 0-1H6.732l4.096-4.096a.5.5 0 0 0 0-.707z"/>
            </svg></h3>
            <h2>Diferencial #1</h2>
            <p>egestas. Proin vitae pretium nisl. Aliquam urna elit, imperdiet at bibendum at, tristique quis arcu. Vivamus tincidunt lobortis dolor, ut lobortis lorem posuere non. Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
            </div>

            <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg></h3>
            <h2>Diferencial #2</h2>
            <p>egestas. Proin vitae pretium nisl. Aliquam urna elit, imperdiet at bibendum at, tristique quis arcu. Vivamus tincidunt lobortis dolor, ut lobortis lorem posuere non. Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
            </div>

            <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-joystick" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.106 15.553L.553 12.276A1 1 0 0 1 0 11.382V9.471a1 1 0 0 1 .606-.89L6 6.269v1.088L1 9.5l5.658 2.83a3 3 0 0 0 2.684 0L15 9.5l-5-2.143V6.27l5.394 2.312a1 1 0 0 1 .606.89v1.911a1 1 0 0 1-.553.894l-6.553 3.277a2 2 0 0 1-1.788 0z"/>
            <path fill-rule="evenodd" d="M7.5 9.5v-6h1v6h-1z"/>
            <path d="M10 9.75c0 .414-.895.75-2 .75s-2-.336-2-.75S6.895 9 8 9s2 .336 2 .75zM10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
            </svg></h3>
            <h2>Diferencial #3</h2>
            <p>egestas. Proin vitae pretium nisl. Aliquam urna elit, imperdiet at bibendum at, tristique quis arcu. Vivamus tincidunt lobortis dolor, ut lobortis lorem posuere non. Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
            </div>

        
        </div>
      </div>
    </section>
   <section class="equipe">
    <h2>Equipe</h2>

    <div class="container equipe-container">
      <div class="row">
        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                   <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Lucas Matheus</h3>
                <p>Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-6">
           <div class="equipe-single">
              <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                   <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Lucas Matheus</h3>
                <p>Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Lucas Matheus</h3>
                <p>Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Lucas Matheus</h3>
                <p>Donec at ultrices nisl. Etiam iaculis, ligula vel iaculis venenatis, arcu ligula luctus diam, id tempus magna massa vel diam. Donec nec ornare mauris. Donec quis nulla enim. Duis porta aliquam commodo.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!--equipe-container-->
   </section>

  <section class="final-site">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h2>Fale conosco</h2>
          <form>
              <div class="form-group">
                <label for="email">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>

              <div class="form-group">
                <label for="pwd">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="email">Mensagem:</label>
                <textarea class="form-control"></textarea>
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
          </form>

        </div>

        <div class="col-md-6">
           <h2>Nossos planos</h2>
           <table class="table">
              <thead>
                <tr>
                  <th>Plano Semanal</th>
                  <th>Plano Mensal</th>
                  <th>Plano Anual</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R$100,00</td>
                  <td>R$200,00</td>
                  <td>R$500,00</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
    <footer>
        <p class="text-center">Todos os direitos reservados</p>
    </footer>

  </div><!--box-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>