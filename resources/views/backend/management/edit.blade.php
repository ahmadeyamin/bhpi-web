@extends('layouts.backend.app')


@section('title','Edit management')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Edit Management</h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.management.update',$management->id) }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" value="{{ $management->name }}" name="name" id="name" type="text" placeholder="name"
                        data-sb-validations="required" />
                    <x-error name="name"/>
                </div>
               
                @csrf
                @method('PUT')
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
