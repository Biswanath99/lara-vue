import AddUser      from './components/users/addUser';
import ManageUsers  from './components/users/manageUsers';

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [

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

  ]
}