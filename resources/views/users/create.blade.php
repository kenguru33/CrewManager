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

                            <div class="col-sm-4 col-md-3 col-lg-2 col-lg-offset-1">
                                <div class="form-group">
                                    <div>
                                        <img src="/images/unknown.jpg" class="center-block img-circle img-responsive col-sm-12" style="max-height: 200px; max-width: 200px;">
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 col-md-9 col-lg-8 col-lg-offset-1 push-down">

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="first_name">Member</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></span>
                                            <input type="text" class="form-control" placeholder="Membership id">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="first_name">Name</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="first_name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="email">Email</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="">Phone</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-mobile"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                                            <input disabled type="text" class="form-control" id="mobile" placeholder="Select Role...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="password">Password:</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" id="password" placeholder="Password...">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="password">Password:</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <input type="text" class="form-control" id="address" placeholder="Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="password">Password:</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <input type="text" class="form-control" id="post_number" placeholder="Post Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{--<label class="control-label col-sm-3" for="password">Password:</label>--}}
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            <input type="text" class="form-control" id="city" placeholder="City">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="button-containen">
                                    <button type="submit" class="col-xs-2 col-xs-offset-1 btn btn-success"><i class="fa fa-floppy-o"></i><span class="hidden-xs">&nbsp;&nbsp;&nbsp;Save</span></button>
                                    <button type="submit" class="col-xs-2 col-xs-offset-2 btn btn-info"><i class="fa fa-remove"></i><span class="hidden-xs">&nbsp;&nbsp;&nbsp;Cancel</span></button>
                                    <button type="submit" class="col-xs-2 col-xs-offset-2 btn btn-danger"><i class="fa fa-trash"></i><span class="hidden-xs">&nbsp;&nbsp;&nbsp;Delete</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

