@extends('../../layout')

@section('content')
    <div class="section">
        <div class="row">
            <h2>ユーザー一覧</h2>
        </div>
        <div class="row m-2 float-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="DELETE">

                            <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $users->links() !!}
    </div>
@endsection
