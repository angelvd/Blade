@extends('layout.template')

@section('title', 'Data')

@section('content')
        @if (count($data) == 1)
            <h3>You Got 1 Data!</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/3159/3159073.png" alt="">
        @endif

@endsection


