@extends('layouts.backend.app')


@section('title','All Notices')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Technology</h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
   
</div>
<div class="row mb-2" x-data="{
    links: [
        {
            name: '',
            url: '',
            id: 0
        }
    ],
}">
    <div class="">
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.service.store') }}" class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" value="{{ $service->name }}" name="name" id="name" type="text" placeholder="Name"
                        data-sb-validations="required" />
                    <x-error name="name"/>
                </div>

                <template x-for="link in links" :key="link.id">

                <div class="border rounded shadow position-relative my-3">
                    <button 
                        type="button"
                        class="position-absolute right-0 top-0 btn" 
                        style="right:0"
                        x-show="link.id != 0"
                        x-on:click="links = links.filter(item => item !== item.id)"
                        >❌</button>
                    <div class="row px-3 py-2">
                        <div class="mb-3 col-6">
                            <label class="form-label" for="name">Name</label>
                            <input x-model="link.name" class="form-control" value="{{ old('name') }}" :name="`links_name[]`" id="name" type="text" placeholder="Name" required
                                data-sb-validations="required" />
                            <x-error name="links_name.*"/>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label" for="url">URL</label>
                            <input x-model="link.url" required class="form-control" value="{{ old('url') }}" :name="`links_url[]`" id="url" type="url" placeholder="url"
                                data-sb-validations="required" />
                            <x-error name="links_url.*"/>
                        </div>
                    </div>
                    
                </div>

                </template>
                <button type="button" class="btn btn-small btn-primary mr-0 mt-3" x-on:click="links.push({
                    name: '',
                    link: '',
                    id: links.length
                })">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                      </svg>              
                </button>


                <div class="mb-3">
                    <label class="form-label" for="sort">Sort</label>
                    <input class="form-control" value="{{ old('sort') }}" name="sort" id="sort" type="number" placeholder="sort"
                        data-sb-validations="required" />
                    <x-error name="sort"/>
                </div>
                

                
                
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" name="image" accept="image/*" id="image" type="file" />
                    <x-error name="image"/>
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
