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

            <form action="/register" method="POST" class="flex flex-col items-center justify-center card w-[30%] h-[75%] space-y-4">
                {{csrf_field()}}
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>NAME: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('id')?"outline-red-500 outline-1":"")}}" type="text" placeholder="Enter your name" name="uname" value="{{old('uname')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('uname')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1 relative">
                    <div class="w-[45%] italic text-right tracking-wide"><label>ID: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('id')?"outline-red-500 outline-1":"")}}" type="text" placeholder="Enter your id" name="id" value="{{old('id')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('id')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>PASSWORD: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('password')?"outline-red-500 outline-1":"")}}" type="password" placeholder="Enter your password" name="password" value="{{old('password')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('password')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>CONFIRM PASSWORD: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('cpassword')?"outline-red-500 outline-1":"")}}" type="password" placeholder="Enter your password" name="cpassword" value="{{old('cpassword')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('cpassword')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>GENDER</label></div>
                    <div class="flex space-x-5">
                        <div class="flex items-center space-x-2">
                            <input class="w-full h-[32px] rounded-md pl-2 bg-[#17355c] border border-black" type="radio" name="gender" value="Male" {{old('gender')=='Male'?'checked':""}}/>
                            <label for="">Male</label>
                            <div class="absolute ml-2 mt-9">
                                @error('gender')
                                    <div class="error text-xs">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <input class="w-full h-[32px] rounded-md pl-2 bg-[#17355c] border border-black" type="radio" name="gender" value="Female" {{old('gender')=='Female'?'checked':""}}/>
                            <label for="">Female</label>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>EMAIL: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('email')?"outline-red-500 outline-1":"")}}" type="email" placeholder="Enter your email" name="email" value="{{old('email')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('email')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>Contact: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('contact')?"outline-red-500 outline-1":"")}}" type="text" placeholder="Enter your email" name="contact" value="{{old('contact')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('contact')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center space-x-3 py-1">
                    <div class="w-[45%] italic text-right tracking-wide"><label>DATE OF BIRTH: </label></div>
                    <div class="w-[45%] border-b border-teal-500 rounded-md">
                        <input class="input-style focus:outline-none {{($errors->has('dob')?"outline-red-500 outline-1":"")}}" type="date" name="dob" value="{{old('dob')}}"/>
                        <div class="absolute ml-2 mt-1">
                            @error('dob')
                                <div class="error text-xs">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button class="mt-5 py-3 px-7 bg-[#461a45] rounded-lg brightness-[90%] hover:brightness-[80%] hover:transition" name="name">Submit</button>
                </div>

            </form>

        </div>

    </body>
</body>
</html>