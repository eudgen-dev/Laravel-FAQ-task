@include('includes.alerts')

@csrf

<div class="form-group">
    @if ($errors->has('title'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('title') as $title_error)
                    <li>{{ $title_error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input value="{{ $faq->title ?? old('title') }}" class="form-control" type="text" name="title" placeholder="Title">
</div>
<div class="form-group">
    @if ($errors->has('content'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('content') as $content_error)
                    <li>{{ $content_error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Content" id="content">{{ $faq->content ?? old('content') }}</textarea>
</div>
<div class="form-group">
    <a class="btn btn-info float-left" href="{{ route('manage') }}">Back</a>
    <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
</div>