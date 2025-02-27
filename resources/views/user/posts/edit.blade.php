@extends('layouts.main')

@section('page.title', 'Изменить пост')

@section('main.content')
    <x-title>
        {{ __('Update post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="put" :post="$post">
        <x-button type="submit">
            {{ __('Save') }}
        </x-button>
    </x-post.form>
@endsection
