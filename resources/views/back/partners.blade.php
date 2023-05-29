@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Partners</h4>
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
                        <a class="text-gray btn btn-outline-primary" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="alert_partner"></div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>English Name</th>
                                    <th>Arabic Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="partners-table">
                                @foreach ($partners as $partner)
                                    <tr>
                                        @php $name = json_decode($partner->name); @endphp
                                        <td>
                                            <a id="table_link{{ $partner->id }}" href="{{$partner->link ?? ''}}" target="_blank">
                                                <img id="table_logo{{ $partner->id }}" alt="{{$name->en ?? ''}}" class="avatar avatar-xl brround" src="{{ asset($partner->logo ?? '')}}">
                                            </a>
                                        </td>
                                        <td id="table_name_en{{ $partner->id }}">{{$name->en ?? ''}}</td>
                                        <td id="table_name_ar{{ $partner->id }}">{{$name->ar ?? ''}}</td>
                                        <td>
                                            <div class="row row-xs wd-xl-80p">
                                                <div class="col-sm-6 col-md-6 mg-t-10">
                                                    <a style="cursor: pointer;" class="btn btn-danger btn-block delete-partner" partner_id="{{$partner->id}}">Delete</a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 mg-t-10">
                                                    <a style="cursor: pointer;" class="btn btn-info btn-block editpartner"
                                                    data-effect="effect-fall" data-toggle="modal" href="#modaldemo9"
                                                    id="table_data_id{{ $partner->id }}"
                                                    data-id="{{ $partner->id }}"
                                                    data-name-en="{{$name->en ?? ''}}"
                                                    data-name-ar="{{$name->ar ?? ''}}"
                                                    data-link="{{$partner->link ?? ''}}"
                                                    data-logo="{{ asset($partner->logo ?? '')}}"
                                                    >Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal effects -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add Partners</h6>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div id="alert_model"></div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="add_partner" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name En</label>
                                <input type="text" placeholder="Enter name (english)" class="form-control" id="name_en" name="name_en" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Ar</label>
                                <input type="text" placeholder="Enter name (arabic)" class="form-control" id="name_ar" name="name_ar" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input type="text" placeholder="Enter link" class="form-control" id="link" name="link" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" required>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-success">Add</button>
                                <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal effects-->
        <!-- Modal effects -->
        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Edit Partners</h6>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div id="alert_edit_model"></div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="edit_partner" autocomplete="off">
                            @csrf
                            <input type="hidden" id="edit_form_id" name="id">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name En</label>
                                <input type="text" placeholder="Enter name (english)" class="form-control" id="edit_form_name_en" name="name_en" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Ar</label>
                                <input type="text" placeholder="Enter name (arabic)" class="form-control" id="edit_form_name_ar" name="name_ar" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input type="text" placeholder="Enter link" class="form-control" id="edit_form_link" name="link" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                            <div class="form-group">
                                <img id="edit_form_logo" class="avatar avatar-xl brround" src="">
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-secondary" id="closeEditModal" data-dismiss="modal">
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
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script>const csrf = "{{ csrf_token() }}";</script>
    <script src="{{asset ('assets/js/backAssets/partners.js')}}"></script>
@endsection
