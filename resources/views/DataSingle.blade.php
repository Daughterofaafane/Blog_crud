@extends('Header')
@section('title', 'Single blog/')

@section('content')
    <a href="{{ url()->previous() }}">
        <svg fill="none" stroke="currentColor" stroke-width="1.5" style="width:35" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
    </a>

    <h3 class="text-2xl font-medium text-indigo-500 text-center">This is the Single Blog </h3>
    <div
        class="overflow-hidden mt-5 shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <img alt="blog photo" src="{{ $datas['image'] }}" class="max-h-40 w-full object-cover" />
        <div class="bg-white w-full p-4">
            <div class="flex justify-between mb-3">
                <p class="text-indigo-400 text-2xl font-medium">
                    {{ $datas['title'] }}
                </p>
                @if ($datas['active'])
                    <span
                        class="py-2 px-4 rounded-full border-0 text-sm font-semibold bg-green-50 text-green-700">active</span>
                @else
                    <span
                        class="py-2 px-4 rounded-full border-0 text-sm font-semibold bg-gray-50 text-gray-700">inactive</span>
                @endif
            </div>
            <p class="text-gray-800 text-sm font-medium mb-2">
                last update : {{ $datas['updated_at'] }}
            </p>
            <p class="text-gray-600 font-light text-md">
                {{ $datas['description'] }}
                <a href=""></a>
            </p>
            @auth
                <div class="flex flex-wrap justify-starts items-center mt-3 py-3 border-t-2 text-xs text-white font-medium">
                    <span class="m-1 px-2 py-1 rounded bg-indigo-500">
                        <a href="{{ route('resource.edit', $datas['id']) }}">Update</a>
                    </span>
                    <form action="{{ route('resource.destroy', $datas['id']) }}" method="post">
                        @csrf
                        @method('delete')
                        <span class="m-1 px-2 py-1 rounded bg-red-500">
                            <button type="submit">Delete</button>
                        </span>
                    </form>
                </div>
            @endauth
        </div>
    </div>


@endsection
