
@extends('layouts.app')

@section('title', '고객관리 Edit Page')




@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>고객관리 페이지</h5>
                    </div>
                    <div class="ibox-content">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="post" >

                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{$info->id}}}">
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">이름</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="name" value="{{$info->name}}" ></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input type="text" name="email" class="form-control" value="{{$info->email}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10"><input type="password" class="form-control" name="password"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">휴대전화</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" name="phone" class="form-control" value="{{$info->phone}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">주소</label>
                                <div class="col-sm-10">
                                    <div class="row" style="margin-bottom: 2px;">
                                        <div class="col-md-2"><input type="text" name="postcode" placeholder="우편번호" class="form-control" value="{{$info->postcode}}"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="row" style="margin-bottom: 2px;">
                                        <div class="col-md-10"><input type="text" name="address1" placeholder="기본주소" class="form-control" value="{{$info->address1}}"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="row" >
                                        <div class="col-md-10"><input type="text" name="address2" placeholder="상세주소" class="form-control" value="{{$info->address2}}"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                    @if ( empty($info))
                                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                    @else
                                        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                                    @endif

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
