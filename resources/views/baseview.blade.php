<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Palveluhakemisto</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="/bootstrap.min_1.css" >

        <link rel="stylesheet" href="/main.css">
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Sovelluksen nimi -->
                    <a class="navbar-brand" href="/">Palveluhakemisto</a>
                </div>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav">
                        <!-- Navigaation linkit -->
                        <li><a href="/">Etusivu</a></li>
                        <li><a href="/yllapito">Ylläpito</a></li>

                    </ul>




                    <form class="navbar-form navbar-right" method="post" action="/logout">
                        <button type="submit" class="btn btn-default">Kirjaudu ulos</button>

                    </form>
                    <p class="navbar-text navbar-right">Käyttäjä: </p>


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="kirjautuminen">Kirjaudu sisään</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        @yield('scripts')

    </body>
</html>