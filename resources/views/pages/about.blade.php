@extends('base')

@section('title','About Us | ' . config('app.name'))

{{--
@section('title')
   About Us | Hello City
@endsection
--}}

@section('content')

<body>
<img src="{{asset('/images/logo.jpg')}}" alt="Logo" class="my-12 rounded-full shadow-md">

<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by les enfants forts.
</h2>

<p>
    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
</p>

@endsection

