<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Enums\AttendStatus;
use App\Http\Requests\RegistrationAttendRequest;
use App\Http\Requests\RegistrationRequest;
use App\Imports\RegisterImport;
use App\Models\Registration;
use http\Env\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{
    public  $registration ;
    public function __construct()
    {
        $this->registration = new Registration();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registrations = $this->registration->getAll();

        return  view('dashboard.registrations.index',compact('registrations'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function attendees(): View
    {
        $registrations = $this->registration->getAll( AttendStatus::ATTEND);

        return  view('dashboard.registrations.attendees',compact('registrations'));
    }

    public function import()
    {
        return view('dashboard.registrations.import');
    }

    public function store(Request $request)
    {

        try {
            Excel::import(new RegisterImport($request->all()), $request->file('file'));

            return redirect()->back()->with('success','Excel Sheet has been uploaded successfully.');
        } catch (\Exception $e){
            $msg = $e->getMessage().''.$e->getLine().''.$e->getFile();
            //dd($msg);
            return redirect()->back()->withInput($request->input())->with('error', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request): JsonResponse
    {

        $this->registration->destroyById($request->id);

        return response()->json('done');
    }

    public function changeStatus (Request $request): JsonResponse
    {
        $this->registration->changeStatusById($request->id);

        return response()->json('done');
    }
}
