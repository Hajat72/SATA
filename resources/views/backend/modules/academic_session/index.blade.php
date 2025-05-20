@extends('backend.layouts.auth')
@section('dash')
{!! html()->table()->class('table-auto w-full border-collapse border border-gray-300') !!}

    <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">Name</th>
            <th class="border border-gray-300 px-4 py-2">Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sessions as $session)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $session->name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $session->code }}</td>
            </tr>
        @endforeach
    </tbody>

{!! html()->table()->close() !!}

{{ $sessions->links() }}  {{-- Pagination --}}

@endsection