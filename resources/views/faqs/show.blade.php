@extends('layouts.app')

@section('title', "Question details: {$faq->title}")

@section('content')

<h1>Question details: <b>{{ $faq->title }}</b></h1>

<p class="card card-body">
    {{ $faq->content }}
</p>

<div>
    <a class="btn btn-info float-left" href="{{ route('manage') }}">Back</a>
    <form class="float-right" action="{{ route('faqs.destroy', $faq->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete question</button>
    </form>
</div>

@endsection