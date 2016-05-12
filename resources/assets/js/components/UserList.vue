<template class="user-list">
    <div class="row">
        <div class="btn-toolbar" role="toolbar">
           <div class="col-xs-12">
               <button class="btn btn-default margin1">Create New User</button>
               <button class="btn btn-info margin1">Refresh</button>
           </div>
        </div>

    </div>
    <div class="row top2 ">
    <div class="panel panel-default">


        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>

                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th class="hidden-sm hidden-xs">Email</th>
                    <th class="hidden-xs">Mobile</th>
                    <th></th>
                    <th></th>
                </tr>

                </thead>
                <tbody>

                <tr v-for="user in users" @click="setSelectedUser(user)">
                    <td>{{user.member_id}}</td>
                    <td>{{user.first_name}} {{user.last_name}}</td>
                    <td class="hidden-sm hidden-xs">{{user.email}}</td>
                    <td class="hidden-xs">{{user.mobile}}</td>
                    <td><a data-toggle="modal" href="#userModal" @click.prevent="setSelectedUser(user)"><span
                            class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    <td><a data-toggle="modal" href="#deleteModal" @click.prevent="setSelectedUser(user)"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- Modal Delete user-->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{selectedUser.first_name}} {{selectedUser.last_name}}
                        ({{selectedUser.member_id}})</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this user? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" @click.prevent="deleteUser">
                        Delete
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Edit/Create user -->
    <div id="userModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{selectedUser.first_name}} {{selectedUser.last_name}}
                        ({{selectedUser.member_id}})</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img src="/images/unknown.jpg" class="center-block img-circle img-responsive col-sm-12"
                                 style="max-height: 200px; max-width: 200px; margin-bottom: 2em;">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <form id="user-form" action="#" method="post" class="form-horizontal col-xs-10 col-xs-offset-1"
                                  role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                class="fa fa-arrow-right"></i></span>
                                        <input type="text" class="form-control" placeholder="Membership id">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                        class="fa fa-refresh"></i>&nbsp;&nbsp;</button>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="first_name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-send"></i>
                                                </button>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" id="mobile"
                                                   placeholder="Phone Number">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i
                                                        class="fa fa-mobile"></i></button>
                                            </span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                                        <input disabled type="text" class="form-control" id="role"
                                               placeholder="Select Role...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">&nbsp;&nbsp;&nbsp;<i
                                                        class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;</button>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password"
                                               placeholder="Password...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        <input type="text" class="form-control" id="address" placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        <input type="text" class="form-control" id="post_number"
                                               placeholder="Post Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="user-form" data-dismiss="modal"><i
                            class="fa fa-floppy-o"></i><span>&nbsp;&nbsp;&nbsp;Save</span></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" @click.prevent="deleteUser"><i
                            class="fa fa-remove"></i><span>&nbsp;&nbsp;&nbsp;Cancel</span></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/ecmascript-6">

    export default {
        /* ES2015 equivalent for: `data: function () {` */

        data() {
            return {
                users: [],
                selectedUser: null
            }
        },
        methods: {
            deleteUser() {
                let users = this.users;
                let user = this.selectedUser;
                $.ajax({
                    url: '/user/' + user.member_id,
                    type: 'DELETE',
                    success: function () {
                        users.splice(users.indexOf(user), 1);
                    }
                });

            },

            editUser() {

            },

            fetchUsers() {
                $.getJSON('/user/', (data) => {
                    this.users = data;
                });
            },
            setSelectedUser(user) {
                alert(user);
                this.selectedUser = user;
            }
        },
        //props: ['users'],

        created() {
            //this.users = JSON.parse(this.users);
            this.fetchUsers();
        }
    }

</script>
<style>
    a {
        color: #333;
    }

    :focus {
        outline: 0;
    }

    .top1 { margin-top:1em; }
    .bottom1 { margin-buttom:1em}
    .margin1 { margin:1em;}
</style>
