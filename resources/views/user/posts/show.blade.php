@extends('layouts.main')

@section('page.title', 'Просмотр')

@section('main.content')
    <x-title>
        {{ __('View post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ __('Back') }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.edit', $post->id) }}">
                {{ __('Update') }}
            </x-button-link>
        </x-slot>
    </x-title>

    <h2 class="h4">
        {{ $post->title }}
    </h2>

{{--    <div class="small text-muted">--}}
{{--        {{ $post->published_at?->format('d.m.Y') }}--}}
{{--    </div>--}}

    <div class="pt-3">
        {!! $post->content !!}
    </div>
@endsection
