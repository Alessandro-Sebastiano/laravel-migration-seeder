@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Home Page</h1>

    <div class="container-lg">
        <div class="row g-4">
            @foreach ($trains as $train)
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $train->company_name }} - Company</h5>
                            <div class="text-secondary d-flex justify-content-between px-3 py-2 my-3 border-bottom border-2">
                                <span class="card-text">From: {{ $train->departure_station }}</span>
                                <span class="card-text">To: {{ $train->arrival_station }}</span>
                            </div>
                            <div class="d-flex justify-content-between py-3">
                                <h6>Time: {{ $train->departure_time }}</h6>
                                <h6>Train code: {{ $train->train_code }}</h6>
                            </div>
                            <span
                                class="d-block text-danger fw-bolder text-end">{{ $train->deleted ? 'Deleted' : '' }}</span>
                            <a href="#" class="btn btn-primary">Select</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
