@extends('layouts.app')
@section('content')
<section class="w-full p-4">
    <div class="relative h-20 w-100">
        <div class="absolute top-0 right-0 ">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit"><a href="/contact-form">Add Contact</a></button>
        </div>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Sr.No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Account
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Message
                </th>

                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($contact as $contacts)

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="pull-left">{{ $contacts->id }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="pull-left">{{ $contacts->firstName }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="pull-left">{{ $contacts->lastName }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="pull-left">{{ $contacts->accounts }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span title="$7000">{{ $contacts->email }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ $contacts->phone }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $contacts->message }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">edit</a>
                </td>
            </tr>
            @endforeach
            <!-- More people... -->
        </tbody>
    </table>
    <div class="flex justify-between">
        <button class="bg-gray-300 hover:bg-gray-400 text-blue-800 font-bold py-2 px-4 rounded-l ">
            Prev
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-blue-800 font-bold py-2 px-4 rounded-right ">
            Next
        </button>
    </div>
</section>
@endsection
