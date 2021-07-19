<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Firestore;

class FirestoreController extends Controller
{
    /**
     * Display a view all list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Firestore Vew All';
        $pageDescription = 'Some description for the page';

        $basicInfos = Firestore::latest()->get();

        return view('firestore.all', compact('pageTitle', 'pageDescription', 'basicInfos'));
    }

    /**
     * Display a add new all list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addNew(){

        $pageTitle = 'Firestore Add New';
        $pageDescription = 'Some description for the page';

        return view('firestore.add', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation Check 
        $request->validate([
            'name' => 'required',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        // This Data array Using For all Request Set in DB insert   
        $data = array(
            'name'  =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'country'   =>$request->country,
            'city'  =>$request->city,
            'company'   =>$request->company,
            'position'  =>$request->position,
            'status'    =>$request->status
        );
        // File Upload
        if ($files = $request->file('image')) {
            $destinationPath = 'img/basics/';
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
            $data['image'] = 'img/basics/'.$image;
        }

        Firestore::create($data);
        session()->flash('create', 'Basic Inforamtion Successfully Saved!');
        return redirect()->route('firestore.all');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Firestore Add New';
        $pageDescription = 'Some description for the page';

        $basicInfo = Firestore::where('id', $id)->first();

        return view('firestore.edit', compact('pageTitle', 'pageDescription', 'basicInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $basicInfo = Firestore::where('id', $id)->first();
        //Validation Check 
        $request->validate([
            'name' => 'required',
        ]);

        // This Data array Using For all Request Set in DB insert   
        $data = array(
            'name'  =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'country'   =>$request->country,
            'city'  =>$request->city,
            'company'   =>$request->company,
            'position'  =>$request->position,
            'status'    =>$request->status
        );

        if ($files = $request->file('image')) {
            $destinationPath = 'img/basics/';
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();

            if($files->move($destinationPath, $image) || $basicInfo->image){
                unlink($request->old_image);
            }
            $data['image'] = 'img/basics/'.$image;
        }

        Firestore::find($id)->update($data);

        session()->flash('update', 'Basic Information Successfully Update!');

        return redirect()->route('firestore.all', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $basicInfo = Firestore::findorfail($id);
        $basicInfo->delete();
        if($basicInfo->image){
            unlink($basicInfo->image);
        }
        
		session()->flash('delete', 'Basic Information Deleted!');
		return redirect()->route('firestore.all');
    }
}
