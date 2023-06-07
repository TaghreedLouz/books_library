@extends('admin.layouts.layout-admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضافة كتاب جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="{{route('admin.books.store')}}" class="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">

                        <div class="col-lg-6">
                            <label>اسم الكتاب</label>
                            <input required type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>التصنيف</label>
                            <select required name="category_id" class="form-control selectpicker @error('category_id') is-invalid @enderror" data-live-search="true" name="param">
                                <option value=""></option>
                                @foreach($category as $category)
                                <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected': ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>اسم المؤلف</label>
                            <input required type="text" value="{{old('author')}}" name="author" class="form-control @error('author') is-invalid @enderror" />
                            @error('author')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>سعر الكتاب</label>
                            <input required type="text" value="{{old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror" />
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>صورة الكتاب</label>
                            <div class="custom-file">
                                <input value="{{old('book_img')}}" required name="book_img" type="file" class="custom-file-input @error('book_img') is-invalid @enderror" id="customFileLang" lang="ar">
                                <label class="custom-file-label" for="customFileLang">اختر الصورة</label>
                                @error('book_img')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>ملف الكتاب</label>
                            <div class="custom-file">
                                <input value="{{old('book_file')}}" required name="book_file" type="file" class="custom-file-input @error('book_file') is-invalid @enderror" id="customFileLang" lang="ar">
                                <label class="custom-file-label" for="customFileLang">اختر الملف</label>
                                @error('book_file')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>تاريخ اصدار الكتاب</label>
                            <input required class="form-control @error('date_publication') is-invalid @enderror" type="date" value="2011-08-19" name="date_publication">
                            @error('date_publication')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <label>التفاصيل</label>
                        <textarea name="description" class="form-control" rows="3">
                        {{old('description')}}
                        </textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-10 mt-10">
                        <button type="submit" class="btn btn-success mr-2">حفظ</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
@section('my-scripts')
<script src="{{asset('admin-assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
<script src="{{asset('admin-assets//js/pages/crud/forms/widgets/select2.js')}}"></script>
@endsection
@endsection