@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<h1>
    Faqs
</h1>

@include('includes.alerts')

<div class="accordion" id="accordionFAQ">

    @forelse($faqs as $faq)

        <div class="card">
            <div class="card-header" id="heading-{{$faq->id}}">
                <h5 class="mb-0">
                    <span class="text-muted pull-right">
                        <small class="text-muted">{{ $faq->created_at->format('d/m/Y') }}</small>
                    </span>
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{$faq->id}}" aria-expanded="false" aria-controls="collapse-{{$faq->id}}">
                        <div class="media-body">
                            {{ $faq->title }}
                        </div>
                    </button>
                </h5>
            </div>

            <div id="collapse-{{$faq->id}}" class="collapse" aria-labelledby="heading-{{$faq->id}}" data-parent="#accordionFAQ">
                <div class="card-body">
                    {{ $faq->content }}
                    <br>
                </div>
            </div>
        </div>

    @empty
    <div class="media">
        <p>No records found!</p>
    </div>
    @endforelse

    {!! $faqs->links() !!}

</div>

@endsection