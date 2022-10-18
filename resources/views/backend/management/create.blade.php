@extends('layouts.backend.app')


@section('title','All Notices')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.management.store') }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" value="{{ old('name') }}" name="name" id="name" type="text" placeholder="Name"
                        data-sb-validations="required" />
                    <x-error name="name"/>
                </div>
                @csrf
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection


@push('js')

@endpush
