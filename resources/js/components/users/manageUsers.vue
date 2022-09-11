<template>
    <div class="container mt-4">
        <div class="col-xl-12">
            <h1 class="text-uppercase text-black">Manage Users</h1> <hr>
            <router-link to="/add-user" class="btn btn-success btn-sm">+ &nbsp;Add User</router-link> <hr>

            <form @submit.prevent="filterForm">
                <div class="col-xl-12 m-auto">
                    <div class="row mt-4 mb-4">
                    <div class="col-xl-4">
                        <input type="text" class="form-control" placeholder="name" v-model="filter.name">
                    </div>
                    <div class="col-xl-4">
                        <input type="email" class="form-control" placeholder="email" v-model="filter.email">
                    </div>

                    <div class="col-xl-4">
                        <button type="submit" class="btn btn-sm btn-custom"><i class="fa fa-search"></i></button>
                        <button type="submit" class="btn btn-sm btn-custom" @click="reset"><i class="fa fa-refresh"></i></button>
                    </div>

                  </div>
                </div>
            </form>

            <table class="table-responsive table results mb-0 donor-list tmd text-black table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="eachUser in allUsers" :key="eachUser.id" class="font-md text-black">
                        <td>{{eachUser.userId}}</td>
                        <td>{{eachUser.name}}</td>
                        <td style="word-wrap:break-word">{{eachUser.email}}</td>
                        <td style="word-wrap:break-word">{{eachUser.get_address.address}}</td>
                        <td class="text-center">
                            <router-link :to="'/edit-user/'+eachUser.userId" style="border-radius: 20%;" class="btn btn-success btn-sm mt-2"><i class="fa fa-edit"></i></router-link>
                            <button @click="delUser(eachUser.userId)"  style="border-radius: 20%;" class="btn btn-custom btn-sm mt-2"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
              allUsers:{},
              filter:{
                name :'',
                email:''
              }
            }
        },
        
        methods:
        {
            //Read All User
            async readUsers()
            {
                axios.get('/api/manage-users')
                     .then((response) => {this.allUsers = response.data})
            },

            //Filter User
            filterForm()
            {
                axios.post('/api/filter-user/',this.filter)
                     .then(response => this.allUsers = response.data)
            },

            reset()
            {
                this.filter.name    = '';
                this.filter.email   = '';
                this.readUsers();
            },

            //Delete User
            delUser(userId)
            {
                this.$confirm("Are you sure you want to delete - "+userId+" ?").then(() => {
                    axios.get('/api/del-user/'+userId)
                         .then((response)=> {
                            if (response.data['success'])
                            {
                                this.$fire
                                ({
                                    position: 'top',
                                    icon: 'success',
                                    title: " "+response.data['msg'][0],
                                    showConfirmButton: true,  
                                })
                            } 
                            this.readUsers();
                            
                        });
                     });
            }

        },
        created()
        {
            //This method will call when page is loaded
            this.readUsers()
        },
    }
</script> 