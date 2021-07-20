@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg pl-8">
        <div class="pl-10 mb-4">
            <button onclick="relocateTo('addRole')" class="bg-blue-500 text-white px-8 py-2 rounded">
                Add new Role
            </button>
        </div>

        <div class="flex justify-center">
            <table class="border-2 w-2/4">
                <thead>
                    <tr>
                        <th class="border-2">Role Name</th>
                        <th class="border-2">Description</th>
                        <th class="border-2">Action</th>
                    </tr>
                </thead>
                <tbody class="border-2">
                    @if ($roles->count())
                        @foreach ($roles as $role)
                        <tr class="border-2">
                            <td class="border-2">{{ $role->name }}</td>
                            <td class="border-2">{{ $role->description }}</td>
                            <td class="border-2 text-center">
                                @if (!($role->id == 1 || $role->name == "Unassigned"))
                                    <a href="{{ route('roles') }}/{{ $role->id }}/edit">Edit</a>
                                    <form action="{{ route('roles.destroy', $role) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit">Remove</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    
                    @else
                        <tr class="border-2">
                            <td colspan="3" class="border-2">
                                There are no Roles set at the moment
                            </td>
                        </tr>
                    @endif

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="1" class="text-center">Totals:</td>
                        <td colspan="2" class="text-center">{{ $roles->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection