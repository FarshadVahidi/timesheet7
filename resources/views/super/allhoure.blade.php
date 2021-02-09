@extends('user.userdashboard')
@section('dash')
    {{ __('Super Administrator Dashbord') }}
@endsection

@section('content')

    <div class="container">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Hours</th>
                        <th scope="col" >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataall as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->sum}}</td>
                            <td><a href="/hours-detail/{{$data->id}}" class="btn btn-success">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
