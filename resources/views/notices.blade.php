@extends('layouts.frontend.app')


@section('content')
<div class="d-flex justify-content-end">
    <button class="mb-2 btn btn-outline-warning  btn-sm outline-none shadow-none text-right d-none"
        onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></button>
</div>
<div id="flash">
     <div class="blocks">

        <div id="notice-board" class="box p-4">
            <div class="notice-board-bg">
                <h2 id="notice-board-bg">নোটিশ বোর্ড</h2>
                <hr>
                <div id="notice-board-ticker">
                    <ul class="list list-unstyled">
                        @foreach ($notices as $notice)
                        <li class="clearfix">
                            <a href="{{asset(Storage::url($notice->url))}}">
                                <i class="text-green fa fa-arrow-circle-right"></i>
                                <span>{{$notice->title}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-3">
            {{$notices->links('pagination::bootstrap-4')}}
        </div>
        
        
        

        
    </div>
</div>


@endsection
