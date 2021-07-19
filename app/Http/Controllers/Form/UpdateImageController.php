<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\PendingImages;
use Carbon\Carbon;
use Auth;

class UpdateImageController extends Controller
{
    public function upload_image(Request $request){
        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');
        $date = Carbon::now()->format('d');
        $month_save = Carbon::now()->format('F');
        $user_id = Auth::user()->user_id;
        $random_name = $request->get('paper_title');
        // dd($date);

      $validated = $request->validate([
        'paper_title'=>'required',
        'publication'=>'required',
        'language_id'=>'required',
        'paper_img'=>'required|mimes:jpeg,jfif,png',
      ]);

      if ($validated) {
        if($request->hasFile('paper_img')){
              $image = $request->file('paper_img');
              // dd($image);
              $filename = $random_name.".".$request->file('paper_img')->extension();
              // dd($filename);
              $path = $image->move(public_path('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/',$filename);

              $paper_img = $filename;
              $paper_img_url = URL::asset('/storage/files/images/').'/'.$year.'/'.$month.'/'.$date.'/'.$filename;
            }
            // dd($path);

        $create = new PendingImages([
          'user_id' => $user_id,
          'paper_title' => $request->get('paper_title'),
          'publication' => $request->get('publication'),
          'language_id' => $request->get('language_id'),
          'paper_img' => $paper_img,
          'paper_img_url' => $paper_img_url,
          'year' => $year,
          'month' => $month_save,
          'date' => $date,

        ]);

        $save_success = $create->save();
      }
      if ($save_success) {
        return redirect('/image-update')->with('success','Image uploaded successfully');
      }
    }
}
