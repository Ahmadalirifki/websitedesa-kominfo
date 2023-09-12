@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    @include('dashboard._hero')
    @include('dashboard._program')
    @include('dashboard._join')
    @include('dashboard._berita')
    @include('dashboard._foto')
@endsection
