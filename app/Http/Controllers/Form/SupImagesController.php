<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use App\Models\SupportLogs;
use Carbon\Carbon;
use Auth;

class SupImagesController extends Controller
{
    public function pending_images(){

      $image = PendingImages::orderByDesc('id')->get();

      return view('support.images.pending-images',compact('image'));
    }

    public function approved_images(){

      $image = ApprovedImages::orderByDesc('id')->get();

      return view('support.images.approved-images',compact('image'));
    }

    public function rejected_images(){

      $image = RejectedImages::orderByDesc('id')->get();

      return view('support.images.rejected-images',compact('image'));
    }

    // approve and reject

    public function reject_image(Request $request){
      $reject_id = $request->id;
      $image = PendingImages::where('id',$reject_id)->first();
      if ($image) {
        $create = RejectedImages::create([
          'id' => $image->id,
          'is_id' => $image->is_id,
          'paper_title' => $image->paper_title,
          'publication' => $image->publication,
          'language_id' => $image->language_id,
          'paper_img' => $image->paper_img,
          'paper_img_url' => $image->paper_img_url,
          'year' => $image->year,
          'month' => $image->month,
          'date' => $image->date,
          'img_date' => $image->created_at,
        ]);

        if ($create) {
          $image_reject = $image->delete();
          $user_id = Auth::user()->user_id;
          $user = User::where('user_id',$user_id)->first();
          $support_log = SupportLogs::create([
            'user_id' => $user_id,
            'action' => 'Image rejected',
            'description' => $user->name . ' '.'rejected image'. ' '.$image->id,
            'log_date' => Carbon::now(),
          ]);
          return response()->json(['success' => 'Successfully Rejected Image']);
        }else {
          return response()->json(['error' => 'Please Try later']);
        }
      }
    }

    //approve image

    public function approve_image(Request $request){
      $approve_id = $request->id;
      $image = PendingImages::where('id',$approve_id)->first();
      // return response()->json($image);
      if ($image) {
        $create = ApprovedImages::create([
          'id' => $image->id,
          'is_id' => $image->is_id,
          'paper_title' => $image->paper_title,
          'publication' => $image->publication,
          'language_id' => $image->language_id,
          'paper_img' => $image->paper_img,
          'paper_img_url' => $image->paper_img_url,
          'year' => $image->year,
          'month' => $image->month,
          'date' => $image->date,
          'img_date' => $image->created_at,
        ]);

        if ($create) {
          $image_approve = $image->delete();
          $user_id = Auth::user()->user_id;
          $user = User::where('user_id',$user_id)->first();
          $support_log = SupportLogs::create([
            'user_id' => $user_id,
            'action' => 'Image approved',
            'description' => $user->name . ' '.'approved image'. ' '.$image->id,
            'log_date' => Carbon::now(),
          ]);
          return response()->json(['success' => 'Successfully Approved Image']);
        }else {
          return response()->json(['danger' => 'Please Try later']);
        }
      }else {
        return response()->json(['danger' => 'Please Try later']);
      }
    }
}
