@extends('master')



@section('content')


@if(session()->has('auth_id'))
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/paineladmin.css') }}">
        <title>Document</title>
    </head>
    <body>
        <p>Painel Admin - WIP</p>
    </body>
    </html>
@else
    <meta http-equiv="refresh" content="0;url={{ route('home') }}">
@endif

@endsection