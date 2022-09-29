@extends('layouts/app')

@section('content')

    <div class="flex w-full mt-20 space-x-10 pl-44">
        <div class="card text-center" id="card-1" style="display: none">
            <span class="border-b border-[#411941] w-full pb-2 mb-2 italic">Al-Monaem Khan</span>
            <div class="flex flex-col space-y-3">
                <span>20-42650-1</span>
                <span class="italic">Project Manager & Lead Full-stack Developer</span>
            </div>
        </div>
        <div class="card text-center" id="card-2" style="display: none">
            <span class="border-b border-[#411941] w-full pb-2 mb-2 italic">Md. Shamim Siddiky</span>
            <div class="flex flex-col space-y-3">
                <span>20-42650-1</span>
                <span class="italic">Quality Tester</span>
            </div>
        </div>
        <div class="card text-center" id="card-3" style="display: none">
            <span class="border-b border-[#411941] w-full pb-2 mb-2 italic">Md. Mahmuduzzaman Kamol</span>
            <div class="flex flex-col space-y-3">
                <span>20-42650-1</span>
                <span class="italic">Jr. Front-end Developer</span>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="js/team.js"></script>
@endsection