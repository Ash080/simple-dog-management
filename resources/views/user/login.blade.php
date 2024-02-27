@include('partials.__header')
<x-messages />
<div class="flex justify-center items-center h-screen">

    <div class="flex flex-col items-center rounded-md max-w-md m-auto px-20 py-12   bg-slate-100">
        <h1 class='text-4xl mb-7'>Login</h1>
        <form class="flex flex-col" action="/login/process" method="POST">
            @csrf
            @error('user_name')
            <p class="text-red-500 text-xs mt-2 p-1">
                {{$message}}
            </p>

            @enderror
            <label for="name" class="block text-gray-700 text-sm font-bold mt-2">
                Username:
            </label>
            <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="user_name">
            <label for="breed" class="block text-gray-700 text-sm font-bold mt-4 ">
                Password:
            </label>

            <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="password" name="password">



            <button class="mt-6 bg-orange-400 p-1 rounded text-white capitalize hover:bg-orange-600" type="submit">Login</button>
            <p>no accout yet? register <span class="text-cyan-500"><a href="/register">here</a></span></p>
        </form>
    </div>
</div>
@include('partials.__footer')
