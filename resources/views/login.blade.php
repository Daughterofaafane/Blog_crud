@extends('Header')
@section('content')


@if($message = Session::get('success'))
	<div class="py-2 px-4 rounded-full border-0 text-center text-md font-semibold bg-green-50 text-green-700">{{ $message }}</div>
@endif

<div class="flex flex-wrap items-center justify-center mt-5">
	<form action="{{ route('sample.validate_login') }}" method="POST"
		class="max-w-dm rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
		@csrf
		<div class="flex flex-wrap -mx-3 mb-6">
			<div class="w-full px-3">
				<label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
					Email
				</label>
				<input
					class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
					id="email" type="email" name="email" placeholder="name@gmail.com">
				@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif
			</div>
		</div>
		<div class="flex flex-wrap -mx-3 mb-6">
			<div class="w-full px-3">
				<label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pswd">
					Password
				</label>
				<input
					class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
					id="pswd" type="password" name="password" placeholder="******************">
				@if ($errors->has('password'))
					<span class="text-danger">{{ $errors->first('password') }}</span>
				@endif
			</div>
		</div>
		<div class="md:flex md:items-center">
			<div class="md:w-1/3"></div>
			<div class="md:w-2/3">
				<button
					class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
					type="submit">
					Login
				</button>
			</div>
		</div>
	</form>
</div>
@endsection
