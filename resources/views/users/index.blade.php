@extends('layouts.app');

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
            <th scope="row"><a href="user/{{ $user->id }}">{{ $user->id }}</a></th>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
          </tr>            
        @endforeach

    </tbody>
  </table>
  {{ $users->links() }}
@endsection