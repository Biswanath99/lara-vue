<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('object')->insert([

            [
                'id'         => 1,
                'pid'        => NULL,
                'path'       => 'i-mis',
                'name'       => 'IMIS',
                'objectName' => 'Home',
                'objectType' => 'Form',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
    
                [
                    'id'         => 2,
                    'pid'        => 1, # id = 1
                    'path'       => 'i-mis/donor',
                    'name'       => 'donor',
                    'objectName' => 'Donor',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [
                        'id'         => 3,
                        'pid'        => 2, # id = 2
                        'path'       => 'i-mis/donor/add-donor-ind',
                        'name'       => 'add-donor-ind',
                        'objectName' => 'Add Donor Ind',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 4,
                        'pid'        => 2, # id = 2
                        'path'       => 'i-mis/donor/edit-donor-ind',
                        'name'       => 'edit-donor-ind',
                        'objectName' => 'Edit Donor Ind',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 5,
                        'pid'        => 1, # id = 2
                        'path'       => 'i-mis/donor/view-donor-ind',
                        'name'       => 'view-donor-ind',
                        'objectName' => 'View Donor Ind',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 6,
                        'pid'        => 2, # id = 2
                        'path'       => 'i-mis/donor/add-donor-org',
                        'name'       => 'add-donor-org',
                        'objectName' => 'Add Donor Org',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 7,
                        'pid'        => 2, # id = 2
                        'path'       => 'i-mis/donor/edit-donor-org',
                        'name'       => 'edit-donor-org',
                        'objectName' => 'Edit Donor Org',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 8,
                        'pid'        => 2, # id = 2
                        'path'       => 'i-mis/donor/view-donor-org',
                        'name'       => 'view-donor-org',
                        'objectName' => 'View Donor Org',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                [
                    'id'         => 9,
                    'pid'        => 2, # id = 2
                    'path'       => 'i-mis/donor/export-donor',
                    'name'       => 'export-donor',
                    'objectName' => 'Export to Excel Donor',
                    'objectType' => 'Clickable-Item',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],


                [
                    'id'         => 10,
                    'pid'        => 1, # id = 1
                    'path'       => 'i-mis/donation',
                    'name'       => 'donation',
                    'objectName' => 'Donation',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [   'id'         => 11,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/add-donation',
                        'name'       => 'add-donation',
                        'objectName' => 'Add Donation',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 12,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/edit-donation',
                        'name'       => 'edit-donation',
                        'objectName' => 'Edit Donation',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 13,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/view-donation',
                        'name'       => 'view-donation',
                        'objectName' => 'View Donation',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 14,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/payment-received',
                        'name'       => 'payment-received',
                        'objectName' => 'Payment Received',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 15,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/view-payment-received',
                        'name'       => 'view-payment-received',
                        'objectName' => 'View Payment Received',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 16,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/edit-schedule',
                        'name'       => 'edit-schedule',
                        'objectName' => 'Edit Schedule',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 17,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/fund-utilization',
                        'name'       => 'fund-utilization',
                        'objectName' => 'Fund Utilization',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 18,
                        'pid'        => 10, # id = 10
                        'path'       => 'i-mis/donation/view-fund-utilization',
                        'name'       => 'view-fund-utilization',
                        'objectName' => 'View Fund Utilization',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                [
                    'id'         => 19,
                    'pid'        => 10, # id = 10
                    'path'       => 'i-mis/donation/export-donation',
                    'name'       => 'export-donation',
                    'objectName' => 'Export to Excel Donation',
                    'objectType' => 'Clickable-Item',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
 
                [
                    'id'         => 20,
                    'pid'        => 1, #id = 3
                    'path'       => 'i-mis/colonies',
                    'name'       => 'colonies',
                    'objectName' => 'Colonies',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [
                        'id'         => 21,
                        'pid'        => 20, #id =20
                        'path'       => 'i-mis/colonies/add-colonies',
                        'name'       => 'add-colonies',
                        'objectName' => 'Add Colonies',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 22,
                        'pid'        => 20, #id =20
                        'path'       => 'i-mis/colonies/edit-colonies',
                        'name'       => 'edit-colonies',
                        'objectName' => 'Edit Colonies',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 23,
                        'pid'        => 20, #id =20
                        'path'       => 'i-mis/colonies/view-colonies',
                        'name'       => 'view-colonies',
                        'objectName' => 'View Colonies',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 24,
                        'pid'        => 20, #id =20
                        'path'       => 'i-mis/colonies/add-leader',
                        'name'       => 'add-leader',
                        'objectName' => 'Add Leader',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 25,
                        'pid'        => 20, #id =20
                        'path'       => 'i-mis/colonies/view-members',
                        'name'       => 'view-members',
                        'objectName' => 'View Members',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                [
                    'id'         => 26,
                    'pid'        => 20, # id = 20
                    'path'       => 'i-mis/colonies/export-colony',
                    'name'       => 'export-colony',
                    'objectName' => 'Export to Excel Colony',
                    'objectType' => 'Clickable-Item',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                [   
                    'id'         => 27,
                    'pid'        => 1, #id = 1
                    'path'       => 'i-mis/families',
                    'name'       => 'families',
                    'objectName' => 'Families',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [   
                        'id'         => 28,
                        'pid'        => 27, #id = 27
                        'path'       => 'i-mis/families/add-families',
                        'name'       => 'add-families',
                        'objectName' => 'Add Families',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 29,
                        'pid'        => 27, #id = 27
                        'path'       => 'i-mis/families/edit-families',
                        'name'       => 'edit-families',
                        'objectName' => 'Edit Families',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 30,
                        'pid'        => 27, #id = 27
                        'path'       => 'i-mis/families/view-families',
                        'name'       => 'view-families',
                        'objectName' => 'View Families',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 31,
                        'pid'        => 27, #id = 27
                        'path'       => 'i-mis/families/edit-family-members',
                        'name'       => 'edit-family-members',
                        'objectName' => 'Edit Family Members',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 32,
                        'pid'        => 27, #id = 27
                        'path'       => 'i-mis/families/View-family-members',
                        'name'       => 'View-family-members',
                        'objectName' => 'View Family Members',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                [
                    'id'         => 33,
                    'pid'        => 27, # id = 2
                    'path'       => 'i-mis/families/export-family',
                    'name'       => 'export-family',
                    'objectName' => 'Export to Excel Family',
                    'objectType' => 'Clickable-Item',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                [
                    'id'         => 34,
                    'pid'        => 1, #id = 1
                    'path'       => 'i-mis/partners',
                    'name'       => 'partners',
                    'objectName' => 'Partners',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    /* APAL */

                    [
                        'id'         => 35,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/add-apal-partners',
                        'name'       => 'add-partners',
                        'objectName' => 'Add APAL Partners',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 36,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/edit-apal-partner',
                        'name'       => 'edit-partners',
                        'objectName' => 'Edit APAL Partners',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 37,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/view-apal-partners',
                        'name'       => 'view-apal-partners',
                        'objectName' => 'View APAL Partners',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 38,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/manage-apal-locations',
                        'name'       => 'manage-apal-locations',
                        'objectName' => 'Manage APAL Location',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [
                            'id'         => 39,
                            'pid'        => 38, #id = 38
                            'path'       => 'i-mis/partners/manage-apal-locations/add-apal-locations',
                            'name'       => 'add-apal-locations',
                            'objectName' => 'Add APAL Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 40,
                            'pid'        => 38, #id = 38
                            'path'       => 'i-mis/partners/manage-apal-locations/edit-apal-locations',
                            'name'       => 'edit-apal-locations',
                            'objectName' => 'Edit APAL Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 41,
                            'pid'        => 38, #id = 38
                            'path'       => 'i-mis/partners/manage-apal-locations/view-apal-locations',
                            'name'       => 'view-apal-locations',
                            'objectName' => 'View APAL Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 42,
                            'pid'        => 38, #id = 38
                            'path'       => 'i-mis/partners/manage-apal-locations/delete-apal-locations',
                            'name'       => 'delete-apal-locations',
                            'objectName' => 'Delete Apal Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 43,
                            'pid'        => 38, #id = 38
                            'path'       => 'i-mis/partners/manage-apal-locations/manage-members',
                            'name'       => 'manage-members',
                            'objectName' => 'Manage Members',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],  

                            [
                                'id'         => 44,
                                'pid'        => 43, #id = 43
                                'path'       => 'i-mis/partners/manage-apal-locations/manage-members/add-member',
                                'name'       => 'add-member',
                                'objectName' => 'Add Member',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 45,
                                'pid'        => 43, #id = 43
                                'path'       => 'i-mis/partners/manage-apal-locations/manage-members/edit-member',
                                'name'       => 'edit-member',
                                'objectName' => 'Edit Member',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 46,
                                'pid'        => 43, #id = 43
                                'path'       => 'i-mis/partners/manage-apal-locations/manage-members/view-member',
                                'name'       => 'view-member',
                                'objectName' => 'View Member',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 47,
                                'pid'        => 43, #id = 43
                                'path'       => 'i-mis/partners/manage-apal-locations/manage-members/delete-member',
                                'name'       => 'delete-member',
                                'objectName' => 'Delete Member',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        /* TRAINING */
                    [
                        'id'         => 48,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/add-training-partner',
                        'name'       => 'add-training-partner',
                        'objectName' => 'Add Training Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    [
                        'id'         => 49,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/edit-training-partner',
                        'name'       => 'edit-training-partner',
                        'objectName' => 'Edit Training Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 50,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/view-training-partner',
                        'name'       => 'view-training-partner',
                        'objectName' => 'View Training Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 51,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/manage-training-location',
                        'name'       => 'manage-training-location',
                        'objectName' => 'Manage Training Location',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [
                            'id'         => 52,
                            'pid'        => 51, #id = 51
                            'path'       => 'i-mis/partners/manage-training-location/add-training-location',
                            'name'       => 'add-training-location',
                            'objectName' => 'Add Training Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 53,
                            'pid'        => 51, #id = 51
                            'path'       => 'i-mis/partners/manage-training-location/edit-training-location',
                            'name'       => 'edit-training-location',
                            'objectName' => 'Edit Training Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 54,
                            'pid'        => 51, #id = 51
                            'path'       => 'i-mis/partners/manage-training-location/view-training-location',
                            'name'       => 'view-training-location',
                            'objectName' => 'View Training Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 55,
                            'pid'        => 51, #id = 51
                            'path'       => 'i-mis/partners/manage-training-location/allocate-training',
                            'name'       => 'allocate-training',
                            'objectName' => 'Allocate Training',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [
                                'id'         => 56,
                                'pid'        => 55, #id = 55
                                'path'       => 'i-mis/partners/manage-training-location/allocate-training/deallocate',
                                'name'       => 'deallocate',
                                'objectName' => 'Deallocate Training',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        [
                            'id'         => 57,
                            'pid'        => 51, #id = 51
                            'path'       => 'i-mis/partners/manage-training-location/view-allocate-training',
                            'name'       => 'view-allocate-trng',
                            'objectName' => 'View Allocate Training',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    /* INSTITUTE COURSE */

                    [
                        'id'         => 58,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/manage-institute-partner',
                        'name'       => 'manage-institute-partner',
                        'objectName' => 'Manage Institute Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 59,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/add-institute-partner',
                        'name'       => 'add-institute-partner',
                        'objectName' => 'Add Institute Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 60,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/edit-institute-partner',
                        'name'       => 'edit-institute-partner',
                        'objectName' => 'Edit Institute Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'id'         => 61,
                        'pid'        => 34, #id = 34
                        'path'       => 'i-mis/partners/manage-institute-location',
                        'name'       => 'manage-institute-location',
                        'objectName' => 'Manage Institute Location',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [
                            'id'         => 62,
                            'pid'        => 61, #id = 61
                            'path'       => 'i-mis/partners/manage-institute-location/add-ins-location',
                            'name'       => 'add-ins-location',
                            'objectName' => 'Add Institute Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 63,
                            'pid'        => 61, #id = 61
                            'path'       => 'i-mis/partners/manage-institute-location/edit-ins-location',
                            'name'       => 'edit-ins-location',
                            'objectName' => 'Edit Institute Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 64,
                            'pid'        => 61, #id = 61
                            'path'       => 'i-mis/partners/manage-institute-location/view-ins-location',
                            'name'       => 'view-ins-location',
                            'objectName' => 'View Institute Location',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [
                            'id'         => 65,
                            'pid'        => 61, #id = 61
                            'path'       => 'i-mis/partners/manage-institute-location/allocate-course',
                            'name'       => 'allocate-course',
                            'objectName' => 'Allocate Institute',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [
                                'id'         => 66,
                                'pid'        => 65, #id = 65
                                'path'       => 'i-mis/partners/manage-institute-location/allocate-course/deallocate',
                                'name'       => 'deallocate-course',
                                'objectName' => 'Deallocate Course',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        [
                            'id'         => 67,
                            'pid'        => 61, #id = 61
                            'path'       => 'i-mis/partners/manage-institute-location/view-allocate-course',
                            'name'       => 'view-allocate-course',
                            'objectName' => 'View Allocate Course',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [
                        'id'         => 68,
                        'pid'        => 34, # id = 34
                        'path'       => 'i-mis/partners/export-partner',
                        'name'       => 'export-partner',
                        'objectName' => 'Export to Excel Partner',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        // LIVELIHOOD //


                 [   
                     'id'         => 69,
                     'pid'        => 1, # id = 1
                     'path'       => 'i-mis/livelihood',
                     'name'       => 'livelihood',
                     'objectName' => 'Livelihood',
                     'objectType' => 'Form',
                     'created_at' => Carbon::now(),
                     'updated_at' => Carbon::now(),
                 ],

                 /* Business Proposal */
                    [ 
                        'id'         => 70,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/business-proposal',
                        'name'       => 'business-proposal',
                        'objectName' => 'Business Proposal',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        /* New Business Proposal */
                        [ 
                            'id'         => 71,
                            'pid'        => 70, # id = 70
                            'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal',
                            'name'       => 'new-business-proposal',
                            'objectName' => 'New Business Proposal',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [ 
                                'id'         => 72,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/add-business-proposal',
                                'name'       => 'add-business-proposal',
                                'objectName' => 'Add Business Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 73,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/edit-business-proposal',
                                'name'       => 'edit-business-proposal',
                                'objectName' => 'Edit Business Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 74,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/submit-business-proposal',
                                'name'       => 'submit-business-proposal',
                                'objectName' => 'Submit Business Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 75,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/view-business-proposal',
                                'name'       => 'view-business-proposal',
                                'objectName' => 'View Business Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 76,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/add-beneficiary',
                                'name'       => 'add-beneficiary',
                                'objectName' => 'Add Beneficiary',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 77,
                                'pid'        => 71, # id = 71
                                'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/view-beneficiary',
                                'name'       => 'view-beneficiary',
                                'objectName' => 'View Beneficiary',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        /* Export Business Proposal */
                        [ 
                            'id'         => 78,
                            'pid'        => 71, # id = 71
                            'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/export-business-proposal',
                            'name'       => 'export-business-proposal',
                            'objectName' => 'Export to Business Proposal',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                        /* Review Business Proposal */

                        [ 
                            'id'         => 79,
                            'pid'        => 70, # id = 70
                            'path'       => 'i-mis/livelihood/business-proposal/review-business-proposal',
                            'name'       => 'review-business-proposal',
                            'objectName' => 'Review Business Proposal',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                            [ 
                                'id'         => 80,
                                'pid'        => 79, # id = 79
                                'path'       => 'i-mis/livelihood/business-proposal/review-business-proposal/view-reviewed-proposal',
                                'name'       => 'view-reviewed-proposal',
                                'objectName' => 'View Reviewed Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                

                        /* Approve Business Proposal */
                        
                        [ 
                            'id'         => 81,
                            'pid'        => 70, # id = 70
                            'path'       => 'i-mis/livelihood/business-proposal/approve-business-proposal',
                            'name'       => 'approve-business-proposal',
                            'objectName' => 'Approve Business Proposal',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [ 
                                'id'         => 82,
                                'pid'        => 81, # id = 81
                                'path'       => 'i-mis/livelihood/business-proposal/approve-business-proposal/view-approved-proposal',
                                'name'       => 'view-approved-proposal',
                                'objectName' => 'View Approved Proposal',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        /* Special Approval */
                            
                        [ 
                            'id'         => 83,
                            'pid'        => 70, # id = 70
                            'path'       => 'i-mis/livelihood/business-proposal/spl-approval',
                            'name'       => 'spl-approval',
                            'objectName' => 'Special Approval Post PSCM',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    
                    /* Field visit report */

                    [ 
                        'id'         => 84,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/field-visit-report',
                        'name'       => 'field-visit-report',
                        'objectName' => 'Field Visit Report',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [ 
                            'id'         => 85,
                            'pid'        => 84, # id = 84
                            'path'       => 'i-mis/livelihood/field-visit-report/add-report',
                            'name'       => 'add-report',
                            'objectName' => 'Add Field Visit',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 86,
                            'pid'        => 84, # id = 84
                            'path'       => 'i-mis/livelihood/field-visit-report/edit-report',
                            'name'       => 'edit-report',
                            'objectName' => 'Edit Field Visit',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 87,
                            'pid'        => 84, # id = 84
                            'path'       => 'i-mis/livelihood/field-visit-report/report-details',
                            'name'       => 'report-details',
                            'objectName' => 'Field Visit Report Details',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [ 
                                'id'         => 88,
                                'pid'        => 87, # id = 87
                                'path'       => 'i-mis/livelihood/field-visit-report/report-details/pdf-export',
                                'name'       => 'pdf-export',
                                'objectName' => 'Field Visit Report Details PDF Export',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                    [ 
                        'id'         => 89,
                        'pid'        => 84, # id = 84
                        'path'       => 'i-mis/livelihood/field-visit-report/export-field-visit',
                        'name'       => 'export-field-visit',
                        'objectName' => 'Export to Excel Field Visit Report',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    /* Project */

                    [ 
                        'id'         => 90,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/projects',
                        'name'       => 'manage-projects',
                        'objectName' => 'Manage Projects',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [ 
                            'id'         => 91,
                            'pid'        => 90, # id = 90
                            'path'       => 'i-mis/livelihood/projects/edit-project',
                            'name'       => 'edit-project',
                            'objectName' => 'Edit Project',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 92,
                            'pid'        => 90, # id = 90
                            'path'       => 'i-mis/livelihood/projects/edit-tranche',
                            'name'       => 'edit-tranche',
                            'objectName' => 'Edit Tranche',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 93,
                            'pid'        => 90, # id = 90
                            'path'       => 'i-mis/livelihood/projects/edit-benf',
                            'name'       => 'edit-benf',
                            'objectName' => 'Edit Beneficiary',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 94,
                            'pid'        => 90, # id = 90
                            'path'       => 'i-mis/livelihood/projects/benf-pymt-schedule',
                            'name'       => 'benf-pymt-schedule',
                            'objectName' => 'Beneficiary Payment Schedule',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 95,
                            'pid'        => 90, # id = 90
                            'path'       => 'i-mis/livelihood/projects/received-pymt',
                            'name'       => 'received-pymt',
                            'objectName' => 'Received Payments',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [ 
                        'id'         => 96,
                        'pid'        => 90, # id = 90
                        'path'       => 'i-mis/livelihood/projects/export-project',
                        'name'       => 'export-project',
                        'objectName' => 'Export to Excel Project',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    /* Project PRN */

                    [ 
                        'id'         => 97,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/project-PRN',
                        'name'       => 'project-PRN',
                        'objectName' => 'Project PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [ 
                            'id'         => 98,
                            'pid'        => 97, # id = 97
                            'path'       => 'i-mis/livelihood/project-PRN/edit-prn',
                            'name'       => 'edit-prn',
                            'objectName' => 'Edit Livelihood PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 99,
                            'pid'        => 97, # id = 97
                            'path'       => 'i-mis/livelihood/project-PRN/submit-prn',
                            'name'       => 'submit-prn',
                            'objectName' => 'Submit Livelihood PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [ 
                        'id'         => 100,
                        'pid'        => 97, # id = 97
                        'path'       => 'i-mis/livelihood/project-PRN/export-prn',
                        'name'       => 'export-prn',
                        'objectName' => 'Export to Excel Project PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    [ 
                        'id'         => 101,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/project-approved-PRN',
                        'name'       => 'project-approved-PRN',
                        'objectName' => 'Project Approved PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [ 
                            'id'         => 102,
                            'pid'        => 101, # id = 101
                            'path'       => 'i-mis/livelihood/project-approved-PRN/update-payment',
                            'name'       => 'update-payment',
                            'objectName' => 'Update Payment',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 103,
                            'pid'        => 101, # id = 101
                            'path'       => 'i-mis/livelihood/project-approved-PRN/submit-prn',
                            'name'       => 'submit-prn',
                            'objectName' => 'Submit PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [ 
                        'id'         => 104,
                        'pid'        => 101, # id = 101
                        'path'       => 'i-mis/livelihood/project-approved-PRN/export-prn',
                        'name'       => 'export-prn',
                        'objectName' => 'Export to Excel Approved Project PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                
                /* MOU */

                    [ 
                        'id'         => 105,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/manage-mou',
                        'name'       => 'manage-mou',
                        'objectName' => 'Manage MOU',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [ 
                            'id'         => 106,
                            'pid'        => 105, # id = 105
                            'path'       => 'i-mis/livelihood/manage-mou/edit-mou',
                            'name'       => 'edit-mou',
                            'objectName' => 'Edit MOU',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 107,
                            'pid'        => 105, # id = 105
                            'path'       => 'i-mis/livelihood/manage-mou/pymt-schedule',
                            'name'       => 'pymt-schedule',
                            'objectName' => 'Payment Schedule',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 108,
                            'pid'        => 105, # id = 105
                            'path'       => 'i-mis/livelihood/manage-mou/assign-cost-centre',
                            'name'       => 'assign-cost-centre',
                            'objectName' => 'Assign Cost Centre',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 109,
                            'pid'        => 105, # id = 105
                            'path'       => 'i-mis/livelihood/manage-mou/view-rcvd-payment',
                            'name'       => 'view-rcvd-payment',
                            'objectName' => 'View Received Payment',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [ 
                        'id'         => 110,
                        'pid'        => 105, # id = 105
                        'path'       => 'i-mis/livelihood/manage-mou/export-mou',
                        'name'       => 'export-mou',
                        'objectName' => 'Export to Excel MOU',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    /* MOU PRN */

                    [ 
                        'id'         => 111,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/mou-prn',
                        'name'       => 'mou-prn',
                        'objectName' => 'MOU PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    
                        [ 
                            'id'         => 112,
                            'pid'        => 111, # id = 111
                            'path'       => 'i-mis/livelihood/mou-prn/approved-prn',
                            'name'       => 'approved-prn',
                            'objectName' => 'Approved PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 113,
                            'pid'        => 111, # id = 111
                            'path'       => 'i-mis/livelihood/mou-prn/generate-prn',
                            'name'       => 'generate-prn',
                            'objectName' => 'Generate PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [ 
                        'id'         => 114,
                        'pid'        => 111, # id = 111
                        'path'       => 'i-mis/livelihood/mou-prn/export-mou-prn',
                        'name'       => 'export-mou-prn',
                        'objectName' => 'Export to Excel MOU PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    /* Approved PRN */

                    [ 
                        'id'         => 115,
                        'pid'        => 69, # id = 69
                        'path'       => 'i-mis/livelihood/mou-prn/approved-mou-prn',
                        'name'       => 'approved-mou-prn',
                        'objectName' => 'Approved MOU PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        
                        [ 
                            'id'         => 116,
                            'pid'        => 115, # id = 115
                            'path'       => 'i-mis/livelihood/mou-prn/approved-mou-prn/update-payment',
                            'name'       => 'update-payment',
                            'objectName' => 'Update Payment',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [ 
                            'id'         => 117,
                            'pid'        => 115, # id = 115
                            'path'       => 'i-mis/livelihood/mou-prn/approved-mou-prn/pay-prn',
                            'name'       => 'pay-prn',
                            'objectName' => 'Pay PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [ 
                        'id'         => 118,
                        'pid'        => 115, # id = 115
                        'path'       => 'i-mis/livelihood/mou-prn/approved-mou-prn/export-approved-prn',
                        'name'       => 'export-approved-prn',
                        'objectName' => 'Export to Excel Approved MOU PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                // Education //

                [   
                    'id'         => 119,
                    'pid'        => 1, #id = 1
                    'path'       => 'i-mis/education',
                    'name'       => 'education',
                    'objectName' => 'Education',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [   
                        'id'         => 120,
                        'pid'        => 119, #id = 119
                        'path'       => 'i-mis/education/learning-centre',
                        'name'       => 'learning-centre',
                        'objectName' => 'Learning Centre',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [   
                            'id'         => 121,
                            'pid'        => 120, #id = 120
                            'path'       => 'i-mis/education/learning-centre/add-centre',
                            'name'       => 'add-centre',
                            'objectName' => 'Add Centre',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 122,
                            'pid'        => 120, #id = 120
                            'path'       => 'i-mis/education/learning-centre/edit-centre',
                            'name'       => 'edit-centre',
                            'objectName' => 'Edit Centre',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 123,
                            'pid'        => 120, #id = 120
                            'path'       => 'i-mis/education/learning-centre/view-centre',
                            'name'       => 'view-centre',
                            'objectName' => 'View Centre',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 124,
                            'pid'        => 120, #id = 120
                            'path'       => 'i-mis/education/learning-centre/student',
                            'name'       => 'student',
                            'objectName' => 'Centre Student',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [   
                                'id'         => 125,
                                'pid'        => 124, #id = 124
                                'path'       => 'i-mis/education/learning-centre/student/add-student',
                                'name'       => 'add-student',
                                'objectName' => 'Add Student',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 126,
                                'pid'        => 124, #id = 124
                                'path'       => 'i-mis/education/learning-centre/student/edit-student',
                                'name'       => 'edit-student',
                                'objectName' => 'Edit Student',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 127,
                                'pid'        => 124, #id = 124
                                'path'       => 'i-mis/education/learning-centre/student/delete-student',
                                'name'       => 'delete-student',
                                'objectName' => 'Delete Student',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        [   
                            'id'         => 128,
                            'pid'        => 124, #id = 124
                            'path'       => 'i-mis/education/learning-centre/student/export',
                            'name'       => 'export',
                            'objectName' => 'Export to Excel Student',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                        [   
                            'id'         => 129,
                            'pid'        => 120, #id = 120
                            'path'       => 'i-mis/education/learning-centre/staff',
                            'name'       => 'staff',
                            'objectName' => 'Centre Staff',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        
                            [   
                                'id'         => 130,
                                'pid'        => 129, #id = 129
                                'path'       => 'i-mis/education/learning-centre/staff/add-staff',
                                'name'       => 'add-staff',
                                'objectName' => 'Add Staff',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 131,
                                'pid'        => 129, #id = 129
                                'path'       => 'i-mis/education/learning-centre/staff/edit-staff',
                                'name'       => 'edit-staff',
                                'objectName' => 'Edit Staff',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 132,
                                'pid'        => 129, #id = 129
                                'path'       => 'i-mis/education/learning-centre/staff/delete-staff',
                                'name'       => 'delete-staff',
                                'objectName' => 'Delete Staff',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],


                    [   
                        'id'         => 133,
                        'pid'        => 129, #id = 129
                        'path'       => 'i-mis/education/learning-centre/learning-centre-staff-export',
                        'name'       => 'learning-centre-staff-export',
                        'objectName' => 'Export to Excel Staff',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    
               // Scholarship //

                [   
                    'id'         => 134,
                    'pid'        => 119, #id = 119
                    'path'       => 'i-mis/education/scholarship',
                    'name'       => 'scholarship',
                    'objectName' => 'Scholarship',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

                    [   
                        'id'         => 135,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/view-accepted-application',
                        'name'       => 'view-accepted-application',
                        'objectName' => 'View Accepted Application',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [   
                            'id'         => 136,
                            'pid'        => 135, #id = 135
                            'path'       => 'i-mis/education/scholarship/view-accepted-application/export',
                            'name'       => 'view-accepted-application-export',
                            'objectName' => 'Export to Excel View Accepted Application',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 137,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/shortlist-application',
                        'name'       => 'shortlist-application',
                        'objectName' => 'Shortlist Application',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [   
                            'id'         => 138,
                            'pid'        => 137, #id = 137
                            'path'       => 'i-mis/education/scholarship/shortlist-application/view-application',
                            'name'       => 'view-application',
                            'objectName' => 'View Application',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 139,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/committee-review',
                        'name'       => 'committee-review',
                        'objectName' => 'Committee Review',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [   
                            'id'         => 140,
                            'pid'        => 139, #id = 139
                            'path'       => 'i-mis/education/scholarship/committee-review/view-application',
                            'name'       => 'view-application',
                            'objectName' => 'View Application',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 141,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/call-for-interview',
                        'name'       => 'call-for-interview',
                        'objectName' => 'Call For Interview',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 142,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/manage-interview',
                        'name'       => 'manage-interview',
                        'objectName' => 'Manage Interview',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 143,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/allocate-scholarship',
                        'name'       => 'allocate-scholarship',
                        'objectName' => 'Allocate Scholarship',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [   
                            'id'         => 144,
                            'pid'        => 143, #id = 143
                            'path'       => 'i-mis/education/scholarship/allocate-scholarship/add-scholarship',
                            'name'       => 'add-scholarship',
                            'objectName' => 'Add Scholarship',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 145,
                            'pid'        => 143, #id = 143
                            'path'       => 'i-mis/education/scholarship/allocate-scholarship/add-year-wise-data',
                            'name'       => 'add-year-wise-data',
                            'objectName' => 'Add Year Wise Data',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 146,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/manage-scholarship',
                        'name'       => 'manage-scholarship',
                        'objectName' => 'Manage Scholarship',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [   
                        'id'         => 147,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/manage-prn',
                        'name'       => 'manage-prn',
                        'objectName' => 'Manage PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [   
                            'id'         => 148,
                            'pid'        => 147, #id = 147
                            'path'       => 'i-mis/education/scholarship/manage-prn/gen-prn',
                            'name'       => 'gen-prn',
                            'objectName' => 'Generate PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 149,
                            'pid'        => 147, #id = 147
                            'path'       => 'i-mis/education/scholarship/manage-prn/edit-prn',
                            'name'       => 'edit-prn',
                            'objectName' => 'Edit PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 150,
                            'pid'        => 147, #id = 147
                            'path'       => 'i-mis/education/scholarship/manage-prn/submit-prn',
                            'name'       => 'submit-prn',
                            'objectName' => 'Submit PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 151,
                            'pid'        => 147, #id = 147
                            'path'       => 'i-mis/education/scholarship/manage-prn/delete-prn',
                            'name'       => 'delete-prn',
                            'objectName' => 'Delete PRN',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    
                    [   
                        'id'         => 152,
                        'pid'        => 147, #id = 147
                        'path'       => 'i-mis/education/scholarship/manage-prn/export-prn',
                        'name'       => 'export-prn',
                        'objectName' => 'Export to Excel PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                       
                    [   
                        'id'         => 153,
                        'pid'        => 134, #id = 134
                        'path'       => 'i-mis/education/scholarship/approved-prn',
                        'name'       => 'approved-prn',
                        'objectName' => 'Approved PRN',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [   
                            'id'         => 154,
                            'pid'        => 153, #id = 153
                            'path'       => 'i-mis/education/scholarship/approved-prn/update-payment',
                            'name'       => 'update-payment',
                            'objectName' => 'Update Payment',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 155,
                            'pid'        => 153, #id = 153
                            'path'       => 'i-mis/education/scholarship/approved-prn/submit-prn',
                            'name'       => 'approved-prn',
                            'objectName' => 'Approved PRN',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 156,
                            'pid'        => 153, #id = 153
                            'path'       => 'i-mis/education/scholarship/approved-prn/received-pymt',
                            'name'       => 'approved-prn',
                            'objectName' => 'Approved PRN',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 157,
                            'pid'        => 153, #id = 153
                            'path'       => 'i-mis/education/scholarship/approved-prn/view-prn',
                            'name'       => 'approved-prn',
                            'objectName' => 'Approved PRN',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 158,
                        'pid'        => 153, #id = 153
                        'path'       => 'i-mis/education/scholarship/approved-prn/export-approved-prn',
                        'name'       => 'export-approved-prn',
                        'objectName' => 'Export to Excel Approved PRN',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                // C & A //

                [   
                    'id'         => 159,
                    'pid'        => 1, #id = 1
                    'path'       => 'i-mis/cna',
                    'name'       => 'cna',
                    'objectName' => 'C&A',
                    'objectType' => 'Form',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                    [   
                        'id'         => 160,
                        'pid'        => 159, #id = 159
                        'path'       => 'i-mis/cna/manage-media',
                        'name'       => 'manage-media',
                        'objectName' => 'Media Gallery',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [   
                            'id'         => 161,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/view-dwnld-media',
                            'name'       => 'view-dwnld-media',
                            'objectName' => 'View/Download Media',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 162,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/edit-media',
                            'name'       => 'edit-media',
                            'objectName' => 'Edit Media',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 163,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/delete-media',
                            'name'       => 'delete-media',
                            'objectName' => 'Delete Media',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 164,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/attached-to-gallery',
                            'name'       => 'attached-to-gallery',
                            'objectName' => 'Attached To Gallery',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 165,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/view-gallery',
                            'name'       => 'view-gallery',
                            'objectName' => 'View Gallery',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 166,
                            'pid'        => 160, #id = 160
                            'path'       => 'i-mis/cna/manage-media/upload-media',
                            'name'       => 'upload-media',
                            'objectName' => 'Upload Media',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                    [   
                        'id'         => 167,
                        'pid'        => 159, #id = 159
                        'path'       => 'i-mis/cna/media-activity',
                        'name'       => 'media-activity',
                        'objectName' => 'Media Activity',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                        [   
                            'id'         => 168,
                            'pid'        => 167, #id = 167
                            'path'       => 'i-mis/cna/media-activity/add-activity',
                            'name'       => 'add-activity',
                            'objectName' => 'Add Activity',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 169,
                            'pid'        => 167, #id = 167
                            'path'       => 'i-mis/cna/media-activity/edit-activity',
                            'name'       => 'edit-activity',
                            'objectName' => 'Edit Activity',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 170,
                            'pid'        => 167, #id = 167
                            'path'       => 'i-mis/cna/media-activity/upload-media',
                            'name'       => 'upload-media',
                            'objectName' => 'Upload Media',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 171,
                            'pid'        => 167, #id = 167
                            'path'       => 'i-mis/cna/media-activity/view-gallery',
                            'name'       => 'view-gallery',
                            'objectName' => 'View Gallery',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],
                        [   
                            'id'         => 172,
                            'pid'        => 167, #id = 167
                            'path'       => 'i-mis/cna/media-activity/media-gallery',
                            'name'       => 'media-gallery',
                            'objectName' => 'Media Gallery',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                    [   
                        'id'         => 173,
                        'pid'        => 167, #id = 167
                        'path'       => 'i-mis/cna/media-activity/export-media-activity',
                        'name'       => 'export-media-activity',
                        'objectName' => 'Export to Excel Media Activity',
                        'objectType' => 'Clickable-Item',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],

                    // HR //
                    
                    [   
                        'id'         => 174,
                        'pid'        => 1, #id = 1
                        'path'       => 'i-mis/hr',
                        'name'       => 'hr',
                        'objectName' => 'HR',
                        'objectType' => 'Form',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                        [   
                            'id'         => 175,
                            'pid'        => 174, #id = 174
                            'path'       => 'i-mis/hr/manage-employee',
                            'name'       => 'manage-employee',
                            'objectName' => 'Manage Employee',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [   
                                'id'         => 176,
                                'pid'        => 175, #id = 175
                                'path'       => 'i-mis/hr/manage-employee/add-employee',
                                'name'       => 'add-employee',
                                'objectName' => 'Add Employee',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 177,
                                'pid'        => 175, #id = 175
                                'path'       => 'i-mis/hr/manage-employee/edit-employee',
                                'name'       => 'edit-employee',
                                'objectName' => 'Edit Employee',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 178,
                                'pid'        => 175, #id = 175
                                'path'       => 'i-mis/hr/manage-employee/view-employee',
                                'name'       => 'view-employee',
                                'objectName' => 'View Employee',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [   
                                'id'         => 179,
                                'pid'        => 175, #id = 175
                                'path'       => 'i-mis/hr/manage-employee/employee Details',
                                'name'       => 'employee Details',
                                'objectName' => 'Employee Details',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                                [   
                                    'id'         => 180,
                                    'pid'        => 179, #id = 179
                                    'path'       => 'i-mis/hr/manage-employee/employee Details/export-to-pdf',
                                    'name'       => 'export-to-pdf',
                                    'objectName' => 'Export to PDF',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                            [   
                                'id'         => 181,
                                'pid'        => 175, #id = 175
                                'path'       => 'i-mis/hr/manage-employee/status-change',
                                'name'       => 'status-change',
                                'objectName' => 'Employee Status Change',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        [   
                            'id'         => 182,
                            'pid'        => 175, #id = 175
                            'path'       => 'i-mis/hr/manage-employee/export-employee',
                            'name'       => 'export-employee',
                            'objectName' => 'Export to Excel Employee',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                        /* Colony Missed two Items added at last with Pid = 20; */

                            [
                                'id'         => 183,
                                'pid'        => 20, #id =20
                                'path'       => 'i-mis/colonies/edit-leader',
                                'name'       => 'edit-leader',
                                'objectName' => 'Edit Leader',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                            [
                                'id'         => 184,
                                'pid'        => 20, #id =20
                                'path'       => 'i-mis/colonies/manage-family',
                                'name'       => 'manage-family',
                                'objectName' => 'Manage Family',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            /* INS COURSE VIEW */
                            [
                                'id'         => 185,
                                'pid'        => 34, #id = 34
                                'path'       => 'i-mis/partners/view-institute-partner',
                                'name'       => 'edit-institute-partner',
                                'objectName' => 'View Institute Partner',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            /* MANAGE INS COURSE & MANAGE TRAINING */
                            [
                                'id'         => 186,
                                'pid'        => 34, #id = 34
                                'path'       => 'i-mis/partners/manage-institute-course',
                                'name'       => 'manage-institute-course',
                                'objectName' => 'Manage Institute Course',
                                'objectType' => 'Form',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                                [
                                    'id'         => 187,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-institute-course/add-ins-course',
                                    'name'       => 'add-ins-course',
                                    'objectName' => 'Add Institute Course',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [
                                    'id'         => 188,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-institute-course/edit-ins-course',
                                    'name'       => 'edit-ins-course',
                                    'objectName' => 'Edit Institute Course',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [
                                    'id'         => 189,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-institute-course/view-ins-course',
                                    'name'       => 'view-ins-course',
                                    'objectName' => 'View Institute Course',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                            [
                                'id'         => 190,
                                'pid'        => 34, #id = 34
                                'path'       => 'i-mis/partners/manage-partner-trainings',
                                'name'       => 'manage-partner-trainings',
                                'objectName' => 'Manage Partner Trainings',
                                'objectType' => 'Form',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                                [
                                    'id'         => 191,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-partner-trainings/add-training',
                                    'name'       => 'add-training',
                                    'objectName' => 'Add Training',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [
                                    'id'         => 192,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-partner-trainings/edit-training',
                                    'name'       => 'edit-training',
                                    'objectName' => 'Edit Training',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [
                                    'id'         => 193,
                                    'pid'        => 186, #id = 186
                                    'path'       => 'i-mis/partners/manage-partner-trainings/view-training',
                                    'name'       => 'view-training',
                                    'objectName' => 'View Training',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                                /* LEARNING CENTRE EXPORT */

                            [   
                                'id'         => 194,
                                'pid'        => 120, #id = 120
                                'path'       => 'i-mis/education/learning-centre/export',
                                'name'       => 'export',
                                'objectName' => 'Export to Excel Learning Centre',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                            /* VIEW STUDENT COUNT LEARNING CENTRE */

                                [   
                                    'id'         => 195,
                                    'pid'        => 124, #id = 124
                                    'path'       => 'i-mis/education/learning-centre/student/view-student',
                                    'name'       => 'view-student',
                                    'objectName' => 'View Student',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                            /* VIEW CENTRE STAFF LEARNING CENTRE */

                                [   
                                    'id'         => 196,
                                    'pid'        => 129, #id = 129
                                    'path'       => 'i-mis/education/learning-centre/staff/view-staff',
                                    'name'       => 'view-staff',
                                    'objectName' => 'View Staff',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                            /* REVISED POST PCSM BUSINESS PROPOSAL */

                                [ 
                                    'id'         => 197,
                                    'pid'        => 71, # id = 71
                                    'path'       => 'i-mis/livelihood/business-proposal/new-business-proposal/revised-after-PSCM',
                                    'name'       => 'view-beneficiary',
                                    'objectName' => 'View Beneficiary',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                            /* VIEW SPECIAL APPROVE AFTER POST PSCM */

                                    [ 
                                        'id'         => 198,
                                        'pid'        => 83, # id = 83
                                        'path'       => 'i-mis/livelihood/business-proposal/spl-approval/view',
                                        'name'       => 'view-spl-approval',
                                        'objectName' => 'View Special Approval Post PSCM',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],

                            /* ADD MOU */

                            [ 
                                'id'         => 199,
                                'pid'        => 105, # id = 105
                                'path'       => 'i-mis/livelihood/manage-mou/add-mou',
                                'name'       => 'add-mou',
                                'objectName' => 'Add MOU',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],

                        /* MANAGE SCHOLARSHIP */

                                [   
                                    'id'         => 200,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/manage-scholarship/view-application',
                                    'name'       => 'view-application',
                                    'objectName' => 'View Application',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [   
                                    'id'         => 201,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/manage-scholarship/generate-schedule',
                                    'name'       => 'generate-schedule',
                                    'objectName' => 'Generate Schedule',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [   
                                    'id'         => 202,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/manage-scholarship/edit-schedule',
                                    'name'       => 'edit-schedule',
                                    'objectName' => 'Edit Schedule',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [   
                                    'id'         => 203,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/manage-scholarship/rcvd-payment',
                                    'name'       => 'rcvd-payment',
                                    'objectName' => 'Received Payment',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                [   
                                    'id'         => 203,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/manage-scholarship/view-donation',
                                    'name'       => 'view-donation',
                                    'objectName' => 'View Donation',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                                /* Special Approval after post PSCM */
                                    [ 
                                        'id'         => 204,
                                        'pid'        => 83, # id = 83
                                        'path'       => 'i-mis/livelihood/business-proposal/spl-approval/edit-revised-proposal',
                                        'name'       => 'edit-revised-proposal',
                                        'objectName' => 'Edit Special Approval Post PSCM',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [ 
                                        'id'         => 205,
                                        'pid'        => 83, # id = 83
                                        'path'       => 'i-mis/livelihood/business-proposal/spl-approval/submit-revised-proposal',
                                        'name'       => 'submit-revised-proposal',
                                        'objectName' => 'Submit Special Approval Post PSCM',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [ 
                                        'id'         => 206,
                                        'pid'        => 83, # id = 83
                                        'path'       => 'i-mis/livelihood/business-proposal/spl-approval/approved-revised-proposal',
                                        'name'       => 'approved-revised-proposal',
                                        'objectName' => 'Approve Special Approval Post PSCM',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],

                                /* SCHOLARSHIP ASSIGN COST CENTRE AND VIEW */

                                [   
                                    'id'         => 207,
                                    'pid'        => 134, #id = 134
                                    'path'       => 'i-mis/education/scholarship/allocate-for-finance',
                                    'name'       => 'allocate-for-finance',
                                    'objectName' => 'Allocate For Finance',
                                    'objectType' => 'Form',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                                    [   
                                        'id'         => 208,
                                        'pid'        => 207, #id = 207
                                        'path'       => 'i-mis/education/scholarship/allocate-for-finance/assign-cost-centre',
                                        'name'       => 'assign-cost-centre',
                                        'objectName' => 'Assign Cost Centre',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [   
                                        'id'         => 209,
                                        'pid'        => 207, #id = 207
                                        'path'       => 'i-mis/education/scholarship/allocate-for-finance/view-year-wise-data',
                                        'name'       => 'view-year-wise-data',
                                        'objectName' => 'View Year Wise Data',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [   
                                        'id'         => 210,
                                        'pid'        => 207, #id = 207
                                        'path'       => 'i-mis/education/scholarship/allocate-for-finance/add-payment',
                                        'name'       => 'add-payment',
                                        'objectName' => 'Add Payment',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],

                                [
                                    'id'         => 211,
                                    'pid'        => 1, # id = 1
                                    'path'       => 'i-mis/meeting',
                                    'name'       => 'meeting',
                                    'objectName' => 'Meeting',
                                    'objectType' => 'Form',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],
                                    [
                                        'id'         => 212,
                                        'pid'        => 211, # id = 211
                                        'path'       => 'i-mis/meeting/add-meeting',
                                        'name'       => 'add-meeting',
                                        'objectName' => 'Add Meeting',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [
                                        'id'         => 213,
                                        'pid'        => 211, # id = 211
                                        'path'       => 'i-mis/meeting/edit-meeting',
                                        'name'       => 'edit-meeting',
                                        'objectName' => 'Edit Meeting',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                    [
                                        'id'         => 214,
                                        'pid'        => 211, # id = 211
                                        'path'       => 'i-mis/meeting/delete-meeting',
                                        'name'       => 'delete-meeting',
                                        'objectName' => 'Delete Meeting',
                                        'objectType' => 'Clickable-Item',
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ],
                                [
                                    'id'         => 215,
                                    'pid'        => 211, # id = 211
                                    'path'       => 'i-mis/meeting/export-meeting',
                                    'name'       => 'export-meeting',
                                    'objectName' => 'Export to Excel Meeting',
                                    'objectType' => 'Clickable-Item',
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                ],

                        /* HUMANITARIAN AID */

                        [
                            'id'         => 216,
                            'pid'        => 1, # id = 1
                            'path'       => 'i-mis/ha',
                            'name'       => 'ha',
                            'objectName' => 'Humanitarian Aid',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [
                                'id'         => 217,
                                'pid'        => 216, # id = 216
                                'path'       => 'i-mis/ha/manage-humanitarian-aid',
                                'name'       => 'manage-humanitarian-aid',
                                'objectName' => 'Manage Humanitarian Aid',
                                'objectType' => 'Form',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 218,
                                'pid'        => 216, # id = 216
                                'path'       => 'i-mis/ha/add-humanitarian-aid',
                                'name'       => 'add-humanitarian-aid',
                                'objectName' => 'Add Humanitarian Aid',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 219,
                                'pid'        => 216, # id = 216
                                'path'       => 'i-mis/ha/edit-humanitarian-aid',
                                'name'       => 'edit-humanitarian-aid',
                                'objectName' => 'Edit Humanitarian Aid',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 220,
                                'pid'        => 216, # id = 216
                                'path'       => 'i-mis/ha/view-humanitarian-aid',
                                'name'       => 'view-humanitarian-aid',
                                'objectName' => 'View Humanitarian Aid',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [
                                'id'         => 221,
                                'pid'        => 216, # id = 216
                                'path'       => 'i-mis/ha/view-attachment',
                                'name'       => 'view-attachment',
                                'objectName' => 'View Attachment',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                        [
                            'id'         => 222,
                            'pid'        => 216, # id = 216
                            'path'       => 'i-mis/ha/ha-export',
                            'name'       => 'ha-export',
                            'objectName' => 'Export to Excel HA',
                            'objectType' => 'Clickable-Item',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                        /* Assign Cost centre & view */

                        [ 
                            'id'         => 223,
                            'pid'        => 97, # id = 97
                            'path'       => 'i-mis/livelihood/project-PRN/lvh-manage-prn-for-finance',
                            'name'       => 'lvh-manage-prn-for-finance',
                            'objectName' => 'Livelihood Project View And Cost Centres',
                            'objectType' => 'Form',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ],

                            [ 
                                'id'         => 224,
                                'pid'        => 223, # id = 223
                                'path'       => 'i-mis/livelihood/project-PRN/lvh-manage-prn-for-finance/view-project',
                                'name'       => 'view-project',
                                'objectName' => 'View Project',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 225,
                                'pid'        => 223, # id = 223
                                'path'       => 'i-mis/livelihood/project-PRN/lvh-manage-prn-for-finance/view-tranches',
                                'name'       => 'view-tranches',
                                'objectName' => 'View Tranches',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 226,
                                'pid'        => 223, # id = 223
                                'path'       => 'i-mis/livelihood/project-PRN/lvh-manage-prn-for-finance/add-edit-benf-cost-centre',
                                'name'       => 'add-edit-benf-cost-centre',
                                'objectName' => 'Add/Edit Benf Cost Centre',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
                            [ 
                                'id'         => 227,
                                'pid'        => 223, # id = 223
                                'path'       => 'i-mis/livelihood/project-PRN/lvh-manage-prn-for-finance/view-pymt-schedule',
                                'name'       => 'view-pymt-schedule',
                                'objectName' => 'View Pymt Schedule',
                                'objectType' => 'Clickable-Item',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ],
        ]); 
    }
}

