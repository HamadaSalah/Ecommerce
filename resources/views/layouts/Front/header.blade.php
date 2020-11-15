<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{settings('name_'.language())}}</title>
        <meta name="description" content="Ecommerce Big Fry">
        <link rel="stylesheet" href="{{url('/design/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/design/adminlte/dist/css/custom_ar.css')}}">
        <link rel="shortcut icon" href="{{url('/storage/images/shortcut-icon/'.settings('short_icon'))}}">

    </head>
    <body>
