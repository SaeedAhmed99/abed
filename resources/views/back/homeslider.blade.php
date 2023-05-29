@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Home Page Slider</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="text-gray btn btn-outline-primary" data-effect="effect-fall" data-toggle="modal"
                            href="#modaldemo8">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="alert_slider"></div>
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="slider-table">
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>
                                        <img width="300" style="border-radius: 10px" src="{{ asset($slider->image ?? '')}}">
                                    </td>
                                    <td>
                                        <div class="row row-xs wd-xl-80p">
                                            <div class="col-sm-6 col-md-8 mg-t-10">
                                                <a style="cursor: pointer;" class="btn btn-danger btn-block delete-slider" slider_id="{{$slider->id}}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal effects -->
                <div class="modal" id="modaldemo8">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Add new slider</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div id="alert_edit_model"></div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" id="add_slider" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/png, image/jpg, image/jpeg" >
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-secondary" id="closeModal"
                                            data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal effects-->
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')
    <script>const csrf = "{{ csrf_token() }}";</script>
    <script src="{{asset ('assets/js/backAssets/homeslider.js')}}"></script>
@endsection
