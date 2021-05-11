@extends('layouts.app')

@section('content')


<div class="card">
@foreach($discussions as $discussion)
 
                @include('partials.discussion-header')

                    <div class="card-body">
                        <div class="text-center">
                                        
                            <strong >
                            {!! $discussion->title !!}
                            </strong>
                        
                        </div>
                                
                    </div>
    

@endforeach
</div>

@endsection
