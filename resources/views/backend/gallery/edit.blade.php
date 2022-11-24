@extends('layouts.backend.app')


@section('title','Edit Teacher')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Edit Teacher & Staff </h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.teacher.update',$teacher->id) }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="name">Name <span class="text-red">*</span></label>
                    <input class="form-control" value="{{ $teacher->name }}" name="name" id="name" type="text" placeholder="Name"/>
                    <x-error name="name"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="avatar">Profile Image</label>
                    <input class="form-control" name="avatar" accept="image/*" id="avatar" type="file"/>

                    <img src="{{$teacher->avatar_img}}" class="my-3" width="100" />
                    
                    <x-error name="file"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Title <span class="text-red">*</span></label>
                    <input class="form-control" name="title" value="{{ $teacher->title }}" id="title" type="text" placeholder="Title"/>
                    <x-error name="title"/>
                </div>
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="technology">Technology</label>
                    <select class="form-control" name="technology" id="technology" placeholder="technology">
                        <option value="">Select Technology</option>
                        @foreach ($technologies as $technology)
                            <option @selected($technology->id == $teacher->technology_id) value="{{$technology->id}}">{{$technology->name}}</option>
                        @endforeach
                    </select>
                    <x-error name="technology"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="managements">Managements</label>
                    <select multiple class="form-control" name="managements[]" id="managements" placeholder="managements">
                        @foreach ($managements as $management)
                            <option @selected(in_array($management->id,$teacher->managements->pluck('id')->toArray())) value="{{$management->id}}">{{$management->name}}</option>
                        @endforeach
                    </select>
                    <x-error name="management"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="education">Education <span class="text-red">*</span></label>
                    <input class="form-control" value="{{ $teacher->education }}" name="education" id="education" type="text" placeholder="Education"/>
                    <x-error name="education"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" value="{{ $teacher->email }}" name="email" id="email" type="email" placeholder="Email"/>
                    <x-error name="email"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" name="phone" id="phone" value="{{ $teacher->phone }}" type="text" placeholder="Phone"/>
                    <x-error name="phone"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="sort">Order</label>
                    <input class="form-control" name="sort" id="sort" type="number" value="{{ $teacher->sort }}" placeholder="sort"/>
                    <x-error name="sort"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="message">{{ $teacher->message }}</textarea>
                    <x-error name="message"/>
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
