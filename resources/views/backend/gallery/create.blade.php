@extends('layouts.backend.app')


@section('title','New Gallery')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Add Gallery </h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.gallery.store') }}" class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="title">Title <span class="text-red">*</span></label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title"/>
                    <x-error name="title"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image">Profile Image</label>
                    <input class="form-control" name="image" accept="image/*" id="image" type="file" />
                    <x-error name="file"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="pined">In Pined</label>
                    <input class="form-control-checkbox" name="pined" id="pined" type="checkbox" />
                    <x-error name="file"/>
                </div>
               
                <div class="mb-3">
                    <label class="form-label" for="type">Gallery Type</label>
                    <select class="form-control" name="type" id="type" placeholder="type">
                        <option value="image">Image</option>
                        <option value="video">Video</option>
                    </select>
                    <x-error name="type"/>
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
