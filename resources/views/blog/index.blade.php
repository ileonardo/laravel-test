@extends('layouts.main')

@section('page.title', 'Our blog')

@section('main.content')
    <x-title>
        {{ __('List of posts') }}
    </x-title>

{{--    @include('blog.filter')--}}

    <div class="row">
        @foreach($posts as $post)
            <div class="col-12 col-md-4">
                <x-post.card :post="$post" />
            </div>
        @endforeach
    </div>

{{--    @if($posts->isEmpty())--}}
{{--        {{ __('Does not have any posts.') }}--}}
{{--    @else--}}
{{--        <div class="row">--}}
{{--            @foreach($posts as $post)--}}
{{--                <div class="col-12 col-md-4">--}}
{{--                    <x-post.card :post="$post" />--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--        {{ $posts->links() }}--}}
{{--    @endif--}}
@endsection
