@extends('layouts.admin')

@section('content-header')
<h1 class="class">Dashboard</h1>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <!-- <div class="container-fluid mb-2">
            <h1 class="m-0">Dashboard</h1>
        </div> -->
    </div>
    <div class="content">
        <div class="row align-items-center justify-content-center" style="height: 60vh">
            <div class="col-6 ">
                <div class="card">
                    <div class="card-header text-center">Selamat Datang di Aplikasi PERPUSWEB</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                Detail Login
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Nama</div>
                            <div class="col-7">{{ Auth::user()->nama_lengkap }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Username</div>
                            <div class="col-7">{{ Auth::user()->username }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Role</div>
                            <div class="col-7">{{ Auth::user()->user_type }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection