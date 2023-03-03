<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOTSTRAP WITH VITE</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js' 
            ])

    </head>
    <body>
        <div class="container py-4 px-3 mx-auto">
            <h1>Hello, Bootstrap and Vite!</h1>
            <button class="btn btn-primary"> Botão</button>
        <div>    
    </body>
</html>    
        