<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        return view('Task.meeting');
    }
    public function storeMeeting(Request $request)
    {
        // return 1;
        // dd($request);
        // return $request;
        $request->validate([
            'title' => 'required',
            'dateFrom' => 'required',
            'timeFrom' => 'required',
            'dateTo' => 'required',
            'timeTo' => 'required',
            'timeZone' => 'required',
            'outCome' => 'required',
            'meetingNotes' => 'required',
            'location' => 'required',
            'description' => 'required',
            'relatedTo' => 'required',
            'attendees' => 'required',
        ]);
       
        try {
            $task=new Meeting();
            $task->title = $request->title;
            $task->dateFrom =$request->dateFrom;
            $task->timeFrom = $request->timeFrom;
            $task->dateTo = $request->dateTo;
            $task->timeTo = $request->timeTo;
            $task->timeZone = $request->timeZone;
            $task->outCome = $request->outCome;
            $task->meetingNotes = $request->meetingNotes;
            $task->location = $request->location;
            $task->description = $request->description;
            $task->relatedTo = $request->relatedTo;
            $task->attendees = $request->attendees;
            $task->save();
        } catch (\Exception $e) {

            return $e->getMessage();
        }
       
         $request->all();
        return redirect()->back()->with(['success' => 'Taks Form Submit Successfully']);
    }
}
