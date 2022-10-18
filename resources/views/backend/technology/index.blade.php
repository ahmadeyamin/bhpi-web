@extends('layouts.backend.app')


@section('title','All Notices')

@section('content')
<div class="page-title d-flex justify-content-between">
    <div>
        <h3>Technology</h3>
        <p class="text-subtitle text-muted">Monitor your account usages</p>
    </div>
    <div>
        <a href="{{ route('admin.technology.create') }}" class="btn btn-primary">Add New</a>
    </div>
</div>
<div class="row mb-2">
    <div class="">
        <div class="card card-statistic">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-light mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Teachers</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @forelse ($technologies as $technology)
                        <tr>
                            <td class="text-bold-500">{{$technology->id}}</td>
                            <td>{{$technology->name}}</td>
                            <td>{{$technology->phone}}</td>
                            <td>{{$technology->email}}</td>
                            <td>{{$technology->teachers_count}}</td>
                            <td>{{$technology->created_at->format('Y-m-d')}}</td>
                            <td>
                                <a href="{{ route('admin.technology.edit',$technology) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                      </svg>
                                      
                                </a>
                            </td>
                        </tr>
                        @empty

                        <tr>
                            <td colspan="6" class="text-bold-500 text-center">
                                <h3>No Data</h3>
                            </td>
                        </tr>
                        @endforelse
                        
                      </tbody>
                    </table>
                  </div>
            </div>
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
