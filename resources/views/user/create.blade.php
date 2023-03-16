@extends('master')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create User</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="first_name" placeholder="First Name" class="form-control" id="">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="last_name" placeholder="Last Name" class="form-control" id="">
                                    </div>
                                    <div class="col-sm-12 mt-4">
                                        <input type="submit" class="btn btn-success float-right" value="Create">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection