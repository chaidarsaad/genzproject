<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $clients = Client::all();
        $teams = Team::all();
        $portofolios = Portofolio::all();
        $hero = Hero::first();
        $setting = Setting::orderBy('id', 'desc')->first();

        return view('pages.landing', [
            'services' => $services,
            'teams' => $teams,
            'clients' => $clients,
            'portofolios' => $portofolios,
            'hero' => $hero,
            'setting' => $setting,
        ]);
    }

    public function message(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string',
            'subject' => 'required|string|max:255|unique:contacts',
            'message' => 'required|string|max:255|unique:contacts',
        ]);

        try {
            $message = new Contact();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->phone_number = $request->phone_number;
            $message->subject = $request->subject;
            $message->message = $request->message;

            $message->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Failed to save message'], 500);
        }
    }
}
