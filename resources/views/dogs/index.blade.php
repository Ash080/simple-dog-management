@include('partials.__header')
<x-navbar />
<section>

    <div class="md:flex md:justify-center md:items-center mt-5 flex-col overflow-x-scroll md:overflow-hidden ">
        <table class="mx-auto">
            <thead class=" text-center border-b border-gray-500 font-serif uppercase">

                <tr>
                    <th scope="col" class="py-3 px-6">name</th>
                    <th scope="col" class="py-3 px-6">breed</th>
                    <th scope="col" class="py-3 px-6">age</th>
                    <th scope="col" class="py-3 px-6">action</th>
                </tr>
            </thead>

            <tbody class="text-center all">
                @foreach ($dogs as $dog)

                <tr class="border-b border-gray-200 text-sm">
                    <td class="py-2 px-6">
                        {{$dog->name}}
                    </td>
                    <td class="py-2 px-6">{{$dog->breed}}</td>
                    <td class="py-2 px-6">{{$dog->age}}</td>

                    <td class="py-2 flex">
                        <a class="bg-blue-500 hover:bg-blue-600 mr-4 rounded px-2 py-1 w-16 text-xs cursor-pointer text-white" href="/dog/{{$dog->id}}/edit">Edit</a>
                        <form action="/dog/{{$dog->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="bg-red-500 hover:bg-red-700 rounded text-white px-2 py-1 text-xs mr-4">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="px-2 py-4">{{$dogs->links()}}</div>
    </div>
</section>
@include('partials.__footer')
