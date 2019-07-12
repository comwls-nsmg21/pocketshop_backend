@extends('layouts.app')

@section('title', '고객관리 List Page')




@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>고객관리 리스트</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{ url('/customer') }}">고객관리</a>
                </li>
                {{--                <li class="breadcrumb-item active">--}}
                {{--                    <strong>Static Tables</strong>--}}
                {{--                </li>--}}
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
{{--                        <h5>Basic Table</h5>--}}
                        <div class="ibox-tools">
{{--                            <a class="collapse-link">--}}
{{--                                <i class="fa fa-chevron-up"></i>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                <i class="fa fa-wrench"></i>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu dropdown-user">--}}
{{--                                <li><a href="#" class="dropdown-item">Config option 1</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#" class="dropdown-item">Config option 2</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <a class="close-link">--}}
{{--                                <i class="fa fa-times"></i>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>고객 관리번호</th>
                                <th>이름</th>
                                <th>이메일</th>
                                <th>핸드폰 번호</th>
                                <th>등록일</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $key => $info )
                                <tr>
                                    <th>{{(  $list->total() -( $list->currentPage() - 1) * $list->perPage() - $key )}}</th>
                                    <td>  {{$info->id}} </td>
                                    <td> <a href="/customers/{{$info->id}}"> {{$info->name}} </a></td>
                                    <td>{{$info->email}}</td>
                                    <td>{{$info->phone}}</td>
                                    <td>{{$info->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $list->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
