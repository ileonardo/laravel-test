@extends('layouts.main')

@section('page.title', 'Мои донаты')

@section('main.content')
    <x-title>
        {{ __('My donate') }}
    </x-title>

    @include('user.donates.stats')
@endsection
