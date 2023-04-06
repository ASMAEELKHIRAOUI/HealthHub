<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function assignRole(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user){
            return response()->json(['message' => 'This user does not exist!']);
        }

        $user->syncRoles([$request->name]);

        return response()->json([
            'status' => true,
            'message' => 'Role assigned successfully!',
        ]);
    }
    public function removeRole(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user){
            return response()->json(['Message' => "This user does not exist!"]);
        }

        $roleName = $request->name;

        if(!$user->hasRole($roleName)){
            return response()->json(['Message' => "This user does not have the ({$roleName}) role!"]);
        }

        $user->removeRole($roleName);
        $user->assignRole('user');

        return response()->json([
            'status' => true,
            'Message' => 'Role removed successfully!',
        ]);
    }
}
