<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registerschool;
use App\Models\Registerkindergarten;
use App\Models\Registerwork;
use Illuminate\Support\Facades\Http;
class RegisterSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function school()
    {
        return view('registerSchool');
    }
    public function registerSchool(){
        return view('registerSchool');
    }
    public function registerKindergarten() {
        return view('registerKindergarten');
    }

    public function workRegister(){
        return view('workRegister');
    }

    public function storeRegisterSchool(Request $request){
        //$response = Http::get('https://api.jasmine-k.com/api/web/school/register');
       // $response = Http::get('https://api.jasmine-k.com');
        $this->validate($request,[
            "student_name"=> "required",
            'student_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            "student_birthday" => "required|string",
            "student_class"=> "required|string",
            "student_brother_number"=> "required",
            "student_brother_rank"=> "required|string",
            "is_staying_with_his_fathers"=> "required|string",
            "student_staying_with"=> "nullable|string",
            "father_degree"=> "required|string",
            "father_jop"=> "required|string",
            "mother_degree"=> "required|string",
            "mother_jop"=> "required|string",
            "past_Kindergarten"=> "required|string",
            "school_name"=> "required|string",
            "past_school_reason"=> "required|string",
            "address"=> "required|string",
            "address_m"=> "required|string",
            "address_z"=> "required|string",
            "address_d"=> "required|string",
            "nearest_landmark"=> "required|string",
            "father_phone"=> "required|string",
            "mother_phone"=> "required|string",
        ]);

        try{

        $registerSchool = new RegisterSchool();
        $registerSchool->student_name = $request->student_name;
        if($request->file('student_image')){
            $student_image = $request->file('student_image');
            $filename = time().'_'.$student_image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);
            $student_image->move("registerSchool",$filename); //move to file

            //baseurl
            $registerSchool->student_image = url('registerSchool'.'/'.$filename);
        }
        $registerSchool->student_birthday = $request->student_birthday;
        $registerSchool->student_class = $request->student_class;
        $registerSchool->student_brother_number = $request->student_brother_number;
        $registerSchool->student_brother_rank = $request->student_brother_rank;
        $registerSchool->is_staying_with_his_fathers = $request->is_staying_with_his_fathers == 'on' ? 1 : 0;
        $registerSchool->student_staying_with = $request->student_staying_with;
        $registerSchool->father_degree = $request->father_degree;
        $registerSchool->father_jop = $request->father_jop;
        $registerSchool->mother_degree = $request->mother_degree;
        $registerSchool->mother_jop = $request->mother_jop;
        $registerSchool->past_Kindergarten = $request->past_Kindergarten;
        $registerSchool->school_name = $request->school_name;
        $registerSchool->past_school_reason = $request->past_school_reason;
        $registerSchool->address = $request->address;
        $registerSchool->address_m = $request->address_m;
        $registerSchool->address_z = $request->address_z;
        $registerSchool->address_d = $request->address_d;
        $registerSchool->nearest_landmark = $request->nearest_landmark;
        $registerSchool->father_phone = $request->father_phone;
        $registerSchool->mother_phone = $request->mother_phone;
        $registerSchool->save();

        response()->json([
            'message'=>'Added success',
            'register'=>$registerSchool,
            'status'=>200,
        ]);
        return "تم التسجيل بنجاح";
        }catch(\Exception $e){

        $res = response()->json([
                'message'=>'Add error',
                'register'=>$registerSchool,
                'status'=>201,
                '4'=>$e,
            ]);

        return "خطأ في التسجيل";
        }


    }

    public function storeRegisterKindergarten(Request $request){
        $this->validate($request,[
            "name"=> "required",
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
             "birthday" => "required",
             "currentStage"=> "required|string",
             "brotherNumbers"=> "required",
             "sequence"=> "required|string",
            "liveWithParents"=> "nullable",
             "reason"=> "nullable|string",
            "fathersStudy"=> "required|string",
            "fathersJob"=> "required|string",
            "mothersStudy"=> "required|string",
            "mothersJob"=> "required|string",
            "previouslyKindergartenName"=> "required|string",
            "reasonSchoolName"=> "required|string",
            "address"=> "required|string",
            "locality"=> "required",
            "alley"=> "required",
            "house"=> "required",
            "nearestPoint"=> "required|string",
            "fatherPhone"=> "required|string",
            "motherPhone"=> "required|string",
            "is_allergic"=> "nullable",
            "allergic"=> "nullable|string",
            "diseases"=> "required|string",
        ]
    );

        try{
            $registerKinder = new Registerkindergarten();
            $registerKinder->name = $request->name;
        if($request->file('image')){
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);
            $image->move("registerKinder",$filename); //move to file

            //baseurl
            $registerKinder->image = url('registerKinder'.'/'.$filename);
        }

        $registerKinder->birthday = $request->birthday;
        $registerKinder->currentStage = $request->currentStage;
        $registerKinder->brotherNumbers = $request->brotherNumbers;
        $registerKinder->sequence = $request->sequence;

        $registerKinder->liveWithParents = $request->liveWithParents  == 'نعم' ? 1 : 0;
        $registerKinder->reason = $request->reason;

        $registerKinder->fathersStudy = $request->fathersStudy;
        $registerKinder->fathersJob = $request->fathersJob;

        $registerKinder->mothersStudy = $request->mothersStudy;
        $registerKinder->mothersJob = $request->mothersJob;

        $registerKinder->previouslyKindergartenName = $request->previouslyKindergartenName;
        $registerKinder->reasonSchoolName = $request->reasonSchoolName;
        $registerKinder->address = $request->address;

        $registerKinder->locality = $request->locality;
        $registerKinder->alley = $request->alley;
        $registerKinder->house = $request->house;

        $registerKinder->nearestPoint = $request->nearestPoint;

        $registerKinder->fatherPhone = $request->fatherPhone;

        $registerKinder->motherPhone = $request->motherPhone;

        $registerKinder->is_allergic = $request->is_allergic  == 'نعم' ? 1 : 0;
        $registerKinder->allergic = $request->allergic;
        $registerKinder->diseases = $request->diseases;
        $registerKinder->save();
        //$registerKinder->save();

        response()->json([
            'message'=>'Added success',
            'register'=>$registerKinder,
            'status'=>200,
        ]);
        return "تم التسجيل في الروضة بنجاح";
        }catch(\Exception $e){
            $res = response()->json([
                'message'=>'Add error',
                'register'=>$registerKinder,
                'status'=>201,
                '4'=>$e,
            ]);

        return "خطأ في التسجيل";
        }


    }


    public function storeRegisterWork(Request $request){

        $this->validate($request,[
            "name"=> "required",
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            "birthday" => "required",
            "degree"=> "required|string",
            "college"=> "required|string",
            "year_graduate"=> "required|string",
            "phone1"=> "required|string",
            "phone2"=> "required|string",
            "social_status"=> "required|string",
            "last_work"=> "required|string",
            "nearest_landmark"=> "required|string",
            "address"=> "required|string",
            "address_m"=> "required|string",
            "address_d"=> "required|string",
            "address_z"=> "required|string",
        ]
    );

    try{
        $registerWork = new Registerwork();
        $registerWork->name = $request->name;
        if($request->file('image')){
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $filename = str_replace(' ','-',$filename);
            $image->move("registerWork",$filename); //move to file

            //baseurl
            $registerWork->image = url('registerWork'.'/'.$filename);
        }

        $registerWork->birthday = $request->birthday;
        $registerWork->degree = $request->degree;
        $registerWork->college = $request->college;
        $registerWork->year_graduate = $request->year_graduate;
        $registerWork->phone1 = $request->phone1;
        $registerWork->phone2 = $request->phone2;
        $registerWork->address = $request->address;
        $registerWork->address_m = $request->address_m;
        $registerWork->address_z = $request->address_z;
        $registerWork->address_d = $request->address_d;
        $registerWork->nearest_landmark = $request->nearest_landmark;
        $registerWork->social_status = $request->social_status;
        $registerWork->last_work = $request->last_work;
        $registerWork->save();
        response()->json([
            'message'=>'Added success',
            'register'=>$registerWork,
            'status'=>200,
        ]);
        return "تم طلب التعيين بنجاح";
    }catch(\Exception $e){
        $res = response()->json([
            'message'=>'Add error',
            'register'=>$registerWork,
            'status'=>201,
            '4'=>$e,
        ]);

        return "خطأ في طلب التعيين";
    }

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
