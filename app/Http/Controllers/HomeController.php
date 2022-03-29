<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfFiles;
use Illuminate\Support\Facades\Auth;

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
        $pdfFiles = PdfFiles::where('uploaded_by',Auth::user()->id)->get();
        return view('dashboard.admin', compact('pdfFiles'));
    }
    
    public function viewfile($id)
    {
        $pdfFiles = PdfFiles::where('uploaded_by',Auth::user()->id)->get();

        $streampdf = PdfFiles::where('uploaded_by',Auth::user()->id)->findorfail($id);
        return view('dashboard.admin', compact('pdfFiles','streampdf'));
    }
    
    public function upload_files(Request $request)
    {
        $this->validate($request, [
            'file_upload' => 'required|bail|mimes:'.config('app.attachmentfiletype'),
        ]);

        $PdfFiles = new PdfFiles();
        if($request->hasFile('file_upload'))
        {
            $file_name = strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $request->file('file_upload')->getClientOriginalName()));

            $ext = $request->file('file_upload')->getClientOriginalExtension();
            $PdfFiles->original_name = str_replace('.pdf', '', $request->file('file_upload')->getClientOriginalName());
            $PdfFiles->saveasfilename = 'files_'.$file_name."_".date('YmdHis').'.'.$ext;
            $PdfFiles->uploaded_by = Auth::user()->id;
            $PdfFiles->save();
            $request->file('file_upload')->move(public_path('uploads/PdfFiles'), $PdfFiles->saveasfilename);
        }

        return back()->with('success','File Uploaded Successfully');
    }
    
    public function update_files(Request $request, $id)
    {
        $this->validate($request, [
            'file_upload' => 'required|bail|mimes:'.config('app.attachmentfiletype'),
        ]);

        $PdfFiles = PdfFiles::findorfail($id);
        if($request->hasFile('file_upload'))
        {
            $oldFile = $PdfFiles->saveasfilename;
            $file_name = strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $request->file('file_upload')->getClientOriginalName()));

            $ext = $request->file('file_upload')->getClientOriginalExtension();
            $PdfFiles->original_name = str_replace('.pdf', '', $request->file('file_upload')->getClientOriginalName());
            $PdfFiles->saveasfilename = 'files_'.$file_name."_".date('YmdHis').'.'.$ext;
            $PdfFiles->uploaded_by = Auth::user()->id;
            $PdfFiles->save();
            $request->file('file_upload')->move(public_path('uploads/PdfFiles'), $PdfFiles->saveasfilename);

            if($PdfFiles->save() && file_exists(public_path('uploads/PdfFiles/'.$oldFile))){
                unlink(public_path('uploads/PdfFiles/'.$oldFile));
            }

        }

        return back()->with('success','File Uploaded Successfully');
    }
}
