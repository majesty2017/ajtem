@extends('admins.admin_layouts.login_reg_defaults')

@section('title')
    Admin | Register
@endsection

@section('content')
    @include('admins.auth_includes.auth_contents.register_content')
@endsection
