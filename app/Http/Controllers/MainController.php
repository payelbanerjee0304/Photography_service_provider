<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index():View
    {
        return view('index');
    }
    public function about():View
    {
        return view('about');
    }
    public function services():View
    {
        return view ('services');
    }
    public function pricing():View
    {
        return view ('pricing');
    }
    public function portfolio():View
    {
        return view ('portfolio');
    }
    public function contact():View
    {
        return view ('contact');
    }
    public function signin():View
    {
        return view ('signin');
    }
    public function submit(Request $request)
    {
        //dd($request->all());
        $requirement=$request->input('requirement');
        $plan=$request->input('plan');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $project=$request->input('project');
        $sdate=$request->input('sdate');
        $edate=$request->input('edate');
        $stime=$request->input('stime');
        $etime=$request->input('etime');
        $address1=$request->input('address1');
        $city=$request->input('city');
        $zip=$request->input('zip');
        $user="client";
        $auth=0;
        if($request->file('file'))
        $file=$request->file('file');
        $fileName= time()."_".$file->getClientOriginalName();
        $uploadlocation="./upload";
        $file->move($uploadlocation,$fileName);
        $user1=DB::table('photography_service_provider')->where('email','=', $email)->get();
            if(empty($user1[0]))
            {
                $data=[
                    'requirement'=>$requirement,
                    'plan'=>$plan,
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'project'=>$project,
                    'sdate'=>$sdate,
                    'edate'=>$edate,
                    'stime'=>$stime,
                    'etime'=>$etime,
                    'address1'=>$address1,
                    'city'=>$city,
                    'zip'=>$zip,
                    'image'=>$uploadlocation.'/'.$fileName,
                    'user'=>$user,
                    'auth'=>$auth
                ];
                DB::table('photography_service_provider')->insert($data);
                return redirect('/login')->with('message','Data Inserted Successfully');
            }
            else{
                return redirect('/signin')->with('message','Email already exists');
            }
    }
    public function alldata():View
    {
        $user1="client";
        $user= DB::table('photography_service_provider')->where("user","=",$user1)->get();
         return view('all')->with(['allInfo'=>$user]);
    }
    public function displayclient():View{
        $user= DB::table('photography_service_provider')->get();
         return view('displayclient')->with(['userinfo'=>$user]);
    }
    public function login():View{
        return view('login');
    }
    public function save(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $user=DB::table('photography_service_provider')->where("email","=",$username)->get();
        if(empty($user[0])){
            return redirect('/login')->with('message','Result not found');
        }
        else {
            $pass_db=$user[0]->phone;
            $user1=$user[0]->user;
            if($pass_db==$password){
                if($user1=="client"){
                    $image=$user[0]->image;
                    $fname=$user[0]->firstname;
                    $lname=$user[0]->lastname;
                    $name=$fname." ".$lname;
                    $request->session()->put('name',$name);
                    $request->session()->put('image',$image);
                    return view('displayclient')->with(['userinfo'=>$user]);
                }
                else {
                    return redirect('/all');
                }
            }
            else {
                return redirect('/login')->with('message','Password not matched');
            }
        }
    }
    public function edit($ep){
        $uid=$ep;
        $user=DB::table('photography_service_provider')->where("user_id","=",$uid)->get();
        return view('edit')->with(['userInfo'=>$user]);
    }
    public function update(Request $request){
        $uid=$request->input('uid');
        $requirement=$request->input('requirement');
        $plan=$request->input('plan');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $project=$request->input('project');
        $sdate=$request->input('sdate');
        $edate=$request->input('edate');
        $stime=$request->input('stime');
        $etime=$request->input('etime');
        $address1=$request->input('address1');
        $city=$request->input('city');
        $zip=$request->input('zip');
        if($request->file('file')){
            $file=$request->file('file');
            $fileName= time()."_".$file->getClientOriginalName();
            $uploadlocation="./upload";
            $file->move($uploadlocation,$fileName);
            $data=[
            'requirement'=>$requirement,
            'plan'=>$plan,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'project'=>$project,
            'sdate'=>$sdate,
            'edate'=>$edate,
            'stime'=>$stime,
            'etime'=>$etime,
            'address1'=>$address1,
            'city'=>$city,
            'zip'=>$zip,
            'image'=>$uploadlocation."/".$fileName
        ];
            DB::table('photography_service_provider')->where("user_id","=",$uid)->update($data);
            $user=DB::table('photography_service_provider')->where("user_id","=",$uid)->get();
            return view('displayclient')->with(['userinfo'=>$user]);
        }
        else{
            $oldimage=$request->session()->get('image');
            $data=[
                'requirement'=>$requirement,
                'plan'=>$plan,
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'project'=>$project,
                'sdate'=>$sdate,
                'edate'=>$edate,
                'stime'=>$stime,
                'etime'=>$etime,
                'address1'=>$address1,
                'city'=>$city,
                'zip'=>$zip,
                'image'=>$oldimage
            ];
                DB::table('photography_service_provider')->where("user_id","=",$uid)->update($data);
                $user=DB::table('photography_service_provider')->where("user_id","=",$uid)->get();
                return redirect('/login')->with('message','Data Updated Successfully');
        }   
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/login")->with('message','Logout Successfully');
    }
    public function smallform(Request $request)
    {
      $name=$request->input("name");
      $email=$request->input("email");
      $phone=$request->input("phone");
      $message=$request->input("message");
      $data=[
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'message'=>$message];
        DB::table('work_with_me')->insert($data);
        return redirect("/contact")->with ('massage','Submited Successfully ');
      }
      public function delete($del)
    { 
        $userid=$del;
        $user=DB::table('photography_service_provider')->where("user_id","=",$userid)->delete();
        return redirect('/all')->with('message','User has been deleted');
    }
    public function block($blk)
    {
        $userid=$blk;
        $auth=1;
        $data=["auth"=>$auth];
        $user=DB::table('photography_service_provider')->where("user_id","=",$userid)->update($data);
        return redirect('/all')->with('message','User has been blocked');
    }
    public function unblock($unblk)

    {
        $userid=$unblk;
        $auth=0;
        $data=["auth"=>$auth];
        $user=DB::table('photography_service_provider')->where("user_id","=",$userid)->update($data);
        return redirect('/all')->with('message','User has been unblocked');
    }
}
