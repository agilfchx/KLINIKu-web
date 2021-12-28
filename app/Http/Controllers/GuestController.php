<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function store(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->tgl_janjian = $request->date;
        $data->no_hp = $request->nohp;
        $data->message = $request->message;
        $data->save();

        return redirect()->back()->with('success', 'Berhasil membuat Janji. Kami akan menghubungi anda segera untuk mengkonfirmasi');
    }
}
