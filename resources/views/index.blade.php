@extends('layout.app')

@section('content')
    
{{-- inizio sezione comic --}}
<section class="section-comics">
    <div class="container">
        <div class="row">
            @foreach ($comics as $item)
            <div class="col-2">
                <img class="thumb" src="{{$item['thumb']}}" alt="">
                <h6 class="pt-2 text-light">{{$item['series']}}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection