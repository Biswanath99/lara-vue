<template>
    <div class="container mt-4">
        <h1 class="text-uppercase text-black" v-if="this.form.userId != ''">Edit User ({{this.form.userId}})</h1>
        <h1 class="text-uppercase text-black" v-else>Add User</h1>
        <hr>
        <form @submit.prevent="saveForm()">
            <div class="col-xl-12">
            <div class="row">

                <div class="col-xl-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control" v-model="form.name" required>
                </div>

                <div class="col-xl-4">
                    <label for="">Email ID</label>
                    <input type="email" class="form-control" v-model="form.email" required>
                </div>

                <div class="col-xl-4">
                    <label for="">Address</label>
                    <textarea class="form-control" v-model="form.address" required></textarea>
                </div>

            </div>
            <hr>
            <div class="col-xl-4 m-auto">

                <button class="btn btn-sm btn-success" type="submit" v-if="this.form.userId != ''">Update</button>
                <button class="btn btn-sm btn-info" type="submit" v-else>Save</button>
                <button class="btn btn-sm btn-danger"  type="reset" v-if="this.form.userId == ''">Reset</button>
                <router-link class="btn btn-sm btn-custom"  to="/">Back</router-link>
             </div>
            </div>
       </form> 
    </div>
    
</template>

<script>
    export default {
        data(){
            return{
                //csrf token
                
                 csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
               
                form:
                {
                    userId  : '',
                    name    : '',
                    email   : '',
                    address : '',
                },
                
                errors:[],
            }
        },
        methods:{

            clearData()
            {
                this.form.name    = '';
                this.form.email   = '';
                this.form.address = '';
            },
    
            saveForm()
            {
                if(this.form.userId != '')
                {
                    axios.post('/api/update-user/'+this.form.userId,this.form)
                         .then((response) => {
                            if (response.data['success'])
                            {
                                this.$fire({
                                    position: 'top',
                                    icon: 'success',
                                    title: " "+response.data['msg'][0],
                                    showConfirmButton: true
                                })
                            } 
                        })
                }
                else
                {
                    axios.post('/api/add-user/',this.form)
                         .then((response) => {
                            if (response.data['success'])
                            {
                                this.$fire({
                                    position: 'top',
                                    icon: 'success',
                                    title: " "+response.data['msg'][0],
                                    showConfirmButton: true,
                                })
                            } 
                            this.clearData();
                        })
                }
                    
                    
            },

        async readUser()
        {
           const currentUrl = window.location.pathname;
          
            axios.get('/api'+currentUrl)
                 .then((response) => {
                this.form = {
                    userId   :    response.data[0].userId,
                    name     :    response.data[0].name,
                    email    :    response.data[0].email,
                    address  :    response.data[0].address
                 }
            });
        },

        },
        created() 
        {
           this.readUser();
        },
    
    }
    </script>