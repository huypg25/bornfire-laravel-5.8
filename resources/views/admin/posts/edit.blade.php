@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.posts.update') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="title">Title <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $post->title) }}"/>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            @error('title') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="author">Author <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('author') is-invalid @enderror" type="text" name="author" id="author" value="{{ old('author', $post->author) }}"/>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            @error('author') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Description <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" value="{{ old('description', $post->description) }}"/>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            @error('description') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="content">Content <span class="m-l-5 text-danger"> *</span></label>
                            <textarea class="form-control @error('content') is-invalid @enderror" type="text" name="content" id="content" rows="8">{{ old('description', $post->content) }}</textarea>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            @error('content') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                @if ($post->image != null)
                                    <div class="col-md-2">
                                        <figure class="mt-2" style="width: 80px; height: auto;">
                                            <img src="{{ asset('storage/'.$post->image) }}" id="postlogo" class="img-fluid" alt="img">
                                        </figure>
                                    </div>
                                @endif
                                <div class="col-md-10">
                                    <label class="control-label">Post Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"/>
                                    @error('image') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Post</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.posts.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
