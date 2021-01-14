@extends('layouts.app');

@section('content')
<form action="" class="form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card">
        <div class="card-header">
            {{ $user->full_name }}
            <div class="float-right">
                <input type="submit" value="Update" class="btn btn-sm btn-primary">
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ $user->avatar }}" class="img-thumbnail">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="profile_photo">
                            <label class="custom-file-label" for="photo" aria-describedby="inputGroupFileAddon02">Choose
                                file</label>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                @php
                                $list = ['Mr', 'Mrs', 'Ms'];
                                @endphp
                                <select name="prefixname" class="form-control">
                                    @foreach ($list as $i)
                                    <option value="{{ $i }}" @if($user->prefixname==$i) selected @endif>{{ $i }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Firstname</label>
                                <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="middlename" value="{{ $user->middlename }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Suffix</label>
                                <input type="text" class="form-control" name="suffixname" value="{{ $user->suffixname }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Prefix</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Type</label>
                                <input type="text" class="form-control" name="type" value="{{ $user->type }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection