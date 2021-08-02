<?php

namespace App\Http\Controllers\form;
use App\Http\Controllers\Form\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApprovedImages;
use App\Models\JobsPending;
use App\Models\JobsActivated;
use App\Models\JobsRejected;
use App\Models\JobsCategory;
use App\Models\JobsRejectCategory;
use App\Models\JobsApprovedCategory;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Auth;

class JobsController extends Controller
{
    public function pending_jobs(){

      $jobs = JobsPending::orderByDesc('id')->get();

      return view('quality-controller.jobs.pending',compact('jobs'));
    }

    public function approved_jobs(){

      $jobs = JobsActivated::orderByDesc('id')->get();

      return view('quality-controller.jobs.approved',compact('jobs'));
    }

    public function rejected_jobs(){

      $jobs = JobsRejected::orderByDesc('id')->get();

      return view('quality-controller.jobs.rejected',compact('jobs'));
    }

    public function pending_jobs_view(Request $request,$id){
      $img_id = Crypt::decrypt($id);
      $jobs = JobsPending::where('img_id',$img_id)->first();
      $category = JobsCategory::where('img_id',$img_id)->get();
      return view('quality-controller.jobs.pending_view',compact('jobs','category'));
    }

    public function approved_jobs_view(Request $request,$id){
      $img_id = Crypt::decrypt($id);
      $jobs = JobsActivated::where('img_id',$img_id)->first();
      $category = JobsApprovedCategory::where('img_id',$img_id)->get();
      return view('quality-controller.jobs.approved-view',compact('jobs','category'));
    }

    public function rejected_jobs_view(Request $request,$id){
      $img_id = Crypt::decrypt($id);
      $jobs = JobsRejected::where('img_id',$img_id)->first();
      $category = JobsRejectCategory::where('img_id',$img_id)->get();
      return view('quality-controller.jobs.rejected-view',compact('jobs','category'));
    }

    public function job_reject(Request $request){
      $img_id = $request->get('id');
      $jobs = JobsPending::where('img_id',$img_id)->first();
      $cs_id = $jobs->cs_id;
      $reason = $request->get('reason');
      if ($jobs) {
        $reject = JobsRejected::create([
            'id' => $jobs->id,
            'img_id' => $jobs->img_id,
            'is_id' => $jobs->is_id,
            'cs_id' => $jobs->cs_id,
            'paper_title' => $jobs->paper_title,
            'publication' => $jobs->publication,
            'description' => $jobs->description,
            'language_id' => $jobs->language_id,
            'language' => $jobs->language,
            'paper_img' => $jobs->paper_img,
            'paper_img_url' => $jobs->paper_img_url,
            'img_date' => $jobs->img_date,
            'var_title' => $jobs->var_title,
            'var_description' => $jobs->var_description,
            'apply_date' => $jobs->apply_date,
            'walk_in' => $jobs->walk_in,
            'phone' => $jobs->phone,
            'email' => $jobs->email,
            'company_name' => $jobs->company_name,
            'address' => $jobs->address,
            'state' => $jobs->state,
            'city' => $jobs->city,
            'zip' => $jobs->zip,
            'c_phone' => $jobs->c_phone,
            'c_email' => $jobs->c_email,
            'website' => $jobs->website,
            'reason' => $reason,
        ]);
        $category = JobsCategory::where('img_id',$img_id)->where('cs_id',$cs_id)->get();
        if ($category) {
          foreach ($category as $key => $value) {
            $rehje_cat = JobsRejectCategory::create([
              'img_id' => $value->img_id,
              'cs_id' => $value->cs_id,
              'content_id' => $value->content_id,
              'category' => $value->category,
              'openings' => $value->openings,
              'experience' => $value->experience,
            ]);
          }
        }
        $year = Carbon::parse($jobs->img_date)->year;
        $month = Carbon::parse($jobs->img_date)->format('F');
        $day = Carbon::parse($jobs->img_date)->day;
        $add_to_approve_imgs = ApprovedImages::create([
          'id' => $jobs->img_id,
          'is_id' => $jobs->is_id,
          'paper_title' => $jobs->paper_title,
          'publication' => $jobs->publication,
          'description' => $jobs->description,
          'language_id' => $jobs->language_id,
          'language' => $jobs->language,
          'paper_img' => $jobs->paper_img,
          'paper_img_url' => $jobs->paper_img_url,
          'year' => $year,
          'month' => $month,
          'date' => $day,
          'created_at' => $jobs->img_date,
        ]);
      }

      if ($reject && $add_to_approve_imgs) {
        $jobs_remove = $jobs->delete();
        $category_remove = JobsCategory::where('img_id',$img_id)->where('cs_id',$cs_id)->delete();


      }
      if ($jobs_remove && $category_remove) {
        return redirect('/quality_controller/jobs/pending_jobs')->with('success','success');
      }else {
        return redirect('/quality_controller/jobs/pending_jobs')->with('danger','error');
      }
    }


    public function job_approve(Request $request){
      $img_id = $request->get('id');
      $jobs = JobsPending::where('img_id',$img_id)->first();
      $cs_id = $jobs->cs_id;
      if ($jobs) {
        $approve = JobsActivated::create([
            'id' => $jobs->id,
            'img_id' => $jobs->img_id,
            'is_id' => $jobs->is_id,
            'cs_id' => $jobs->cs_id,
            'paper_title' => $jobs->paper_title,
            'publication' => $jobs->publication,
            'description' => $jobs->description,
            'language_id' => $jobs->language_id,
            'language' => $jobs->language,
            'paper_img' => $jobs->paper_img,
            'paper_img_url' => $jobs->paper_img_url,
            'img_date' => $jobs->img_date,
            'var_title' => $jobs->var_title,
            'var_description' => $jobs->var_description,
            'apply_date' => $jobs->apply_date,
            'walk_in' => $jobs->walk_in,
            'phone' => $jobs->phone,
            'email' => $jobs->email,
            'company_name' => $jobs->company_name,
            'address' => $jobs->address,
            'state' => $jobs->state,
            'city' => $jobs->city,
            'zip' => $jobs->zip,
            'c_phone' => $jobs->c_phone,
            'c_email' => $jobs->c_email,
            'website' => $jobs->website,
        ]);
        $category = JobsCategory::where('img_id',$img_id)->where('cs_id',$cs_id)->get();
        if ($category) {
          foreach ($category as $key => $value) {
            $rehje_cat = JobsApprovedCategory::create([
              'img_id' => $value->img_id,
              'cs_id' => $value->cs_id,
              'content_id' => $value->content_id,
              'category' => $value->category,
              'openings' => $value->openings,
              'experience' => $value->experience,
            ]);
          }
        }
      }

      if ($approve) {
        $jobs_remove = $jobs->delete();
        $category_remove = JobsCategory::where('img_id',$img_id)->where('cs_id',$cs_id)->delete();
      }
      if ($jobs_remove && $category_remove) {
        return redirect('/quality_controller/jobs/pending_jobs')->with('success','success');
      }else {
        return redirect('/quality_controller/jobs/pending_jobs')->with('danger','error');
      }
    }
}
