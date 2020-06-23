@if(!empty(Session::get('resource')[0]['token'])) @else
<script type="text/javascript">
    window.location = "{{ url('login') }}"; //here double curly bracket
</script>
@endif
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ncc Master</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <!--	bootstrap css-->
        <!--  CSS -->

        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo/revenue.png">
        <!-- <link rel="stylesheet" href="{{ asset('css/loading.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>
