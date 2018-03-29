<h1>users data</h1>

@if(isset($results))
    @foreach($results as $rslt)
        {{$rslt->id}} <br> {{$rslt->name}} <br> {{$rslt->email}}
    @endforeach
@endif         