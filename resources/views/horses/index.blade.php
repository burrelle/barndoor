@foreach($horses as $horse)
<h1>{{ $horse->name }}</h1>
<h2>{{ $horse->gender }}</h2>
<h2>{{ $horse->breed }}</h2>
<h2>{{ $horse->color }}</h2>
<h2>{{ $horse->height . ' hh'}}</h2>
@endforeach
