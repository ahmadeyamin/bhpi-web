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
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.notice.update',$notice->id) }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" value="{{ $notice->title }}" name="title" id="title" type="text" placeholder="Title"
                        data-sb-validations="required" />
                    <x-error name="title"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="pdfUrl">PDF</label>
                    <input class="form-control" name="file" accept="application/pdf" id="pdfUrl" type="file" placeholder="PDF URL"
                        data-sb-validations="required" />
                    <a target="_blank" href="{{asset(Storage::url($notice->url))}}" class="btn btn-info mt-2">Open</a>
                    <x-error name="file"/>
                </div>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" @if($notice->pined) checked="checked" @endif name="pined" id="pinNotice" type="checkbox" name="pinNotice" />
                        <label class="form-check-label" for="pinNotice">Pin Notice</label>
                    </div>
                </div>

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
