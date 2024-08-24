@extends('layouts.app')

@section('title')
edit
@endsection

@section('contant')
<div class="h-screen p-20 flex justify-center">

    <div class="w-full flex items-center justify-center">

        <form action="{{ route('users.update', $user->id) }}" method="post" class="w-[500px] flex flex-col items-center gap-5 p-5 border-2 border-gray-500 rounded-lg">
            @csrf
            @method('put')
            <h1 class="text-2xl capitalize font-medium text-gray-800">update user</h1>
            <x-inputs.input label="name" id="name" type="text" name="name" value="{{ $user->name }}" placeholder="enter user name" />
            <x-inputs.input label="email" id="email" type="email" name="email" value="{{ $user->email }}" placeholder="enter user email" />
            <x-inputs.input label="new password" id="new_password" type="password" name="password" value="{{ old('new_password') }}" placeholder="enter new password" />
            <x-inputs.input label="new password confirmation" id="new_password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="retype new password" />
            <x-buttons.action-button type="submit" backgroundColor="green" icon="fa-solid fa-pen-to-square">update</x-buttons.action-button>
        </form>

    </div>

</div>
@endsection
