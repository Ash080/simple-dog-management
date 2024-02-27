@include('partials.__header')
<x-navbar />
<div class="flex flex-col items-center mt-3 rounded-md max-w-md mx-auto p-5 bg-slate-100">
    <h1 class='text-4xl mb-7'>Addnew</h1>
    <form class="flex flex-col" action="/dog/create" method="POST">
        @csrf
        <label for="name" class="block text-gray-700 text-sm font-bold mt-2 ">
            Name:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="name" value={{old('name')}}>
        @error('name')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>

        @enderror
        <label for="breed" class="block text-gray-700 text-sm font-bold mt-4 ">
            Breed:
        </label>

        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1" type="text" name="breed" value={{old('breed')}}>
        @error('breed')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>

        @enderror
        <label for="age" class="block text-gray-700 text-sm font-bold mt-4 ">
            Age:
        </label>
        <input class="bg-gray-200 rounded focus:outline-none border-b-4 border-gray-400  p-1 " type="number" name="age" value={{old('age')}}>
        @error('age')
        <p class="text-red-500 text-xs mt-2 p-1">
            {{$message}}
        </p>

        @enderror
        <button class="m-6 bg-orange-400 p-1 rounded text-white capitalize hover:bg-orange-600" type="submit">add new</button>
    </form>
</div>
@include('partials.__footer')
{{-- name, breed, age, --}}
