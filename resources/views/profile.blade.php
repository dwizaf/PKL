<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head></head>
<body>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                    <div class="row">
                        <div class="col-md-20 offset-md-1 col-lg-8 offset-lg-0">
                        <!-- Recently Favorited -->
                        <div class="widget dashboard-container my-adslist">
                
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                            <center><h2> Profile </h2></center><br><br>
                                @csrf
                                <tr>
                                    <th><label>ID</label></th>
                                    <th>{{ old('id', Auth::user()->id) }}</th>
                                </tr>

                                <tr>
                                    <th><label>Nama</label></th>
                                    <th>{{ old('name', Auth::user()->name) }}</th>
                                </tr>

                                <tr>
                                    <th><label>Email</label></th>
                                    <th>{{ old('email', Auth::user()->email) }}</th>
                                </tr>

                                <tr>
                                    <th><label>Role</label></th>
                                    <th>{{ old('role', Auth::user()->role) }}</th>
                                </tr>
                                
                            </table>
                            <div class="pull-right">
                                <a href="/editprofile{{ old('id', Auth::user()->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"> edit</i>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section> --}}
@endsection
</body>
</html>