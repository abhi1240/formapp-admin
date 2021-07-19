<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PendingImages;
use App\Models\ApprovedImages;
use App\Models\RejectedImages;
use Carbon\Carbon;
use Auth;

class ImagesController extends Controller
{
    public function pending_images(){

      $image = PendingImages::orderByDesc('id')->get();

      return view('admin.images.pending-images',compact('image'));
    }

    public function approved_images(){

      $image = ApprovedImages::orderByDesc('id')->get();

      return view('admin.images.approved-images',compact('image'));
    }

    public function rejected_images(){

      $image = RejectedImages::orderByDesc('id')->get();

      return view('admin.images.rejected-images',compact('image'));
    }

    // approve and reject

    public function reject_image(Request $request){
      $reject_id = $request->id;
      $image = PendingImages::where('id',$reject_id)->first();
      if ($image) {
        $create = RejectedImages::create([
          'user_id' => $image->user_id,
          'paper_title' => $image->paper_title,
          'publication' => $image->publication,
          'language_id' => $image->language_id,
          'paper_img' => $image->paper_img,
          'paper_img_url' => $image->paper_img_url,
          'year' => $image->year,
          'month' => $image->month,
          'date' => $image->date,
        ]);

        if ($create) {
          $image_reject = $image->delete();
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
          'user_id' => $image->user_id,
          'paper_title' => $image->paper_title,
          'publication' => $image->publication,
          'language_id' => $image->language_id,
          'paper_img' => $image->paper_img,
          'paper_img_url' => $image->paper_img_url,
          'year' => $image->year,
          'month' => $image->month,
          'date' => $image->date,
        ]);

        if ($create) {
          $image_approve = $image->delete();
          return response()->json(['success' => 'Successfully Approved Image']);
        }else {
          return response()->json(['danger' => 'Please Try later']);
        }
      }else {
        return response()->json(['danger' => 'Please Try later']);
      }
    }
}