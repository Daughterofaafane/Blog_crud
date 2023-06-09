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

<h3 class="text-2xl font-medium text-indigo-500 mt-2 text-center">This is the Blog </h3>
<div class="row flex flex-wrap h-screen">
    <div
        class="col-3 mt-4 overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <div class="w-full block h-full">
            <img alt="blog photo" src="{{ $data['image'] }}" class="max-h-40 w-full object-cover" />
            <div class="bg-white w-full p-4">
                <div class="flex justify-between mb-3">
                    <p class="text-indigo-400 text-2xl font-medium">
                        {{ $data['title'] }}
                    </p>
                </div>
                <p class="text-gray-600 font-light text-md">
                    This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
