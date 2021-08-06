<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\Languages;
use App\Models\AdminLogs;
use App\Models\Papers;
use Carbon\Carbon;

class TablesController extends Controller
{

    public function languages()
    {
      $languages = Languages::orderByDesc('id')->get();
        return view('admin.tables.languages',compact('languages'));
    }

    public function languages_store(Request $request){
          $name = $request->name;
             $language =Languages::create([
               'name' => $name,
             ]);
             if ($language) {
               $admin_log = AdminLogs::create([
                 'admin_id' => 'admin',
                 'action' => 'Added new language',
                 'description' => 'Admin created new language'. '' .$request->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully added']);

             }else {
               return response()->json(['error' => 'Please Try later']);
             }
    }

    public function languages_remove(Request $request){
           $id = $request->id;
           $language = Languages::where('id',$id)->first();
           if ($language) {
             $language_remove = $language->delete();
             if ($language_remove) {
               $admin_log = AdminLogs::create([
                 'admin_id' => 'admin',
                 'action' => 'removed language',
                 'description' => 'Admin removed language' . ' ' . $language->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully Removed ']);
             }else {
               return response()->json(['error' => 'Please Try later']);
             }
           } else {

           }
       }

   public function languages_update(Request $request){
          $id = $request->id;
          $name = $request->name;
          $language = Languages::where('id',$id)->first();
          if ($language) {
            $language_update = $language->update([
              'name' => $name,
            ]);
            if ($language_update) {
              $admin_log = AdminLogs::create([
                'admin_id' => 'admin',
                'action' => 'Updated language',
                'description' => 'Admin updated language'. '' .$language->name,
                'log_date' => Carbon::now(),
              ]);
              return response()->json(['success' => 'Successfully updated ']);
            }else {
              return response()->json(['error' => 'Please Try later']);
            }
          } else {

          }
      }

    public function languages_status_update(Request $request){
           $id = $request->id;
           $language = Languages::where('id',$id)->first();
           if ($language) {
             $language_update = $language->update([
               'status' => $request->status,
             ]);
             if ($language_update) {
               $admin_log = AdminLogs::create([
                 'admin_id' => 'admin',
                 'action' => 'Updated language status',
                 'description' => 'Admin updated status of'. '' .$language->name,
                 'log_date' => Carbon::now(),
               ]);
               return response()->json(['success' => 'Successfully updated ']);
             }else {
               return response()->json(['error' => 'Please Try later']);
             }
           } else {

           }
       }

       //Papers

       public function papers()
       {
         $papers = Papers::orderByDesc('id')->get();
           return view('admin.tables.papers',compact('papers'));
       }

       public function papers_store(Request $request){
             $name = $request->name;
                $papers =Papers::create([
                  'name' => $name,
                ]);
                if ($papers) {
                  $admin_log = AdminLogs::create([
                    'admin_id' => 'admin',
                    'action' => 'Added new paper',
                    'description' => 'Admin added new paper'. '' .$request->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully added']);

                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
       }

       public function papers_remove(Request $request){
              $id = $request->id;
              $papers = Papers::where('id',$id)->first();
              if ($papers) {
                $papers_remove = $papers->delete();
                if ($papers_remove) {
                  $admin_log = AdminLogs::create([
                    'admin_id' => 'admin',
                    'action' => 'Added removed paper',
                    'description' => 'Admin removed paper'. '' .$papers->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully Removed ']);
                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
              } else {

              }
          }

      public function papers_update(Request $request){
             $id = $request->id;
             $name = $request->name;
             $papers = Papers::where('id',$id)->first();
             if ($papers) {
               $papers_update = $papers->update([
                 'name' => $name,
               ]);
               if ($papers_update) {
                 $admin_log = AdminLogs::create([
                   'admin_id' => 'admin',
                   'action' => 'Added updated paper',
                   'description' => 'Admin updated paper'. '' .$papers->name,
                   'log_date' => Carbon::now(),
                 ]);
                 return response()->json(['success' => 'Successfully updated ']);
               }else {
                 return response()->json(['error' => 'Please Try later']);
               }
             } else {

             }
         }

       public function papers_status_update(Request $request){
              $id = $request->id;
              $papers = Papers::where('id',$id)->first();
              if ($papers) {
                $papers_update = $papers->update([
                  'status' => $request->status,
                ]);
                if ($papers_update) {
                  $admin_log = AdminLogs::create([
                    'admin_id' => 'admin',
                    'action' => 'Status changed',
                    'description' => 'Admin changed paper status of'. '' .$papers->name,
                    'log_date' => Carbon::now(),
                  ]);
                  return response()->json(['success' => 'Successfully updated ']);
                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
              } else {

              }
          }
  }
