@extends('layouts/master')
@section('content')
    <enviromental-component 
        :img-url="'{{ asset('asset/img/marker-icon.png') }}'"
        :img-shadow="'{{ asset('asset/img/marker-shadow.png') }}'">
    </enviromental-component>
@endsection