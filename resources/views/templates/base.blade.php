<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

    <div class="container-fluid">
        
        <!--richiamo il singolo componente creato in modo isolato-->
            <header>
                @include('templates.header')
            </header>


             <!--PERMETTI, aggiungendo questo segnaposto 
                che ci sia l'estensione del template-->
        <!--segnaposto del main per lo spazio riempito poi dal reale template, 
        dalla home, dando lo stesso nome che passerai alla section-->
        
        <main>
               @yield('main')
        </main>
        
            <!--richiamo la singola parte creata a parte-->
            <section>
                @include('templates.merchandise')
            </section>

            <!-- richiamo la singola parte del template creata a parte-->
            <footer>
                @include('templates.footer')
            </footer>

            <!--  richiamo la singola parte del template -->
            <section>
                @include('templates.footerBottom')
            </section>

    </div>
   

</body>
</html>