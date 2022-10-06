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
        <form action="/login" method="post" class="flex flex-col items-center justify-center card w-[30%] h-[40%] space-y-4">
        @csrf {{ csrf_field() }}
            <div class="w-full flex items-center justify-center space-x-3 py-1">
                <div class="w-[25%] italic text-right tracking-wide"><label>ID: </label></div>
                <div class="w-[45%] border-b border-teal-500 rounded-md">
                    <input class="input-style focus:outline-none {{($errors->has('id')?"outline-red-500 outline-1":"")}}" type="text" placeholder="Enter your id" name="id" value="{{old('id')}}"/>
                </div>
            </div>
            <div class="w-full flex items-center justify-center space-x-3 py-1 relative">
                <div class="w-[25%] italic text-right tracking-wide">
                    <label>PASSWORD: </label>
                    <div class="absolute mt-5 not-italic ml-5">
                        @if($errors->any())
                            <div class="error text-xs">{{$errors->first()}}</div>
                        @endif
                    </div>
                </div>
                <div class="w-[45%] border-b border-teal-500 rounded-md">
                    <input class="input-style focus:outline-none {{($errors->has('password')?"outline-red-500 outline-1":"")}}" type="password" placeholder="Enter your password" name="password" value="{{old('password')}}"/>
                </div>
            </div>
            <div>
                <button class="mt-10 py-3 px-7 bg-[#461a45] rounded-lg brightness-[90%] hover:brightness-[80%] hover:transition" name="name">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>