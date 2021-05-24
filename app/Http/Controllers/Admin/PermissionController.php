<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Contracts\PermissionRepositoryInterface;

class PermissionController extends Controller
{
    protected $permissionRepositoryInterface;

    public function __construct(PermissionRepositoryInterface $permissionRepositoryInterface)
    {
        $this->permissionRepositoryInterface = $permissionRepositoryInterface;
        $this->authorizeResource(Permission::class, 'permission');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.permission.index', $this->permissionRepositoryInterface->indexPermission());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create', $this->permissionRepositoryInterface->createPermission());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PermissionRequestt  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $this->permissionRepositoryInterface->storePermission($request);
        return redirect(adminRedirectRoute('permission'))->withSuccess('Permission Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('admin.permission.show', $this->permissionRepositoryInterface->showPermission($permission));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permission.edit', $this->permissionRepositoryInterface->editPermission($permission));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PermissionRequest  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $this->permissionRepositoryInterface->updatePermission($request, $permission);
        return redirect(adminRedirectRoute('permission'))->withInfo('Permission Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $this->permissionRepositoryInterface->destroyPermission($permission);
        return redirect(adminRedirectRoute('permission'))->withFail('Permission Deleted Successfully.');
    }
}
