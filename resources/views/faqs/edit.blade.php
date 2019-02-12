@extends('layouts.app')

@section('title', "Edit question: {$faq->title}")

@section('content')

<h1>Question: {{ $faq->title }}</h1>

    <form action="{{ route('faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">

        @include('faqs._partials.form')
    </form>
@endsection