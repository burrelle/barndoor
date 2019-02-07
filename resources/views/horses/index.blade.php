@extends('layouts.app')

@section('content')
    <h3 class="mb-4 text-center">{{ Auth::user()->name }}'s Horses</h3>

    @foreach($horses as $horse)
    <horse-card :horse="{{ $horse }}"></horse-card>
    @endforeach
</div>
@endsection
