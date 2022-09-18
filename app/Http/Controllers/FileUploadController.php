<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use File;
use App\Exceptions\Handler;
use App\FileUpload;
use Exception;

class FileUploadController extends Controller
{
    #Upload new file
    public function fileUpload(Request $request)
    {
        $this->createFolder();

        DB::beginTransaction();
		try
        {
            $addFile = new FileUpload;

            if(isset($request->docsFileFile)) 
            {
                $fileName = $this->uploadFile('app/public/uploads/fileDocs/',$request->docsFileFile,$request->fileName);
                $addFile->docsName = $fileName;
                $addFile->save();
            }
                DB::commit();
                return array('success' => true, 'msg'=>['File Uploaded Successfully']);
        }catch(Exception $e)
        {
            $data = $e->getMessage();
            DB::rollback();
            return array('success' => false, 'msg'=>[$data]);
        }
    }

    #Get All files
    public function getAllFiles()
    {
        $getFiles = FileUpload::orderBy('id','DESC')->get()->toJson();
        return $getFiles;
    }

    #Get a Particular file
    public function getDocs($docsId)
    {
        
        $docs = FileUpload::where('id',$docsId)->first();
       
        if(!empty($docs->docsName))
        {
            $file     = Storage::disk('laraVue')->get('app/public/uploads/fileDocs/'.$docs->docsName);
            $getExt   = Storage::disk('laraVue')->mimeType('app/public/uploads/fileDocs/'.$docs->docsName);
            $url      = 'data:'.$getExt.';base64,'.base64_encode($file);
            return $url;
        }
    }

    #Encrypt a file
    public function uploadFile(string $path, $base64file, string $filename='')
    {   
         $File =  explode(',', $base64file);
         $file = base64_decode($File[1]);
         $extension = explode(';',explode('/',$File[0])[1])[0];
 
         if ($filename !== '') {
             $fileName = time().'~'.$filename;
         } else {
             $fileName = time().'.'.$extension;
         }
          
         $path = $path.$fileName; 
         Storage::disk('laraVue')->put($path, $file);
 
         return $fileName;
    }

    #Create Storage Directory
    public function createFolder()
    {
        if(!Storage::disk('laraVue')->exists('app/public/uploads/fileDocs/')){
            Storage::disk('laraVue')->makeDirectory('app/public/uploads/fileDocs/');
        }
    }
}
