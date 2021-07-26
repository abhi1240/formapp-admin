<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Form\Controller;

use Illuminate\Http\Request;
use App\Models\Languages;
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
                  return response()->json(['success' => 'Successfully updated ']);
                }else {
                  return response()->json(['error' => 'Please Try later']);
                }
              } else {

              }
          }
  }
