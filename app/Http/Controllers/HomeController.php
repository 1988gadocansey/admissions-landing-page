<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;
 
use App\User;
 

class HomeController extends Controller
{
    
    public function __construct()
    { 
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(SystemController $sys ,Request $request)
    {
         $this->validate($request, [
             
            'country'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email' => 'required|email|max:255|unique:tpoly_forms',
              'CaptchaCode' => 'required|valid_captcha',
        ]);
        
        $serial_gen="abcdefhkmnprtuvwxyz";
        $str = 'abcdefhkmnprtuvwxyz234678';
        $shuffled = str_shuffle($str);
        $vcode = substr($shuffled,0,9);
        $pin=strtoupper($vcode);
        $password=bcrypt($pin);   
        $serial="TTU".date("Y").strtoupper(substr(str_shuffle($serial_gen),0,9));
        $name=$request->input("name");
        $email=$request->input("email");
        $country=$request->input("country");
        $phone=$request->input("phone");
        $formModel=new Models\FormModel();
        $formModel->name=$name;
        $formModel->COUNTRY=$country;
        $formModel->PHONE=$phone;
        $formModel->EMAIL=$email;
        $formModel->SOLD=1;
        $formModel->serial=$serial;
        $formModel->PIN=$pin;
        $formModel->password=$password;
        $formModel->FORM_TYPE="FOREIGN";
        $formModel->SOLD_BY="System";
        $formModel->YEAR=date("Y");
       if($formModel->save()){
           
           $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$email_message = "
           <p>akoradi Technical University Online Admission System</p>

           <p>Hello $name</p>
            
          <p> <ol>
                <li>Takoradi Technical University  has received your form you filled for SERIAL AND PIN CODE generation \n.</br>  
               
            </ol></p>
            <p>  Your PIN code=$pin and SERIAL NO.=$serial </br> </p>
            <p> Thank you for applying to study at Takoradi Technical University.</p>
 
            <p>This is an automatically generated email message. Please do not reply
                to this mail directly.</p>
                <p>If further assistance is required, please send an email to
info@ttu.edu.gh</p><p><a href='application.ttuportal.com' target='_'>CLICK TO GO TO ADMISSIONS SYSTEM</a></p>";
 
    if (@mail($email, "Takoradi Technical University Admissions", $email_message, $headers)) {
        

     }
         return redirect("/send")->with("success"," <span style='font-weight:bold;font-size:13px;'><h3>PIN CODE = $pin and SERIAL NO = $serial</h3></span><span> <br/>It was also sent to your mail. Go to  http://application.ttuportal.com to fill your registration form</span> ");
   
       }
       else{
            return redirect("/send")->with("error"," <span style='font-weight:bold;font-size:13px;'>Whoops! Error in sending email. Try again later</span> ");
      
       }
        
         
        
    }
    
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}
