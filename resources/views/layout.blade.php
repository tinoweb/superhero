<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SuperHero</title>

    <!-- ==============================================
    CSS
    =============================================== -->  
    
    {!!Html::style('css/mdb.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/custom.css')!!}
    

</head>

<body class="nav-md">


    @yield('content')

    
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/mdb.min.js')!!}

    @yield('script')
    
</body>
</html>
