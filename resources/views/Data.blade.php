@extends('Header')
@section('title', 'Blog/')
@section('content')

    @guest
        <h3 class="text-2xl font-medium text-indigo-500 mt-2 text-center">This is the Blog For Users without crud</h3>
    @else
        <h3 class="text-2xl font-medium text-indigo-500 mt-2 text-center">This is the Blog only For Admin with CRUD</h3>
    @endguest

    @if (session()->has('Nom du session'))
        <div class="py-2 px-4 rounded-full border-0 text-center text-md font-semibold bg-green-50 text-green-700">
            {{ session()->get('Nom du session') }}</div>
    @endif

    @if (session()->has('Session delete'))
        <div class="py-2 px-4 rounded-full border-0 text-center text-md font-semibold bg-red-50 text-red-700">
            {{ session()->get('Session delete') }}</div>
    @endif

    @if (session()->has('Session update'))
        <div class="py-2 px-4 rounded-full border-0 text-center text-md font-semibold bg-yellow-100 text-yellow-700">
            {{ session()->get('Session update') }}</div>
    @endif

    <div class="row flex flex-wrap h-screen">
        @foreach ($datas as $key => $value)
            <div
                class="col-3 mt-4 overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a href="{{ route('resource.show', $value['id']) }}" class="w-full block h-full">
                    <img alt="blog photo" src="{{ $value['image'] }}" class="max-h-40 w-full object-cover" />
                    <div class="bg-white w-full p-4">
                        <div class="flex justify-between mb-3">
                            <p class="text-indigo-400 text-2xl font-medium">
                                {{ $value['title'] }}
                            </p>
                            @if ($value['active'])
                                <span
                                    class="py-2 px-4 rounded-full border-0 text-sm font-semibold bg-green-50 text-green-700">active</span>
                            @else
                                <span
                                    class="py-2 px-4 rounded-full border-0 text-sm font-semibold bg-gray-50 text-gray-700">inactive</span>
                            @endif
                        </div>
                        <p class="text-gray-800 text-sm font-medium mb-2">
                            last update : {{ $value['updated_at'] }}
                        </p>
                        <p class="text-gray-600 font-light text-md">
                            {{ $value['description'] }}
                            <a class="inline-flex text-indigo-400" href="{{ route('resource.show', $value['id']) }}">Read
                                more...</a>
                        </p>
                        <div
                            class="flex flex-wrap justify-starts items-center mt-3 py-3 border-t-2 text-xs text-white font-medium">
                            @guest
                                <span class="m-1 px-2 py-1 rounded bg-sky-500">
                                    <a href="{{ route('resource.show', $value['id']) }}">Show more..</a>
                                </span>
                            @else
                                <span class="m-1 px-2 py-1 rounded bg-indigo-500">
                                    <a href="{{ route('resource.edit', $value['id']) }}">Update</a>
                                </span>
                                <form action="{{ route('resource.destroy', $value['id']) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <span class="m-1 px-2 py-1 rounded bg-red-500">
                                        <button type="submit">Delete</button>
                                    </span>
                                </form>
                            @endguest
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
