@extends('layouts.app')

@section('title')
show
@endsection

@section('contant')
<div class="h-screen p-20 flex justify-center">

    <div class="w-full flex items-center justify-center">

        <dev class="w-[600px] flex flex-col gap-5 p-5 border-2 border-gray-500 rounded-lg">
            <div class="w-full flex items-center justify-center">
                <h1 class="text-3xl capitalize font-bold text-gray-800 mb-3">user details</h1>
            </div>
            <div class="flex items-center justify-between">
                <h1 class="text-3xl capitalize font-medium text-gray-800">#ID: {{ $user->id }}</h1>
                <div class="flex items-center gap-3">
                    <!-- Link Button with default action and no icon -->
                    <x-buttons.link-button backgroundColor="#ffa500" action="{{ route('users.edit', $user->id) }}">
                        Edit
                    </x-buttons.link-button>

                    <!-- Inline Form Button with background color specified and no icon -->
                    <x-buttons.inline-form-button
                        action="{{ route('users.destroy', $user->id) }}"
                        method="post"
                        actualMethod="delete"
                        backgroundColor="red">
                        Delete
                    </x-buttons.inline-form-button>
                </div>
            </div>
            <p class="text-xl capitalize font-medium text-gray-800">{{ $user->name }}</p>
            <p class="text-md capitalize font-medium text-black">{{ $user->email }}</p>
            <p class="text-base capitalize font-medium text-black">created at: {{ $user->created_at }}</p>
            <p class="text-base capitalize font-medium text-black">updated at: {{ $user->updated_at }}</p>
        </dev>

    </div>

</div>
@endsection
