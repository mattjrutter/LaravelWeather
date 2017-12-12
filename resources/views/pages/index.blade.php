@extends('layouts.app')

@section('content')
    <h1>Welcome to my Weather Station</h1>
    @include('inc.liveTable')
    @include('inc.charts')
@endsection
