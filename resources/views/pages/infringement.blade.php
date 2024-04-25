@extends('layouts/master')
@section('content')
    <infringement-component
        :img-url="'{{ asset('asset/img/marker-icon.png') }}'"
        :img-shadow="'{{ asset('asset/img/marker-shadow.png') }}'"
    ></infringement-component>
@endsection