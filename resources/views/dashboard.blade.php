<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @extends('layouts.app')
                 @section('content')
                    <div class="container">
                        <h1>Welcome to Admin Dashboard</h1>
                        <a href="{{ route('admin.products') }}" class="btn btn-primary">Manage Products</a>
                    </div>
                @endsection
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
