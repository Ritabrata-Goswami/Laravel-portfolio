<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;
use App\Models\User;
use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetch_val_project = project::orderBy('id', 'desc')->get();
        return view('portfolio_home', compact('fetch_val_project'));
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
    public function store_message(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $message_send_time = date("j-F-Y h:i:s A"); 

        if($request->fileInsert == 'NULL')
        {
            $portfolio_info = portfolio::create([
                'name' => $request->nameInsert,
                'email' => $request->emailInsert,
                'message' => $request->messageInsert,
                'file' => $request->fileInsert,
                'time_send' => $message_send_time
            ]);
            return json_encode(array("statusCode"=>200,"message"=>'Your message received successfully!'));
        }
        else
        {
            // $request->validate(['fileInsert'=>'required|mimes:png,pdf|max:2048']);
            
            $file_extension = $request->file('fileInsert')->getClientOriginalExtension();
            $file_size = $request->file('fileInsert')->getSize();

            if(in_array($file_extension, ['jpg', 'jpeg', 'png', 'pdf', 'txt', 'csv', 'docx', 'zip']) && $file_size <= 2097152)   //2MB.
            {
                $file_name = time().'_'.$request -> file('fileInsert') -> getClientOriginalName();

                $portfolio_info = portfolio::create([
                    'name' => $request->nameInsert,
                    'email' => $request->emailInsert,
                    'message' => $request->messageInsert,
                    'file' => $file_name,
                    'time_send' => $message_send_time
                ]);
                $request -> file('fileInsert') -> move(public_path('portfolio-files/upload_file'), $file_name);
                
                return json_encode(array("statusCode"=>200,"message"=>'<span style="text-align:center;"><i class="fa fa-check-circle" style="font-size:30px; color:#47d147;"></i></span><br/><span style="text-align:center; color:#47d147; font-size:17px;"> Your message received successfully! </span>'));
            }
            elseif(in_array($file_extension, ['jpg', 'jpeg', 'png', 'pdf', 'txt', 'csv', 'docx', 'zip']) && $file_size > 2097152)
            {
                return json_encode(array("message"=>'<span style="text-align:center;"><i class="fa fa-exclamation-circle" style="font-size:30px;color:#ff4d4d;"></i></span><br/><span style="text-align:center; color:#ff4d4d; font-size:17px;">File size must be up to 2MB!<span>'));
            }
            else
            {
                return json_encode(array("message"=>'<span style="text-align:center;"><i class="fa fa-exclamation-circle" style="font-size:30px;color:#ff4d4d;"></i></span><br/><span style="text-align:center; color:#ff4d4d; font-size:17px;">This file extension is not allowed!</span>'));
            }
        }
    }

    public function admin_reg(Request $request)
    {
        $request -> validate([
            'uname' => 'required',
            'psw' => 'required'
        ]);

        $data_fill = User::create([
            'email' => $request -> uname,
            'password' => Hash::make($request -> psw)
        ]);

        return redirect('/registration') -> with('success', 'Successful Registration!');
    }

    public function admin_auth(Request $request)
    {
        if($request->ph_no == '7980827297')
        {
            $request -> validate([
                'uname' => 'required',
                'psw' => 'required',
                'ph_no' => 'required'
            ]);

            $email_id = $request -> uname;
            $pass = $request -> psw;
            $credentials = ['email'=>$email_id, 'password'=>$pass];

            if (Auth::attempt($credentials)) 
            {
                return redirect('/admin-dashboard');
            }
            else
            {
                return redirect('/admin') -> with('error', 'Wrong Credentials Given!');
            }
        }
        else
        {
            return redirect('/admin') -> with('error', 'Wrong Number Given!');
        }
    }

    public function view_dashboard()
    {
        $fetch_val = portfolio::orderBy('id', 'desc')->get();
        $fetch_val_project = project::orderBy('id', 'desc')->get();
        return view('admin_dashboard', compact('fetch_val','fetch_val_project'));
    }

    public function session_out()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin');
    }

    public function delete_file($id)
    {
        portfolio::whereId($id) -> delete();
        return redirect('/admin-dashboard') -> with('success', 'Message Deleted Successfully!');
    }

    public function delete_project($id)
    {
        project::whereId($id) -> delete();
        return redirect('/admin-dashboard') -> with('success', 'Project Deleted Successfully!');
    }

    public function upload_project(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $message_send_time = date("j-F-Y h:i:s A"); 

        $file_name = 'ritabrata'.'_'.rand(1000,2000).'_'.$request -> file('upload_file') -> getClientOriginalName();
        $portfolio_info = project::create([
            'type' => $request->project_type,
            'description' => $request->get_desc,
            'file' => $file_name,
            'time' => $message_send_time
        ]);
        $request -> file('upload_file') -> move(public_path('portfolio-files/upload-project'), $file_name);

        return redirect('/admin-dashboard');
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
        $edit_val = project::findOrFail($id);
        return view('project_edit', compact('edit_val'));
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
        $save_edit = project::whereId($id) -> update([
            'type' => $request->project_type,
            'description' => $request->get_desc
        ]);
        return redirect('/admin-dashboard');
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
