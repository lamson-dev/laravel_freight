<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\User;
use App\Validator;
use Input,File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin-dashboard.admin-index-section');
    }
    

    // show login
    public function getLoginAdmin()
    {
        return view('admin-dashboard.login-admin');
    }

    //login feature
    public function postLoginAdmin(Request $request)
    {

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ]);
            
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        
        if(Auth::attempt(['email' => $request->email,
            'password' => $request->password]))
        {
            return redirect('admin/managing-partner');
        }
        else {
            return back()->with('error','Wrong login details');
        }
    }

    //logout feature
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin/login');
    }


    // list partners
    public function getListPartner() {
        $listpartner = Partner::select('partID','name', 'phone_number', 'address', 'email', 'logoImage','website')->get()->toArray();
        return view('admin-dashboard.list-partners',compact('listpartner'));
    }

    // delete partner
    public function getDeletePartner($partID) {
        $partner1 = Partner::where('partID', $partID)->first();
        File::delete('public/data/images/images_partner/'.$partner1->logoImage);
        $partner = Partner::where('partID', $partID)->delete();
        return back()->with('success','Xóa sản phẩm thành công!');
    }


    // add partner
    public function getAddPartner() {
        $partner = Partner::select('partID','name')->get()->toArray();
        return view('admin-dashboard.managing-partners', compact('partner'));
        //return view('admin-dashboard.managing-partners');
    }

    public function postAddPartner(Request $request) {

        // echo "$request->txtName";
        // echo "$request->txtPhone";
        // echo "$request->txtAddress";
        // echo "$request->txtEmail";
        // echo "$request->txtWebsite";
        
        $partner = new Partner;
        $file_logo = $request->file('txtLogo')->getClientOriginalName();
        $partner->partID = $request->id;
        $partner->name = $request->txtName;
        $partner->phone_number = $request->txtPhone;
        $partner->address = $request->txtAddress;
        $partner->email = $request->txtEmail;
        $partner->logoImage = $request->txtLogo;
        $partner->website = $request->txtWebsite;
        $request->file('txtLogo')->move('public/data/images/images_partner/',$file_logo);
        $partner->save();
       // return redirect()->view('admin-dashboard.managing-partners')->with('success','Thêm sản phẩm thành công!');
        return back();
    }
    
    public function deletePartner($partnerId) {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
