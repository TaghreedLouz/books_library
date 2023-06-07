@extends('admin.layouts.layout-admin')
@section('title', 'إنشاء منشور ')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضاقة منشور جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="{{route('admin.categories.store')}}" class="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>الاسم</label>
                            <input required type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

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
