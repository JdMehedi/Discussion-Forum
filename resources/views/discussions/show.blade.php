@extends('layouts.app')

@section('content')

            @include('partials.discussion-header')
<div class="card">
    <div class="card-body">
                        
        <div class="text-center">
                                            
        <strong >
        {!! $discussion->title !!}
        </strong>
        </div>
    
        <hr>
    
        {!! $discussion->content !!}
                            
    </div>

 
    </div>
    <hr><hr><hr>
    <h3>All replies</h3>
    @foreach($discussion->replies()->paginate(3) as $reply)
        <div class="card my-3">
        <div class="card-header">
        
            <div class="d-flex justify-content-between">
                <div>
                <img width="40px" height="40px" style="border-radius:50%" src="{{ Gravatar::src( $reply->owner->email )}}" alt="">
                <span> {{ $reply->owner->name }} </span>
                </div>
            </div>
        </div>

        <div class="card-body">
            {!! $reply->content !!}
        
        </div>
        </div>

      
    @endforeach

    {{ $discussion->replies()->paginate(3)->links() }}

    <div class="card my-4">

            <div class="card-header">
            Add reply
            </div>


            <div class="card-body">
            @auth
                <form action="{{route('discussion\{discussion}\replies.store', $discussion->slug)}}" method="POST">
                @csrf
                <input type="hidden" name="content" id="content">
                <trix-editor input="content"></trix-editor>

                <button type="submit" class="btn btn-success my-2 btn-sm">Create reply</button>
                </form>
            @else
            <a href="{{route('login')}}" class="btn btn-info">Sign in to add a reply</a>
            @endauth
            </div>
    </div>
                      
</div>
    
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection