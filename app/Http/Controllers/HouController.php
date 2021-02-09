<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use PHPUnit\Util\Exception;
use App\Exceptions\DuplicateException;

class HouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('user.userdashboard');
        }elseif (Auth::user()->hasRole('administrator'))
        {
            return view('admin.admindashboard');
        }elseif (Auth::user()->hasRole('superadministrator'))
        {

            $dataall = DB::table('users')->join('hours', 'users.id' , '=', 'hours.user_id')->select('users.id', 'users.name', DB::raw('sum(hour) as sum'))
            ->groupBy('users.id')->get();

            return view('super.allhoure', compact('dataall'));
        }else{
            return view('dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view ('super.addNewHour');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try{
            $hour = new Hour();
            $hour->user_id = $request->user()->id;
            $hour->date = $request->Date;
            $hour->hour = $request->Hour;
            $hour->save();
            return back()->with('date_added', 'Date and Hour has been Added successfully.');
        }catch(QueryException $exception){
            return back()->with('date_duplicate', 'The entered Date exist');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
//        $data = Hour::all()->where('user_id', '=', $id);
        $data = DB::table('hours')->select('id','user_id', 'date', 'hour', 'created_at', 'updated_at')->where('user_id', '=', $id)->orderByRaw('date DESC')->get();

        return view ('super.hourdetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {

//        $hour = DB::table('hours')->select('id','user_id', 'date', 'hour')->where('date', '=', $id)->get();
        $hour = Hour::find($id);
        return view('super.edit-hour', compact('hour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $hour = Hour::find($request->id);

//        $hour = DB::table('hours')->select('id', 'user_id', 'hour')->where('id', '=', $request->Id)->get();

        $hour->hour = $request->Hour;

        $hour->save();
        return back()->with('hour_update', 'Hour has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Hour::where('id', $id)->delete();
        return back()->with('hour_deleted', 'Hour has been deleted successfully!');
    }
}
