@extends('layouts.Panel')
@section('head')

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <!-- head -->
            <h6 class="card-title text-dark">
                لیست همه دسته بندی های محصولات
            </h6>
            <!-- Single Date Picker and button -->
            <div class="heading-elements">
                <ul class="list-inline mb-0 d-flex align-items-center">
                    <li>
                        <button data-toggle="modal" data-target="#add-new" type="button" class="btn btn-primary"><i class="bx bx-plus"></i><span class="align-middle ml-25">افزودن آیتم جدید</span></button>
                        <div class="modal fade text-left" id="add-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h3 class="modal-title white" id="myModalLabel1">افزودن آیتم جدید</h3>
                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                            <i class="bx bx-x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('panel_categories_store') }}" method="post">
                                        @csrf
                                        <div class="modal-body pt-2">
                                            <div class="form-group">
                                                <label class="mb-1">نام دسته بندی <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}" required />
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="mb-1">در زیر مجموعه </label>
                                                <select name="parent_id" class="select2 form-control">
                                                    <option></option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label class="mb-1">تصویر دسته بندی</label>
                                                <input type="file" class="form-control" name="icon" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">بستن</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ml-1">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">افزودن</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- datatable start -->
        <div class="table-responsive">


        </div>
        <!-- datatable ends -->
    </div>

@endsection

@section('script')


@endsection
