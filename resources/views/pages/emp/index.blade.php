@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg pl-8">
        <div class="pl-10 mb-4">
            <button onclick="relocateTo('add')" class="bg-blue-500 text-white px-8 py-2 rounded">Add new Employee</button>
        </div>

        <div class="flex justify-center">
            <table class="border-2 w-2/4">
                <thead>
                    <tr>
                        <th class="border-2">Employee Name</th>
                        <th class="border-2">Role</th>
                        <th class="border-2">Telephone</th>
                        <th class="border-2">Email</th>
                        <th class="border-2">Action</th>
                    </tr>
                </thead>
                <tbody class="border-2">
                @if ($emps->count())
                    @foreach ($emps as $emp)
                    <tr class="border-2">
                            <td class="border-2">{{ $emp->first_name }} {{ $emp->last_name }}</td>
                            <td class="border-2">{{ $emp->role->name }}</td>
                            <td class="border-2">{{ $emp->telephone }}</td>
                            <td class="border-2">{{ $emp->email }}</td>
                            <td class="border-2 text-center">
                                <a href="{{ route('emp') }}/{{ $emp->id }}/edit">Edit</a>
                                

                                <form action="{{ route('emp.destroy', $emp) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @else
                    <tr class="border-2">
                        <td colspan="3" class="border-2">
                            There are no Employees set at the moment
                        </td>
                    </tr>
                @endif
                        
                </tbody>
                <tfoot>
                    <tr class="text-center font-bold">
                        <td colspan="1">Total Employees:</td>
                        <td colspan="2" class="text-right">{{ $emps->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection