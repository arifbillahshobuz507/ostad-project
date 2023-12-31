<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    //form data Recive
   public function formData(Request $request):array{
       $name = $request->input('name');
       $age = $request->input('age');
       $file = $request->file('photo');
       $filesize = filesize($file);
       $filetype = filetype($file);
       $fileOrginalName = $file->getClientOriginalName();
       $fileExtension = $file->getClientOriginalExtension();
       $fileTempName = $file->getFilename();
       $fileINformation = $file->getFileInfo();

       return array(
           "name"=>$name,
           "age"=>$age,
           "file"=>$file,
           "filesize"=>$filesize,
           "filetype"=>$filetype,
           "fileOrginalName"=>$fileOrginalName,
           "fileExtension"=>$fileExtension,
           "fileTempName"=>$fileTempName,
           "fileINformation"=>$fileINformation
       );
   }

   //form file Upload any File
    public function filerecive(Request $request):bool{
       $file = $request->file('image');
       $file->storeAs('upload/category/image',$file->getClientOriginalName());
        $file->move(public_path('upload/category/image'),$file->getClientOriginalName());
       return true;
    }
}
