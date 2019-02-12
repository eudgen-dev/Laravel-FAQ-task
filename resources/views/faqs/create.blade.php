@extends('layouts.app')

@section('title', 'New question')

@section('content')

<h1>New question</h1>

<form action="{{ route('faqs.store') }}" method="post" enctype="multipart/form-data">
    @include('faqs._partials.form')
</form>

@endsection