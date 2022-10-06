<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="flex flex-col bg-gradient-to-br from-[#012e67] to-[#461a45] text-white h-screen w-screen">
    <div class="flex items-center justify-center h-full">
    <form action="/contact" method="post" class="flex flex-col items-start justify-start pl-5 pt-3 card w-[30%] h-[45%] space-y-4">
            @csrf {{ csrf_field() }}
            <div class="w-full flex items-center space-x-3 py-1 pr-5">
                <div class="w-[15%] italic text-right tracking-wide"><label>Email: </label></div>
                <div class="w-[85%] border-b border-teal-500 rounded-md">
                    <input class="input-style focus:outline-none {{($errors->has('id')?"outline-red-500 outline-1":"")}}" type="email" placeholder="Enter your email" name="email"/>
                </div>
            </div>
            <div class="w-full flex items-center space-x-3 py-1 pr-5 relative">
                <div class="w-[15%] italic text-right tracking-wide"><label>Subject: </label></div>
                <div class="w-[85%] border-b border-teal-500 rounded-md"><input class="input-style focus:outline-none" type="text" name="subject"/></div>
            </div>
            <div class="w-full h-full flex space-x-3 py-1 pr-5 relative">
                <div class="w-full h-full border-b border-teal-500 rounded-md">
                    <textarea class="resize-none h-full w-full rounded-md pl-2 bg-[#17355c] outline-none focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text-area" placeholder="Type your text" name="text"></textarea>
                </div>
            </div>
            <div class="pb-5">
                <button class="py-3 px-7 bg-[#461a45] rounded-lg brightness-[90%] hover:brightness-[80%] hover:transition" name="send">Send</button>
            </div>
        </form>
    </div>
</body>
</html>