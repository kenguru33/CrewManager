@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
        	<div class="panel-heading">
                <div class="btn-toolbar">
                    <div class="button col-xs-3 pull-left">
                        <a href="users/create" class="btn btn-info" role="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;New</a>
                    </div>
                    <div class="dropdown col-xs-3 pull-left">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
        	   <table class="table table-striped table-hover">
        	   	<thead>
        	   		<tr>
        	   			<th>#</th>
                        <th>Name</th>
                        <th class="hidden-sm hidden-xs">Email</th>
                        <th class="hidden-xs">Mobile</th>
        	   		</tr>
        	   	</thead>
        	   	<tbody>
                    @foreach($users as $user)
        	   		<tr>
        	   			<td>{{$user->member_id}}</td>
                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td class="hidden-sm hidden-xs">{{$user->email}}</td>
                        <td class="hidden-xs" style="word-break: break-all">{{$user->mobile}}</td>
                        <td><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> </td>
                        <td><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> </td>
        	   		</tr>
                    @endforeach
        	   	</tbody>
        	   </table>
        	</div>
            <div class="panel-footer">
                <ul class="pagination">
                	<li><a href="#">&laquo;</a></li>
                	<li><a href="#">1</a></li>
                	<li><a href="#">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                	<li><a href="#">5</a></li>
                	<li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <div id="app">
            <user-list></user-list>
        </div>
    </div>

 @stop


