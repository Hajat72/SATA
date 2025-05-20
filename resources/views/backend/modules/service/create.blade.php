@extends('backend.layouts.auth')
@section('dash')
<div class="content-wrapper">
    <section class="section">
        <div class="row align-items-center">
            <div class="col-6">
                <h5 class="card-header ml-3">Service Create</h5>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('service.index') }}" class="btn btn-primary btn-sm" style="margin-right: 180px;">Back</a>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                
                    <!-- General Form Elements -->
                    <form action="{{ Route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST') 
                        
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                          <div class="col-sm-10">
                              <input type="icon" class="form-control" id="icon" name="icon">
                          </div>
                      </div>
                  </div>
  
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" style="margin-left: 25px">Submit</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </section>
</div>
  @endsection