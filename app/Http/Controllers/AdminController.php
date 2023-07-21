<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.master.user.index');
    }

    public function add()
    {
        return view('admin.master.user.add-user');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required|min:2|max:255',
                'email' => 'required|min:5|max:255|unique:admins|email:dns',
                'phone' => 'required|numeric|unique:admins',
                'image' => 'image|file|max:2048',
                'username' => 'required|min:2|max:255|unique:users',
                'password' => 'required'
            ])->validate();
        
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('admin-image');
            }

            $validateData['username'] = $request->username;
            $validateData['level'] = 'admin';
            $validateData['password'] = bcrypt($request->password);
            $user = User::create($validateData);

            $validatedData['user_id'] = $user->id;
            $validatedData['slug'] = slug($request->name);
            Admin::create($validatedData);
        
            return redirect()->intended('/user/add')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Add User Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Add User Failed!'
            ]);
        }
    }

    public function edit(Admin $user)
    {
        return view('admin.master.user.edit-user', [
            'admin' => $user
        ]);
    }

    public function update(Request $request, Admin $user)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required|min:2|max:255',
                'email' => 'required|min:5|max:255|email:dns|unique:admins,email,' . $user->id,
                'phone' => 'required|numeric|unique:admins,phone,' . $user->id,
                'image' => 'image|file|max:2048',
                'username' => 'required|min:2|max:255|unique:users,username,' . $user->user->id,
                'password' => 'required'
            ])->validate();
        
            if ($request->file('image')) {
                if ($user->image) {
                    Storage::delete($user->image);
                }
                $validatedData['image'] = $request->file('image')->store('admin-image');
            }

            $validateData['username'] = $request->username;
            $validateData['level'] = 'admin';
            $validateData['password'] = bcrypt($request->password);
            User::where('id', $user->user_id)->update($validateData);

            $validatedData['user_id'] = $user->id;
            $validatedData['slug'] = slug($request->name);
            $user->update($validatedData);
        
            return redirect()->intended('/user')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Edit User Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Edit User Failed!'
            ]);
        }
    }

    public function dataUser()
    {
        return DataTables::of(Admin::whereNot('id', auth()->user()->admin->id)->get())
        ->addColumn('action', function ($model) {
            return view('admin.master.user.form-action', compact('model'))->render();
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function destroy(Admin $user)
    {
        try {
            $user->delete();
        
            return redirect()->intended('/user')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Delete User Success!'
            ]);
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Delete User Failed!'
            ]);
        }
    }
}
