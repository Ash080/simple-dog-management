@include('partials.__header')
<x-messages />
<div class="flex flex-col items-center mt-3 rounded-md max-w-md mx-auto p-5 bg-slate-100">
    <h1 class='text-4xl mb-7'>Register</h1>
    <form class="flex flex-col" action="/store" method="POST">
        @csrf

        <label for="name" class="block text-gray-700 text-sm font-bold mt-2 value={{old('first_name')}}">
            First Name:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="first_name" value={{old('first_name')}}>
        @error('first_name')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <label for="last_name" class="block text-gray-700 text-sm font-bold mt-4 ">
            Last Name:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="last_name" value={{old('last_name')}}>

        @error('last_name')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <label for="user_name" class="block text-gray-700 text-sm font-bold mt-2 value={{old('user_name')}}">
            Username:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="user_name" value={{old('user_name')}}>
        @error('user_name')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <label for="email" class="block text-gray-700 text-sm font-bold mt-4 ">
            Email:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="email" name="email" value={{old('email')}}>

        @error('email')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <label for="password" class="block text-gray-700 text-sm font-bold mt-4 ">
            Password:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="password" name="password">

        @error('password')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mt-4 ">
            Confirm Password:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="password" name="password_confirmation">

        @error('confirm_password')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>
        @enderror
        <button class="mt-6 bg-orange-400 p-1 rounded text-white capitalize hover:bg-orange-600" type="submit">register</button>
        <p>already have an account? login <span class="text-cyan-500"><a href="/login">here</a></span></p>
    </form>
</div>
@include('partials.__footer')
