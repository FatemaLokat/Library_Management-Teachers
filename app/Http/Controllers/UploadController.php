<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use DB;
use Excel;
use App\Teacher;


class UploadController extends Controller
{
    
    public function csv(Request $request){
        $file=$request->file('file');
        $filePath = $file->getRealPath();
        $file = fopen($filePath,"r");
        $header = fgetcsv($file);
        //dd($header);
        $escapedHeader = [];
        foreach ($header as $key => $value){
            $lheader = strtolower($value);
            array_push($escapedHeader, $lheader);
        }
        //dd($escapedHeader);

        while($columns = fgetcsv($file))
        {
            if($columns[0] == "")
            {
                continue;
            }
            
            $data = array_combine($escapedHeader, $columns);
            
            $Teacher_ID = $data['Teacher_ID'];
            $Name = $data['Name'];
            $Book_ID = $data['Book_ID'];
            $Department = $data['Department'];
            $Email_ID = $data['Email_ID'];
            $Mobile_Number = $data['Mobile_Number'];


            $teacher = new Teacher;
  
            $teacher->Teacher_ID = $Teacher_ID;
            $teacher->Name = $Name;
            $teacher->Book_ID = $Book_ID;
            $teacher->Department = $Department;
            $teacher->Email_ID = $Email_ID;
            $teacher->Mobile_Number = $Mobile_Number;
            $teacher->save();

        }
        $request->session()->flash('success', 'Inserted Book Successfully');
        
        return redirect()->route('TeacherTable');

    }
}   
