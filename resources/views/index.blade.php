@extends('layouts.app')

@section('title')
home
@endsection

@section('contant')
<div class="min-h-screen h-fit p-20 flex justify-center">

    <div class="w-[900px]">
        {{-- Table --}}
        <livewire:users-table />
    </div>

</div>
@endsection
