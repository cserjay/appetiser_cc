<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting as Event;

class SettingsController extends Controller
{
    // Get all data
    public function getSettings() {
        return response()->json(Event::all(), 200);
    }

    // Get specific settings
    public function getSettingsById($id) {
        $event = Event::find($id);
        if (is_null($event)) {
            return response()->json(['message' => 'Event settings not found'], 404);
        }
        else return response()->json($event::find($id), 200);
    }

    public function updateSettings(Request $request, $id) {
        $event = Event::find($id);
        if (is_null($event)) {
            return response()->json(['message' => 'Event settings not found'], 404);
        }
        else {
            $event->update($request->all());
            return response()->json($event, 200);
            // return redirect()->to('/route');
        }
    }

    // WELCOME PAGE
    public function indexView() {
        $data = [];
        $event = Event::find(1);
        if (is_null($event)) {
            // Database initialization
            try {
                $createEvent = new Event;
                $createEvent->id = 1;
                $createEvent->eventTitle = "";
                $createEvent->from = "2019-11-1";
                $createEvent->to = "2019-11-30";
                $createEvent->mon = 0;
                $createEvent->tue = 0;
                $createEvent->wed = 0;
                $createEvent->thu = 0;
                $createEvent->fri = 0;
                $createEvent->sat = 0;
                $createEvent->sun = 0;
                $createEvent->save();
                $data = array(
                    'posts' => Event::find(1)
                );
                return view('welcome')->with($data);
            }
            catch(Exception $e) {
                return redirect('insert')->with('failed',"operation failed");
            }
        }
        else {
            $data = array(
                'posts' => $event
            );
        }
        return view('welcome')->with($data);
    }
}
