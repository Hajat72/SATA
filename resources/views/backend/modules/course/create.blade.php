@extends('backend.layouts.auth')
@section('dash')
{!! html()->form('POST', route('sessions.store'))->open() !!}

{!! html()->label('Session Name', 'name') !!}
{!! html()->text('name')->class('border px-3 py-2 rounded w-full mb-4') !!}

{!! html()->label('Session Code', 'code') !!}
{!! html()->text('code')->class('border px-3 py-2 rounded w-full mb-4') !!}

{!! html()->submit('Create Session')->class('bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600') !!}

{!! html()->form()->close() !!}

@endsection