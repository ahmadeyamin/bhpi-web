@extends('layouts.backend.app')


@section('title','Edit Notice')

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
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.technology.update',$technology->id) }}" class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" value="{{ $technology->name }}" name="name" id="name" type="text" placeholder="Name"
                        data-sb-validations="required" />
                    <x-error name="name"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" name="image" accept="image/*" id="image" type="file" />

                    @if ($technology->image)
                    <img src="{{asset(Storage::url($technology->image))}}" class="my-3" width="100" />
                    @endif

                    <x-error name="image"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" value="{{ $technology->phone }}" name="phone" id="phone" type="text" placeholder="phone"
                        data-sb-validations="required" />
                    <x-error name="phone"/>
                </div>
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" value="{{ $technology->email }}" name="email" id="email" type="text" placeholder="Email"
                        data-sb-validations="required" />
                    <x-error name="email"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="description">{{ $technology->description}}</textarea>
                    <x-error name="description"/>
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
