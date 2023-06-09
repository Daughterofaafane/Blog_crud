@extends('Header')
@section('content')
    @auth
        <div class="flex flex-wrap items-center justify-center mt-5">
            <form method="POST" action="{{ route('resource.store') }}"
                class="max-w-lg rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                            name="title" value="{{ old('title') }}">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Description" name="description" value="{{ old('description') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="image" id="img" placeholder="URL of image"
                            class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="link" id="link" placeholder="Link"
                            class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}">
                    </div>
                </div>
                <div class="md:flex">
                    <div class="md:w-1/3 font-semibold">Active :</div>
                    <div class="md:w-2/3">
                        <div class="form-check">
                            <input class="form-check-input @error('active') is-invalid @enderror" type="radio" name="active"
                                id="gridRadios1" value="1">
                            <label class="form-check-label" for="gridRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('active') is-invalid @enderror" type="radio" name="active"
                                id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center mt-2">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button type="submit"
                            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Add Blog</button>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="d-flex justify-content-center mt-5">
            <span class="alert alert-danger text-center">Only Admin can Access this page.</span>
        </div>
    @endauth
@endsection
