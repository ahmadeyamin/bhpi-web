@extends('layouts.frontend.app')


@section('content')
<div class="d-flex justify-content-end">
    <button class="mb-2 btn btn-outline-warning  btn-sm outline-none shadow-none text-right d-none"
        onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></button>
</div>
<div id="flash">
    <div class="blocks">
        <div class="container containerpadma">
            <div>
                <img src="{{$technology->image_url}}" alt="padmacountdown" style="width: 100%;"/>
            </div>
            <div class="text-center">
                <h2>
                    {{$technology->name}}
                </h2>
                <p>Email: {{$technology->email}}</p>
                <p>Phone: {{$technology->phone}}</p>
            </div>

            
        </div>

        <div class="row mt-4">
            @foreach ($technology->teachers as $teacher)
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$teacher->avatar_img}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="text-muted">{{$teacher->title}}</p>
                        <h5 class="card-title">{{$teacher->name}} <small class="text-muted">({{$teacher->education}})</small></h5>
                        <a href="mail:{{$teacher->phone}}" class="card-text">Email: {{$teacher->email ?? "N\A"}}</a>
                        <a href="tel:{{$teacher->phone}}" class="card-text">Phone: {{$teacher->phone ?? "N\A"}}</a>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>


@endsection
