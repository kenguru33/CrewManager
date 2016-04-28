@extends('layouts.app')
@section('content')
    <div class="container">
        <div row>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Information</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form">

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div>
                                        <img src="/images/unknown.jpg"  class="img-rounded img-responsive col-sm-12">
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="first_name">First Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="">Last Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="last_name" placeholder="Enter last namer">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="member_id">Member ID:</label>
                                    <div class="button-group col-sm-9">
                                        <input type="number" class="form-control" id="member_id" placeholder="Enter mebership number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="mobile">Mobile:</label>
                                    <div class="col-sm-9">
                                        <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="password">Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="button-container">
                                    <button type="submit" class="col-sm-2 col-sm-offset-1 btn btn-success">Save</button>
                                    <button type="submit" class="col-sm-2 col-sm-offset-2 btn btn-info">Abort</button>
                                    <button type="submit" class="col-sm-2 col-sm-offset-2 btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@stop

