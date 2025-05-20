@extends('backend.layouts.auth')
@section('dash')

<div class="content-wrapper">
    <section class="section">
        <div class="row align-items-center">
            <div class="col-6">
                <h5 class="card-header ml-3">Session Create</h5>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-primary btn-sm" style="margin-right: 180px;">Back</a>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
<form action="#" method="POST" class="max-w-lg mx-auto p-4 border rounded-lg shadow">
    @csrf

    <div class="mb-4">
        <label for="name" class="block font-medium">Session Name:</label>
        <input type="text" id="name" name="name" required
               class="w-full border px-3 py-2 rounded focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="code" class="block font-medium">Session Code:</label>
        <input type="text" id="code" name="code" required
               class="w-full border px-3 py-2 rounded focus:ring focus:ring-blue-200">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Create Session
    </button>
</form>
<div>
</div>
                </div>
            </div>
@endsection