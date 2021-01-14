@extends('layouts.app');

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $user->full_name }}
            <div class="float-right">
                <a href="/user/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://via.placeholder.com/150" class="img-thumbnail">
                </div>
                
                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" class="form-control" value="{{ $user->id }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" value="{{ $user->prefixname }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Firstname</label>
                                <input type="text" class="form-control" value="{{ $user->firstname }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->middlename }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->lastname }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Suffix</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->Suffix }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->username }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->email }}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Type</label>
                                <input type="text" class="form-control" name="id" value="{{ $user->type }}" disabled>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection