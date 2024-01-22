@extends('layouts.app')

@section('content')
    {{-- container --}}
    <div class="container">
        {{-- movie cards --}}
        <div class="">
            <div class="d-flex flex-wrap">
                @foreach ($films as $film)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $film["title"] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $film["original_title"] }}</h6>
                            <h6 class="card-subtitle mb-2 text-body-primary">Date: {{ $film["date"] }}</h6>
                            <p class="card-text">Nationality: {{ $film["nationality"] }}</p>
                            <p class="card-text text-info">Vote: {{ $film["vote"] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection