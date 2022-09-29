@extends('layouts/app')
@section('content')

    <div class="flex flex-col ml-[100px] mt-[70px] space-y-2">
        <div class="text-xl italic">My Services</div>
        <div class="ml-10">
            <ul class="list-disc space-y-3">
                @foreach ($services as $key=>$service)
                    <li id="li-{{$key}}" class="item" style="display: none">
                        {{$service}}
                    </li>
                @endforeach
            </ul> 
        </div>
    </div>
    
@endsection

@section('scripts')
    <script src="js/service.js"></script>
@endsection