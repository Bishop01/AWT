@extends('layouts/app')

@section('content')
<div class="self-center flex flex-col items-center border-2 border-[#461a45] brightness-150 p-10 mt-20 space-y-5">
    <div class="flex w-[600px] space-x-10">
        <p class="font-bold w-[150px] text-right">Name: </p><span class="">{{$student->name}}</span>
    </div>
    <div class="flex w-[600px] space-x-10">
        <p class="font-bold w-[150px] text-right">ID: </p><span>{{$student->id}}</span>
    </div>
    <div class="flex w-[600px] space-x-10">
        <p class="font-bold w-[150px] text-right">Course: </p><span>{{$student->course}}</span>
    </div>
    <div class="flex w-[600px] space-x-10">
        <p class="font-bold w-[150px] text-right">Department: </p><span>{{$student->department}}</span>
    </div>
    <div class="flex w-[600px] space-x-10">
        <p class="font-bold w-[150px] text-right">Academic Year: </p><span>{{$student->year}}</span>
    </div>
</div>
    
@endsection