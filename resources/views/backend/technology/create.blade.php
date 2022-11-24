@extends('layouts.backend.app')


@section('title','All Notices')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Technology</h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.technology.store') }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" value="{{ old('name') }}" name="name" id="name" type="text" placeholder="Name"
                        data-sb-validations="required" />
                    <x-error name="name"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="slug">slug</label>
                    <input class="form-control" value="{{ old('slug') }}" name="slug" id="slug" type="text" placeholder="Slug"
                        data-sb-validations="required" />
                    <x-error name="slug"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" name="image" accept="image/*" id="image" type="file" />
                    <x-error name="image"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" value="{{ old('phone') }}" name="phone" id="phone" type="text" placeholder="phone"
                        data-sb-validations="required" />
                    <x-error name="phone"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" value="{{ old('email') }}" name="email" id="email" type="text" placeholder="Email"
                        data-sb-validations="required" />
                    <x-error name="email"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="results">Results URL</label>
                    <input class="form-control" value="{{ old('results') }}" name="results" id="results" type="text" placeholder="results"
                        data-sb-validations="required" />
                    <x-error name="results"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="routine">routine URL</label>
                    <input class="form-control" value="{{ old('routine') }}" name="routine" id="routine" type="text" placeholder="routine"
                        data-sb-validations="required" />
                    <x-error name="routine"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="syllabus">Syllabus URL</label>
                    <input class="form-control" value="{{ old('syllabus') }}" name="syllabus" id="syllabus" type="text" placeholder="syllabus"
                        data-sb-validations="required" />
                    <x-error name="syllabus"/>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="description"></textarea>
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
