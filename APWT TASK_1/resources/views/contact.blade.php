@extends('layouts/app')

@section('content')

    <div class="h-full flex flex-col">
        <div>
            <div class="flex flex-col ml-32 mt-14">
                <span class="text-lg italic">Get in touch</span>
                <span class="text-[50px] font-bold">Contact Us</span>
            </div>
        </div>
        <div class="flex justify-center h-[300px] relative mt-auto">
            <div class="flex mt-10 absolute w-[80%] justify-between items-center divide-x-2 divide-[#411941] bg-gradient-to-br from-[#411941] to-[#020d20] h-[100px]">
                <div class="flex w-[33%] px-3 items-center">
                    <img class="w-8 h-8 mr-4" src="images/location.png" />
                    <span>533/4, North Ibrahimpur, Kafrul, Mirpur-14, Dhaka-1206</span>
                </div>
                <div class="flex w-[33%] px-3 items-center">
                    <img class="w-8 h-8 mr-4" src="images/contact.png" />
                    <span>(+880)1875609450</span>
                </div>
                <div class="flex w-[33%] px-3 items-center">
                    <img class="w-8 h-8 mr-4" src="images/mail.png" />
                    <span>abysswalkr01@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

@endsection