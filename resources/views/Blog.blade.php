@extends('Header')
@section('title', 'Blog/')
@section('content')

<h3 class="text-2xl font-medium text-indigo-500 mt-2 text-center">This is the Blog with static Data</h3>

<div class="row flex flex-wrap h-screen">
@foreach ($data as $key => $value)
    <div class="col-3 mt-4 overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <a href="{{ url('/blog/' . $key) }}" class="w-full block h-full">
            <img alt="blog photo" src="{{ $value['image'] }}" class="max-h-40 w-full object-cover" />
            <div class="bg-white w-full p-4">
                <div class="flex justify-between mb-3">
                    <p class="text-indigo-400 text-2xl font-medium">
                        {{ $value['title'] }}
                    </p>
                </div>
                <p class="text-gray-600 font-light text-md">
                    This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.
                    <a class="inline-flex text-indigo-400" href="{{ url('/blog/' . $key) }}">Read more...</a>
                </p>
                <div class="flex flex-wrap justify-starts items-center mt-3 py-3 border-t-2 text-xs text-white font-medium">
                    <span class="m-1 px-2 py-1 rounded bg-sky-700">
                        <a href="{{ url('/blog/' . $key) }}">Show more..</a>
                    </span>
                </div>
            </div>
        </a>
    </div>
@endforeach
</div>

@endsection
