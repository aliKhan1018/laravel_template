@extends('master')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1 class="">List User</h1>
            <a href="{{url('user/create')}}" class="btn btn-outline-info ">Create User</a>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($users as $u)
                                                <tr>
                                                    <td>{{$u->first_name}}</td>
                                                    <td>{{$u->last_name}}</td>
                                                    <td>{{$u->age}}</td>
                                                </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">
                                                            <p class="text-danger text-center">No User Found</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection