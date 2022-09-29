@extends('layouts/app')

@section('content')

    <div class="flex w-full">
        <div class="flex flex-col w-[50%]">
            <div class="mt-auto p-5 ml-5">
                <p class="text-[50px]">About Us</p>
                <p class="italic">
                    We are a team of web developer. We build websites on different technologies like Next JS or ASP. We have people with knowledge on different technologiese so that we can tackle any sort of obstacles given by our clients. You can check our services and our team easily by navigating through the topbar. If you want to give us a chance, please contact us through our given contact information on the Contact Us page.
                </p>
            </div>
        </div>
        <div class="flex w-[50%]">
            <div class="relative flex items-center mt-20 ml-44">
                <img class="rounded-full mt-10 w-[300px] h-[300px] shadow-lg" src="images/development.webp" />
                <img class="absolute ml-10 -z-10 rounded-full w-[300px] h-[300px] shadow-lg" src="images/webapp.jpg" />
            </div>
        </div>
    </div>

@endsection