<template>
    <div class="container mt-4">
        <div class="col-xl-12">
            <h1 class="text-uppercase text-black">Manage Files</h1> <hr>
            <router-link to="/file-upload" class="btn btn-info btn-sm">+ &nbsp;Add New File</router-link> <hr>

            <table class="table-responsive table results mb-0 donor-list tmd text-black table-bordered">
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead> 
                <tbody>
                    <tr v-for="eachFile in allFiles" :key="eachFile.id" class="font-md text-black">
                        <td>{{eachFile.docsName.split('~').reverse().shift()}}</td>
                        <td class="text-center">
                            <button data-toggle="modal" :data-target="'#view-attachment'+eachFile.id" @click="viewFile(eachFile.id)"  style="border-radius: 20%;" class="btn btn-custom btn-sm mt-2"><i class="fa fa-eye"></i></button>
                            
                            <div class="modal fade" role="dialog" tabindex="-1" :id="'view-attachment'+eachFile.id">
                             <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title font-md">
                                        <strong>Document Name:&nbsp;</strong>
                                        <span><strong>{{eachFile.docsName.split('~').reverse().shift()}}</strong></span><br></h6>
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body p-1">
                                        <div class="viewer-body">
                                            <div class="row mx-0 my-1 py-1">
                                                
                                                <div class="col-xl-12 align-self-center">
                                                    <embed :src="fileUrl" width="100%" height="800"  type="application/pdf" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    
                        </div>
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
              fileUrl:'',
              allFiles:{},
            }
        },
        
        methods:
        {
            //Read All Files
            async readFiles()
            {
                axios.get('/api/manage-files')
                     .then((response) => {this.allFiles = response.data})
            },

            //View a file
            async viewFile(docsId)
            {
                axios.get('/api/get-docs/'+docsId)
                     .then((response) => {
                        this.fileUrl = response.data;
                    })
            },
        },
        created()
        {
            this.readFiles()
        },
    }
</script> 