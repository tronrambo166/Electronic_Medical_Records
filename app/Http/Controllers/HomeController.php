<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\User;
use App\Models\Patient;
use App\Models\Procedures;
use App\Models\Treatment;
use App\Models\Messages;
use App\Models\Reminders;
use App\Reports\MyReport;
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
    $id=Auth::id();
    $patient = DB::table('patientscsv')->get();//Patient::where('hcp_id',$id)->get();
    return view('home', compact('patient'));
    }


  public function patient() {
    $id=Auth::id();
    $patient = DB::table('patientscsv')->get();//= Patient::where('hcp_id',$id)->get();
    return view('patients', compact('patient'));
     }

    public function patient_single($id) {
    $patient = Patient::find($id);
    return view('patient_single', compact('patient'));
     }


  public function messages() {
    $user_id = Auth::id();
    $messages = Messages::get();
    $reminder = Reminders::where('user_id',$user_id)->get();
    return view('messages',compact('messages','reminder','user_id'));
}


 public function send_msg(Request $req) {
    $user_id = Auth::id();
    $user = User::find($user_id);
    $user_name = $user['name'];
    $message = $req->text;

    Messages::create([
        'USER_ID' => $user_id,
        'user_name' => $user_name,
        'message' => $message
    ]);
    Session::put('show_div','country_div');
    Session::put('success', "Sent!"); 
    Session::save();
    return redirect('messages');
}


public function add_rem(Request $req) {
    $user_id = Auth::id();
    $reminder = $req->reminder;

    Reminders::create([
        'user_id' => $user_id,
        'reminder' => $reminder

    ]);
    Session::put('show_div','gender_div');
    Session::put('success', "Added!"); 
    return redirect('messages');
}

public function del_msg($id)
{           
        $deleted = Messages::where('id', $id)->delete();
         Session::put('show_div','country_div');
       return back()->with('success', "Deleted!");
 }


 public function del_reminder($id)
{           
        $deleted = Reminders::where('id', $id)->delete();
        Session::put('show_div','gender_div');
       return back()->with('success', "Deleted!"); 
 }


  public function calendar() {
    return view('calendar');
}

  public function report($id) {
         $patient = Patient::find($id);
         return view('report', compact('patient'));
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
          $loc='images/patients';
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

 //Patient CSV

 public function addFromCsv(Request $request)
    {           
       $csv=$request->file('patient'); $i=0;
       $file = fopen($csv,"r");
        while(! feof($file))
          {
          //print_r(fgetcsv($file));
          $patient = fgetcsv($file); 
            //echo $patient[16]; exit;

          //GET individual info & Insert
          for($j=0;$j<17;$j++)
          if(!isset($patient[$j]))
            $patient[$j]='';

           if($i>=3 && $i<=1000){
           $data = array([
          'pat_id' =>  $patient[0],
          'birthdate' =>  $patient[1],
          'deathdate' =>  $patient[2],
          'ssn' =>  $patient[3],
          'drivers' =>  $patient[4],
          'passport' =>  $patient[5],
          'prefix' =>  $patient[6],
          'f_name' =>  $patient[7],
          'l_name' => $patient[8],
          'suffix' =>  $patient[9],
          'm_name' =>  $patient[10],
          'marital' =>  $patient[11],
          'race' =>  $patient[12],
          'ethnicity' =>  $patient[13],
          'gender' =>  $patient[14],
          'birthplace' =>  $patient[15],
          'address' =>  $patient[16]
              ]);
                   
           DB::table('patientscsv')->insert($data);
           } $i++;

           if($i>=1000) break;

          //GET individual info
          }
        fclose($file); 

        Session::put('success',"Pateint Saved");
        return redirect('patient');  
    }



//END CLASS
}
