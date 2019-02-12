@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<h1>
    Manage Faqs
    <a href="{{ route('faqs.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-square"></i>
    </a>
</h1>

@include('includes.alerts')

<ul class="media-list">

    @forelse($faqs as $faq)

        <li class="media">
            <div class="media-body">
                <span class="text-muted float-right">
                    <small class="text-muted">{{ $faq->created_at->format('d/m/Y') }}</small>
                </span>
                <div>
                    {{ $faq->title }}
                    <br>
                    <a href="{{ route('faqs.show', $faq->id) }}">Details</a> |
                    <a href="{{ route('faqs.edit', $faq->id) }}">Edit</a> |
                    <form class="manage_del" action="{{ route('faqs.destroy', $faq->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="delete_btn" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </div>
                <hr>
            </div>
        </li>

    @empty
    <div class="media">
        <p>No records found!</p>
    </div>
    @endforelse

    {!! $faqs->links() !!}

</ul>

@endsection