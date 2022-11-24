@extends('layouts.frontend.app')


@section('content')
<div class="d-flex justify-content-end">
    <button class="mb-2 btn btn-outline-warning  btn-sm outline-none shadow-none text-right d-none"
        onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></button>
</div>
<div id="flash">
    <div class="blocks">
        <div class="row mt-4">
            @forelse ($galleries as $gallery)
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top p-1" src="{{$gallery->image_url}}" alt="Card image cap">
                    <div class="card-body mt-3">
                        <p class="text-muted text-center">{{$gallery->created_at->diffForHumans()}}</p>
                        <h5 class="card-title text-center">{{$gallery->title}}</h5>
                        
                    </div>
                  </div>
            </div>
            @empty

            <h2 class="text-danger text-center d-block m-auto">No Data</h2>

            @endforelse
            
        </div>
    </div>
</div>


@endsection
