@extends('backend.layouts.auth')
@section('dash')

<div class="content-wrapper">
    <section class="section container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- Full-Width Background for Header -->
                <div class="bg-primary text-white px-3 py-3 d-flex justify-content-between align-items-center rounded-top">
                    <h5 class="mb-0">Slider Edit</h5>
                    <a href="{{ route('slider.index') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <form action="{{ route('slider.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $model->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{ $model->description }}">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-6">
                                        <label class="form-label">Current Image</label><br>
                                        <img class="img-thumbnail shadow-sm border" src="{{ asset($model->image) }}" alt="IMG" width="100px">
                                    </div>
                                </div>
                           <div class="col-md-6">
                                    <label for="read_more" class="form-label">Read More</label>
                                    <input type="url" class="form-control" id="read_more" name="read_more"value="{{ $model->read_more }}">
                                    @error('read_more')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary px-4 ">Update</button>
                            </div>
                        </form>
                    </div> 
                </div>

            </div>
        </div>
    </section>
</div>

@endsection
