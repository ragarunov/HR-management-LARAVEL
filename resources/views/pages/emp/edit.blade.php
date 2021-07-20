@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg pl-8">
        <div class="mb-5">
            <a class="text-blue-500 hover:text-blue-800" href="{{ route('emp') }}">
                Go back
            </a>
        </div>
        
        <form action="{{ route('emp.update', $emp) }}" method="post">
            @csrf
            @method('PATCH')

            @error('firstName')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="firstName" class="sr-only">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('firstName') border-red-500 @enderror" value="{{ old('firstName') ?? $emp->first_name }}">
            </div>

            @error('lastName')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="lastName" class="sr-only">Last Name</label>
                <input type="text" id="lastName" name="lastName" 
                placeholder="Last Name" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('lastName') border-red-500 @enderror" value="{{ old('lastName') ?? $emp->last_name }}">
            </div>

            @error('telephone')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="telephone" class="sr-only">Telephone</label>
                <input type="text" id="telephone" name="telephone" 
                placeholder="Telephone" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('telephone') border-red-500 @enderror" value="{{ old('telephone') ?? $emp->telephone }}">
            </div>

            @error('email')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" id="email" name="email" 
                placeholder="Email" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('email') border-red-500 @enderror" value="{{ old('email') ?? $emp->email }}">
            </div>

            @error('role')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label for="role" class="sr-only">Role</label>
                <select name="role" id="role" class="
                @error('role') border-red-500 @enderror
                bg-gray-100 border-2 w-full p-4 rounded-lg">
                    <option value="" disabled>Select a Role</option>
                    @if ($roles->count())
                        @foreach ($roles as $role)
                            <option value={{ $role->id }} 
                            @if ($emp->role_id == $role->id)
                                {{ 'selected' }}
                            @endif
                            >{{ $role->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3
                rounded w-full">Save</button>
            </div>

        </form>
    </div>
</div>
@endsection