@extends('layouts.app')

@section('title')
    Search
@endsection

@section('content')
    <h3 class="ml-50 bg-info offset-3 w-50 text-white">Your search for "{{ Request::input('query') }}"</h3>
    @if(!$articles->count())
        <p class="alert alert-info ml-50 w-50">No results found, sorry!</p>
    @else
    <div class="row">
        <div class="col-lg-12">
            @foreach($articles as $article)
                @include('partials.articleblock')
            @endforeach
        </div>
    </div>
    @endif
@endsection
