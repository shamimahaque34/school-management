<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\helpers\Helpers;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_name',
        'name_english',
        'name_bangla',
        'email',
        'phone',
        'designation_id',
        'dob',
        'bank_account_no',
        'gender',
        'religion',
        'jod',
        'image',
        'address',
        'subject',
    ];


    protected static $teacher;

    public static function saveData($request){
        
        self::$teacher = new Teacher();

        self::$teacher->username           = $request->username;
        self::$teacher->name_english       = $request->name_english;
        self::$teacher->name_bangla        = $request->name_bangla;
        self::$teacher->email              = $request->email;
        self::$teacher->phone              = $request->phone;
        self::$teacher->designation_id     = $request->designation_id;
        self::$teacher->bank_account_no    = $request->bank_account_no;
        self::$teacher->dob                = $request->dob ;
        self::$teacher->gender             = $request->gender;
        self::$teacher->religion           = $request->religion;
        self::$teacher->jod                = $request->jod ;
        self::$teacher->image              = saveImage($request->file('image'),'./backend/assets/teacherImages/');
        self::$teacher->address            = $request->address;
        self::$teacher->subject            = $request->subject;
        self::$teacher->save();
        return  self::$teacher;
        
    }


    public static function updateData($request,$id)
    {   
        self::$teacher = Teacher::findOrFail($id);

        self::$teacher->username           =$request->username;
        self::$teacher->name_english       = $request->name_english;
        self::$teacher->name_bangla        = $request->name_bangla;
        self::$teacher->email              =$request->email;
        self::$teacher->phone              =$request->phone;
        self::$teacher->designation_id     =$request->designation_id;
        self::$teacher->dob                =$request->dob ;
        self::$teacher->gender             =$request->gender;
        self::$teacher->religion           =$request->religion;
        self::$teacher->jod                =$request->jod ;
        self::$teacher->image              =saveImage($request->file('image'),'./backend/assets/teacherImages/','image',self::$teacher->image,);
        self::$teacher->address            =$request->address;
        self::$teacher->subject            =$request->subject;
        self::$teacher->save();
    }


}
