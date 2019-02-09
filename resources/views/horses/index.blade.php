@extends('layouts.app') @section('content')
<div class="container d-flex justify-content-between">
    <h3 class="mb-4">{{ Auth::user()->name }}'s Horses</h3>
    <a href="{{ route('horses.create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="28" width="20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"
            />
        </svg>
    </a>
</div>

@if (count($horses) === 0)
<h4 class="text-center">
    No horses yet, <a href="{{ route('horses.create') }}">add one</a>?
</h4>
@else @foreach($horses as $horse)
<horse-card
    :horse="{{ $horse }}"
    :owner="{{ json_encode($horse->user->name) }}"
></horse-card>
@endforeach @endif @endsection
