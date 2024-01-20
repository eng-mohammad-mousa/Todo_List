<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>logo.png">
    <title>
        {{ env('APP_NAME') }}
    </title>
    <meta name="description"
        content="A simple and efficient Todo List built with Vue.js and Laravel. Stay organized and manage your tasks easily with this intuitive web application.">
    <meta name="keywords" content="Todo List, Vue.js, Laravel, tasks management, organization">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />


    @vite('resources/css/app.css')



    <!--[if lt IE 9]>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>
    <noscript>
        <strong>We're sorry but <%= process.env.VUE_APP_TITLE %> doesn't work properly without JavaScript enabled.
            Please enable it to continue.</strong>
    </noscript>


    <div id="app"></div>
    <!-- built files will be auto injected -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
