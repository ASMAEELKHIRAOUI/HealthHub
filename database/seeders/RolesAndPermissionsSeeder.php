<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        $viewProfile = 'view profile';

        $viewDashbaord = 'view dashboard';

        $placeOrder = 'place order';
        $viewOwnOrder_archive = 'view own order/archive';
        $viewAllOrders_archives = 'view all orders/archives';
        $viewOwnCart = 'view own cart';
        $viewAllCarts = 'view all carts';

        $addProduct = 'add product';
        $editProduct = 'edit product';
        $deleteProduct = 'delete product';

        $addCategory = 'add category';
        $editCategory = 'edit category';
        $deleteCategory = 'delete category';

        $addBrand = 'add brand';
        $editBrand = 'edit brand';
        $deleteBrand = 'delete brand';

        $manageRoles = 'manage roles';
        $managePermissions = 'manage permissions';

        Permission::create(['name' => $viewProfile]);

        Permission::create(['name' => $viewDashbaord]);

        Permission::create(['name' => $manageRoles]);
        Permission::create(['name' => $managePermissions]);

        Permission::create(['name' => $placeOrder]);
        Permission::create(['name' => $viewOwnOrder_archive]);
        Permission::create(['name' => $viewAllOrders_archives]);
        Permission::create(['name' => $viewOwnCart]);
        Permission::create(['name' => $viewAllCarts]);

        Permission::create(['name' => $addProduct]);
        Permission::create(['name' => $editProduct]);
        Permission::create(['name' => $deleteProduct]);

        Permission::create(['name' => $addCategory]);
        Permission::create(['name' => $editCategory]);
        Permission::create(['name' => $deleteCategory]);

        Permission::create(['name' => $addBrand]);
        Permission::create(['name' => $editBrand]);
        Permission::create(['name' => $deleteBrand]);

        // Define roles available
        $admin = 'admin';
        $seller = 'seller';
        $user = 'user';

        Role::create(['name' => $admin])->givePermissionTo(Permission::all());

        Role::create(['name' => $seller])->givePermissionTo([
            $addProduct,
            $editProduct,
            $deleteProduct,
            $viewProfile,
            $placeOrder,
            $viewOwnOrder_archive,
            $viewAllOrders_archives,
            $viewOwnCart,
            $viewAllCarts,
        ]);

        Role::create(['name' => $user])->givePermissionTo([
            $viewProfile,
            $placeOrder,
            $viewOwnOrder_archive,
            $viewOwnCart,
        ]);
    }
}
