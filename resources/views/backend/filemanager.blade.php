@extends('layouts.backend.app')


@section('title','Dashboard')

@section('content')
<div class="page-title">
    <h3>Dashboard</h3>
    <p class="text-subtitle text-muted">Monitor your account usages</p>
</div>
<div class="row mb-2">
    <div class="col-12">
        <div class="card card-statistic w-100">
            <iframe src="/admin/filemanager" style="width: 100%; height: 80vh; overflow: hidden; border: none;"></iframe>
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
