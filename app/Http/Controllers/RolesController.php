<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.settings.roles.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.roles.create');
    }

    public function set_permission(Request $request)
    {
        $role = Role::findOrFail($request->role_id);
        $role->syncPermissions($request->permissions);

        $users = $role->users;

        foreach ($users as $user) {
            $user->syncPermissions($request->permissions);
        }

        toast('Vəzifə üçün səlahiyyətlər təyin edildi', 'success');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create(
            [
                'name' => $request->name,
                'guard_name' => 'web'
            ]
        );
        toast('Vəzifə müvəffəqiyyətlə əlavə edildi', 'success');
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.settings.roles.edit', compact('role'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        toast('Vəzifə müvəffəqiyyətlə yeniləndi', 'success');
        return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $permissions = $role->permissions;
        $role->delete();

        foreach ($permissions as $permission) {
            DB::table('role_has_permissions')
            ->where('permission_id', $permission->id)
            ->where('role_id', $id)
            ->delete();
        }
        toast('Vəzifə və ona aid olan səlahiyyətlər müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}
