<template>
    <div class="container mt-4">
        
        <h1 class="text-uppercase text-black" >File Upload</h1>
        <hr>
        <form @submit.prevent="saveForm()">
            <div class="col-xl-12">
            <div class="row">

                <div class="col-xl-4">
                    <label for="">File</label>
                    <input type="file" ref="file" v-if="uploadReady" class="font-xs form-control" v-on:change="selectFile()">
                </div>
            </div>
            <hr>
            <div class="col-xl-4 m-auto">
                <button class="btn btn-sm btn-info" type="submit" >Upload</button>
                <router-link to="/manage-files" class="btn btn-success btn-sm">Back</router-link> 
             </div>

            </div>
       </form> 
    </div>
    
</template>

<script>
    export default {
        data(){
            return{
                uploadReady     : true,
                form:
                {
                    docsFile    : "",
                    fileName    : "",
                    docsFileFile: ""
                },
            }
        },
        methods:{

            // Select a new file
            selectFile()
            {
                let file = this.$refs.file.files[0];
                if(file.type == 'image/jpeg'|| file.type =='image/jpg'|| file.type =='image/png' || file.type =='application/pdf' ||file.type =='application/txt')
                { 
                    if (file.size > 1024 * 1024) 
                    {
                        this.$fire({
                                position: 'top',
                                icon: 'success',
                                title: "Document is Too Large - Max 1 MB each !",
                                showConfirmButton: true,
                                
                            })
                            
                        return
                    }else
                    {
                        let fileName = file.name;
                        let fileReader = new FileReader()
                        fileReader.readAsDataURL(file)
                        fileReader.onload = (e) => {
                            this.form.docsFileFile = e.target.result;
                        }
                        this.form.fileName = fileName;  
                    }
                }else{
                    this.$fire({
                        position: 'top',
                        icon: 'success',
                        title: "pdf,png,jpeg or jpg files only !",
                        showConfirmButton: true,
                        
                    })
                            
                }
             },

             //Upload a new file
            saveForm()
            {
                    axios.post('/api/file-upload/',this.form)
                         .then((response) => {
                            if (response.data['success'])
                            {
                                this.$fire({
                                    position: 'top',
                                    icon: 'success',
                                    title: " "+response.data['msg'][0],
                                    showConfirmButton: true,
                                });
                                this.reset();
                            } 
                        })
            },

            //Delete choose name after upload
            reset() 
            {
                 this.uploadReady = false
                 this.$nextTick(() => {
                 this.uploadReady = true
                })
            },


        },
        created() 
        {
           //
        },
    
    }
    </script>