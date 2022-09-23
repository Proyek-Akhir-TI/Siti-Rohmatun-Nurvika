<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin/user.user',["title" => "User"], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string|required|max:30',
            'email'=>'string|required|unique:users',
            'password'=>'required|same:konfirm_password',
            // 'password'=>'required',
            'role'=>'required|in:admin,konsumen',
            'foto'=>'nullable',
            'no_telepon'=>'nullable|string',
            'alamat'=>'nullable|string',
        ]);

        $image = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move('public/foto', $image);

        // user baru
        $user=new user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->role=$request->role;
        $user->foto=$image;
        $user->no_telepon=$request->no_telepon;
        $user->alamat=$request->alamat;
        $user->save();
        return redirect('/admin/user')->with('success', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        // $user = user::find($user);
        // return view('admin/user.user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = user::find($user);
        // return view('admin/user.edit', compact('user'));
        $user=User::findOrFail($id);
        return view('admin/user.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'string|required',
            'email'=>'string',
            'password'=>'required|same:konfirm_password',
            // 'password'=>'required|',
            'role'=>'required|in:admin,konsumen',
            'no_telepon'=>'required|string',
            'alamat'=>'nullable|string',
            'foto'=>'nullable',
        ]);

        $image = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move('public/foto', $image);

        $itemuser = User::findOrFail($id);//cari berdasarkan id = $id,

            $inputan = $request->all();
            $inputan['foto'] = $image;
            $itemuser->update($inputan);

        return redirect('/admin/user')
         ->with('success', 'Data user berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect('/admin/user')->with('success', 'Data user berhasil dihapus');
    }
}
