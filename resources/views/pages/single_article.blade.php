@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    @include('layouts.contents.view_single_article')
@endsection
