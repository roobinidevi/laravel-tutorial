<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;
use function view;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(UsersDataTable $dataTable) {
        return $dataTable->render('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = User::find($id);
        $roles = Role::pluck('name', 'id');
        $selected = $user->roles->pluck('id');
        return view('edit', compact('user', 'roles', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $user_update = User::find($id);
        $user_update->name = $request->name;
        $user_update->email = $request->email;
//        $user_update->roles()->attach($request->role);
        $user_update->roles()->sync($request->role);
        $user_update->save();
        return Redirect::to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $user_del = User::find($id);
        $user_del->delete();
        return Redirect::to('user');
    }

    public function view() {
        $users = User::select(['id', 'name', 'email']);
//        dd($users);
        return DataTables::of($users)
                        ->make(true);
    }

}
