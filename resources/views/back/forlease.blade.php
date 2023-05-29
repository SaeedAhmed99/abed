@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">All For Lease</h4>
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
                                    <a class="text-gray btn btn-outline-primary" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Add For Lease <i class="fa-solid fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alert_book"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 text-md-nowrap" data-paging='false' id="example1" data-page-length='25'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="books-table">
                                            @foreach ($forleases as $book)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td id="table_name_en{{ $book->id }}">{{$book->name ?? ''}}</td>
                                                    <td id="table_name_ar{{ $book->id }}">{{$book->description ?? ''}}</td>
                                                    <td id="table_short_book_en{{ $book->id }}">{{$book->price ?? ''}}</td>
                                                    <td id="table_short_book_ar{{ $book->id }}">{{$book->location ?? ''}}</td>
                                                    {{-- <td>
                                                        <a href="{{ route('backend.books.show', $book->id) }}" target="_blank" class="btn btn-sm btn-success" title="show"><i class="fa-regular fa-eye"></i></a>
                                                        <a href="#modaldemo9" class="btn btn-sm btn-info editbook" data-effect="effect-fall" data-toggle="modal" title="edit"
                                                        id="table_data_id{{ $book->id }}"
                                                        data-id="{{ $book->id }}"
                                                        data-name-en="{{$name->en ?? ''}}"
                                                        data-name-ar="{{$name->ar ?? ''}}"
                                                        data-short-book-en="{{$short_book->en ?? ''}}"
                                                        data-short-book-ar="{{$short_book->ar ?? ''}}"
                                                        data-language-ar="{{$language->ar ?? ''}}"
                                                        data-language-en="{{$language->en ?? ''}}"
                                                        ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a style="cursor: pointer;" class="btn btn-danger btn-sm delete-book"><i class="fa-solid fa-trash"></i></a>
                                                    </td> --}}
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
                                    <h6 class="modal-title">Add For Lease</h6>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div id="alert_model"></div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" id="add_book" autocomplete="off">
                                        @csrf
                                        {{-- <div class="form-group">
                                            <label>Name Book Arabic</label>
                                            <input type="text" placeholder="Enter name book arabic" class="form-control" name="name_en" required>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Enter name" class="form-control" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" placeholder="Enter description" class="form-control" name="description" required cols="20" rows="10"></textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Short Description Book Arabic</label>
                                            <textarea type="text" placeholder="Enter short description book arabic" class="form-control" name="short_description_ar" required cols="20" rows="10"></textarea>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>price</label>
                                            <input type="number" placeholder="Enter price" class="form-control" name="price" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" placeholder="Enter location" class="form-control" name="location" required>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Language Book Arabic</label>
                                            <input type="text" placeholder="Enter language book arabic" class="form-control" name="language_ar" required>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Image For Lease</label>
                                            <input type="file" multiple class="form-control" id="image_book" name="images[]" required>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Book File (pdf)</label>
                                            <input type="file" class="form-control" id="book_file" name="file" required>
                                        </div> --}}

                                        <div class="modal-footer">
                                            <button class="btn btn-success">Add</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
                                    <h6 class="modal-title">Edit Book</h6>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div id="alert_edit_model"></div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" id="edit_book" autocomplete="off">
                                        @csrf
                                        <input type="hidden" id="edit_form_id" name="id">
                                        <div class="form-group">
                                            <label>Name Book English</label>
                                            <input type="text" placeholder="Enter name book english" class="form-control" id="name_book_en" name="name_en" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name Book Arabic</label>
                                            <input type="text" placeholder="Enter name book arabic" class="form-control" id="name_book_ar" name="name_ar" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description Book English</label>
                                            <textarea type="text" placeholder="Enter short description book english" class="form-control" id="short_book_en" name="short_description_en" required cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description Book Arabic</label>
                                            <textarea type="text" placeholder="Enter short description book arabic" class="form-control" id="short_book_ar" name="short_description_ar" required cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Language Book English</label>
                                            <input type="text" placeholder="Enter language book english" class="form-control" id="language_book_en" name="language_en" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Language Book Arabic</label>
                                            <input type="text" placeholder="Enter language book arabic" class="form-control" id="language_book_ar" name="language_ar" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image Book</label>
                                            <input type="file" class="form-control" id="image_book" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label>Book File (pdf)</label>
                                            <input type="file" class="form-control" id="book_file" name="file">
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
<script src="{{asset ('assets/js/backAssets/forlease.js')}}"></script>
@endsection
