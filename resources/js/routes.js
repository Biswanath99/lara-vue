import AddUser      from './components/users/addUser';
import ManageUsers  from './components/users/manageUsers';
import FileUpload   from './components/fileUpload';
import ManageFiles  from './components/manageFiles';

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [

        // Add Edit Manage-Users UI Routes for vue.js //

        {
            path: '/add-user',
            component: AddUser,
            name: "add-user"
        },
        {
            path: '/edit-user/:userId',
            component: AddUser,
            name: "edit-user"
        },
        {
            path: '/',
            component: ManageUsers,
            name: "manage-users"
        },
        {
            path: '/file-upload',
            component: FileUpload,
            name: "file-upload"
        },
        {
            path: '/manage-files',
            component: ManageFiles,
            name: "manage-files"
        }
  ]
}