@extends('layouts.Panel')
@section('head')

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">افزودن دسته بندی</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">
                                            ‌افزودن محصول جدید
                                        </h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form class="needs-validation">
                                        <div class="modal-body">
                                            <div class="form">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">نام دسته بندی :</label>
                                                        <input name="name" class="form-control" id="validationCustom01" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">وابستگی دسته بندی :</label>
                                                        <select name="paernt_id" class="form-control" id="">
                                                            <option value=""></option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="validationCustom02" class="mb-1">لوگو دسته بندی :</label>
                                                        <input name="logo" class="form-control" id="validationCustom02" type="file">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="submit">ذخیره</button>
                                            <button class="btn btn-dark" type="button" data-dismiss="modal">بستن</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div id="basicScenario" class="product-physical"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
