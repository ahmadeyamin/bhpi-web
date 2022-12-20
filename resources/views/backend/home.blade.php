@extends('layouts.backend.app')


@section('title','Dashboard')

@section('content')
<div class="page-title">
    <h3>Dashboard</h3>
    <p class="text-subtitle text-muted">Monitor your account usages</p>
</div>
<div class="row mb-2">
    <div class="col-12 col-md-3">
        <div class="card card-statistic">
            <div class="card-body p-0">
                <div class="d-flex flex-column">
                    <div class='px-3 py-3 d-flex justify-content-between'>
                        <h3 class='card-title'>Total Teachers</h3>
                        <div class="card-right d-flex align-items-center">
                            <p>{{$total_teachers}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row px-2">
    <div class="card card-body">
        <h2 class="text-center">
            Credit Used 
        </h2>
        <div id="chart" class="bg-white">
    
        </div>
    </div>
    
</div> --}}
@endsection


@push('js')

@endpush
