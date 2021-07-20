@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg pl-8">
        <div class="mb-5">
            <a class="text-blue-500 hover:text-blue-800" href="{{ route('roles') }}">
                Go back
            </a>
        </div>
        
        <form action="{{ route('roles.update', $role) }}" method="post">
            @csrf
            @method('PATCH')

            @error('roleName')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="roleName" class="sr-only">Role Name</label>
                <input type="text" id="roleName" name="roleName" placeholder="Role Name" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('roleName') border-red-500 @enderror" value="{{ old('roleName') ?? $role->name }}">
            </div>
            
            @error('roleDesc')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="roleDesc" class="sr-only">Description</label>
                <input type="text" id="roleDesc" name="roleDesc" 
                placeholder="Role Description" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('roleDesc') border-red-500 @enderror" value="{{ old('roleDesc') ?? $role->description }}">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3
                rounded w-full">Save</button>
            </div>

        </form>
    </div>
</div>
@endsection