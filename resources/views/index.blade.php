@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg pl-8">
        <div class="flex justify-center">
            <table class="w-2/4">
                <tr>
                    <td class="text-left">
                        <button onclick="relocateTo('add')" class="btn w-2/3 bg-blue-500 text-white px-8 py-2 rounded">
                            Add Employee
                        </button>
                    </td>
                    <td class="text-right">
                        <button onclick="relocateTo('work')" class="w-2/3 bg-blue-500 text-white px-8 py-2 rounded">
                            Work Schedules
                        </button>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td class="text-left">
                        <button onclick="relocateTo('emp')" class="w-2/3 bg-blue-500 text-white px-8 py-2 rounded">
                            Manage Employees
                        </button>
                    </td>
                    <td class="text-right">
                        <button onclick="relocateTo('roles')" class="w-2/3 bg-blue-500 text-white px-8 py-2 rounded">
                            Manage Roles
                        </button>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button onclick="relocateTo('tree')" class="w-1/4 bg-blue-500 text-white py-2 rounded">
                            Company Tree
                        </button>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button onclick="relocateTo('contact')" class="w-1/4 bg-blue-500 text-white py-2 rounded">
                            Contact
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection