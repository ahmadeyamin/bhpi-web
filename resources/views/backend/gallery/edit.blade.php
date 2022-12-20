@extends('layouts.backend.app')


@section('title','Edit Gallery')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Edit Gallery</h3>
        <p class="text-subtitle text-muted">Edit gallery information</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.gallery.update',$gallery) }}" class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="title">Title <span class="text-red">*</span></label>
                    <input class="form-control" value="{{$gallery->title}}" name="title" id="title" type="text" placeholder="Title"/>
                    <x-error name="title"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image">Profile Image</label>
                    <input class="form-control" name="image" accept="image/*" id="image" type="file" />
                    <img src="{{$gallery->image_url}}" class="my-3" width="200" />

                    <x-error name="file"/>
                </div>

                @method('PUT')

                <div class="mb-3">
                    <label class="form-label" for="pined">In Banner</label>
                    <input class="form-control-checkbox" @checked($gallery->pined) name="pined" id="pined" type="checkbox" />
                    <x-error name="file"/>
                </div>
               
                <div class="mb-3">
                    <label class="form-label" for="type">Gallery Type</label>
                    <select class="form-control" disabled name="type" id="type" placeholder="type">
                        <option value="image">Image</option>
                        <option value="video">Video</option>
                    </select>
                    <x-error name="type"/>
                </div>
                
                @csrf
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection


@push('js')

@endpush
