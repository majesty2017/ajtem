@extends('admins.admin_layouts.login_reg_defaults')

@section('title')
    Admin | Login
@endsection

@section('content')
    @include('admins.auth_includes.auth_contents.login_content')
@endsection