<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\User;
use App\Models\Patient;
use App\Models\Procedures;
use App\Models\Treatment;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function home() {
    $patient = Patient::get();
    return view('home', compact('patient'));
    }


  public function patient() {
    $patient = Patient::get();
    return view('patients', compact('patient'));
     }

    public function patient_single($id) {
    $patient = Patient::find($id);
    return view('patient_single', compact('patient'));
     }


  public function messages() {
    return view('messages');
}



  public function calendar() {
    return view('calendar');
}

  public function profile_hcp() {
    $id = Auth::id();
    $hcp = User::find($id);
    return view('profile-hcp', compact('hcp'));
}


 public function profile_save(Request $hos)
    {           
        $id=$hos->id;
        User::where('id',$id)->update($hos->except(['_token']));

        //SINGLE IMG
          if($hos->image!=''){
          $image=$hos->file('image');
          $uniqid=hexdec(uniqid());
          $ext=strtolower($image->getClientOriginalExtension());
          $create_name=$uniqid.'.'.$ext; 
          $loc='images/hcp';
          $image->move($loc, $create_name);

          $datas['image']=$create_name;
       DB::table('users')->where('id',$id)->update($datas);
       return back()->with('success', "Updated!"); 
 }
 return back()->with('success', "Updated!"); 
 }


 //PATIENTS

public function add_patientP(Request $hos)
    {     
          $f_name =$hos->f_name;
          $m_name=$hos->m_name;
          $l_name=$hos->l_name;
          $b_temp=$hos->b_temp;
          $pulse_rate=$hos->pulse_rate;
          $resp_rate=$hos->resp_rate;
          $b_pressure=$hos->b_pressure; 
          $weight =$hos->weight;
          $height=$hos->height;
          $height=str_replace("'","''", $height);
          $symptoms=$hos->symptoms;
          $pharmacy=$hos->pharmacy;
          $main_diag=$hos->main_diag;
          $prev_diag=$hos->prev_diag;
          $treatment=$hos->treatment;
          $procedures=$hos->procedures;
          $lab_rec_id=$hos->lab_rec_id; 
          $last_visit =$hos->last_visit;
          $summery=$hos->summery;
          $hcp_id=$hos->hcp_id;
          $insurance=$hos->insurance;
          $email=$hos->email;
          $address=$hos->address;
          $dob=$hos->dob;
          $phone=$hos->phone;

            //SINGLE IMG
          if($hos->image!=''){ 
          $image=$hos->file('image');
          $uniqid=hexdec(uniqid());
          $ext=strtolower($image->getClientOriginalExtension());
          $create_name=$uniqid.'.'.$ext; 
          $loc='images/hcp';
          $image->move($loc, $create_name);
          $image_name =  $create_name;
          }
          else $image_name='user.png';      

          $location = Patient::create([
          'f_name' =>  $f_name,
          'm_name' =>  $m_name,
          'l_name' =>  $l_name,
          'b_temp' =>  $b_temp,
          'pulse_rate' =>  $pulse_rate,
          'resp_rate' =>  $resp_rate,
          'b_pressure' =>  $b_pressure,
          'weight' =>  $weight,
          'height' =>  $height,
          'symptoms' =>  $symptoms,
          'pharmacy' =>  $pharmacy,
          'summery' =>  $summery,
          'main_diag' =>  $main_diag,
          'prev_diag' =>  $prev_diag,
          'treatment' =>  $treatment,
          'procedures' =>  $procedures,
          'lab_rec_id' =>  $lab_rec_id,
          'last_visit' =>  $last_visit,
          'hcp_id' =>  $hcp_id,
          'insurance' =>  $insurance,
          'email' =>  $email,
          'address' =>  $address,
          'dob' =>  $dob,
          'phone' =>  $phone,
          'image' =>  $image_name
          
          ]);
      Session::put('success',"Pateint Saved");
      return redirect('patient');  
    }


public function up_patient(Request $hos)
    {           
       $id=$hos->id;
       Patient::where('id',$id)->update($hos->except(['_token']));
      
        //SINGLE IMG
          if($hos->image!=''){
          $image=$hos->file('image');
          $uniqid=hexdec(uniqid());
          $ext=strtolower($image->getClientOriginalExtension());
          $create_name=$uniqid.'.'.$ext; 
          $loc='assets_admin/img/doctors';
          $image->move($loc, $create_name);

        $datas['image']=$create_name;
        DB::table('patients')->where('id',$id)->update($datas);
        return redirect('patient'); 
 }
 return redirect('patient'); 
 }

public function edit_patient($id)
    {      
    $procedures= Procedures::get();
    $treatment= Treatment::get();  
  $p= Patient::find($id); 
  return view('patient_edit', compact('p','procedures','treatment'));       
    }

public function add_patient()
    {     
    $procedures= Procedures::get();
    $treatment= Treatment::get();  
  $location= Patient::get(); 
  return view('patient_add',compact('location','procedures','treatment'));       
    }




 public function delete_patient($id)
    {           
        $deleted = Patient::where('id', $id)->delete();
       return back()->with('success', "Brand Added!"); 
 }


 //PATIENTS


//END CLASS
}
