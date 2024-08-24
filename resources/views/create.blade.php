@extends('layouts.app')

@section('title')
create
@endsection

@section('contant')
<div class="h-screen p-20 flex justify-center">

    <div class="w-full flex items-center justify-center">

        <form action="{{ route('users.store') }}" method="post" class="w-[500px] flex flex-col items-center gap-5 p-5 border-2 border-gray-500 rounded-lg">
            @csrf
            <h1 class="text-2xl capitalize font-medium text-gray-800">add user</h1>
            <x-inputs.input label="name" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="enter user name" />
            <x-inputs.input label="email" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="enter user email" />
            <x-inputs.input label="password" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="enter user password" />
            <x-inputs.input label="password confirmation" id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="retype password" />
            <x-buttons.action-button type="submit" backgroundColor="green" icon="fa-solid fa-plus">create</x-buttons.action-button>
        </form>

    </div>

</div>
@endsection
