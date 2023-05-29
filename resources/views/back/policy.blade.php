@extends('layouts.master')
@section('css')
    <style>
        .ck-editor__editable {
            height: 400px;
            width: 100%;
        }
    </style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Policy</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="container-fluid px-2">
            <div class="col-lg-12 col-md-12 g-4">
                <div class="col-sm-12 col-xl-12 card">
                    <div class=" rounded h-100 card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="mb-0 mt-4">Our policies text</h4>
                        </div>
                        <div id="alert_policy_en"></div>
                        <p class="mt-4">English text:</p>
                        @php $description = json_decode($get_policies_info->description); @endphp
                        <form method="post" id="update_our_policies_en">
                            @csrf
                            <div class="d-flex mb-2 p-4 form-floating card">
                                <textarea name="description_en" placeholder="Enter our policies text (english)" class="form-control"
                                    id="description_en">{{$description->en ?? ''}}</textarea>
                                <button class="btn btn-primary ms-2 mt-3">Update</button>
                            </div>
                        </form>
                        <div id="alert_policy_ar"></div>
                        <p class="mt-4">Arabic text: </p>
                        <form method="post" id="update_our_policies_ar">
                            @csrf
                            <div class="d-flex mb-2 p-4 form-floating card">
                                <textarea name="description_ar" placeholder="Enter our policies text (arabic)" class="form-control" id="description_ar">{{$description->ar ?? ''}}</textarea>
                                <button class="btn btn-primary ms-2 mt-3">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div id="alert_meta"></div>
                    <div class="card-body row">
                        <div class="col-sm-12 col-xl-6 mt-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h4 class="mb-0">Privacy policy page meta tags (SEO)</h4>
                            </div>

                            <p class="mt-4">English SEO: </p>
                            @php $meta_title = json_decode($get_policies_info->meta_title); @endphp
                            <form method="post" id="update_meta_title_en">
                                @csrf
                                <label>Meta title (English)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_title_en" value="{{$meta_title->en ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta title (english)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>
                            @php $meta_keywords = json_decode($get_policies_info->meta_keywords); @endphp
                            <form method="post" id="update_meta_keywords_en">
                                @csrf
                                <label>Meta keywords (English)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_keywords_en" value="{{$meta_keywords->en ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta keywords (english)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>
                            @php $meta_description = json_decode($get_policies_info->meta_description); @endphp
                            <form method="post" id="update_meta_description_en">
                                @csrf
                                <label>Meta description (English)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_description_en" value="{{$meta_description->en ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta description (english)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-xl-6 mt-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h4 class="mb-0">Privacy policy page Meta tags (SEO)</h4>
                            </div>
                            <p class="mt-4">Arabic SEO: </p>
                            <form method="post" id="update_meta_title_ar">
                                @csrf
                                <label>Meta title (Arabic)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_title_ar" value="{{$meta_title->ar ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta title (arabic)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>

                            <form method="post" id="update_meta_keywords_ar">
                                @csrf
                                <label>Meta keywords (Arabic)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_keywords_ar" value="{{$meta_keywords->ar ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta keywords (arabic)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>

                            <form method="post" id="update_meta_description_ar">
                                @csrf
                                <label>Meta description (Arabic)</label>
                                <div class="d-flex mb-2 form-floating">
                                    <input name="meta_description_ar" value="{{$meta_description->ar ?? ''}}" type="text" class="form-control"
                                        placeholder="Enter meta description (arabic)">
                                    <button class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script src="{{ asset('assets/js/ckeditor/build/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description_en'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'fontsize', '|',
                        'alignment', '|',
                        'fontColor', 'fontBackgroundColor', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'blockQuote', '|',
                    ],
                    shouldNotGroupWhenFull: true
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description_ar'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'fontsize', '|',
                        'alignment', '|',
                        'fontColor', 'fontBackgroundColor', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'blockQuote', '|',
                    ],
                    shouldNotGroupWhenFull: true
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{asset ('assets/js/backAssets/policy.js')}}"></script>

@endsection
