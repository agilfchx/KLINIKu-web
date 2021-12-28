<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if($request->has('search')){
            $pasien = Appointment::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('email', 'LIKE', '%' . $request->search . '%')->orWhere('no_hp', 'LIKE', '%' . $request->search . '%')->orWhere('tgl_janjian', 'LIKE', '%' . $request->search . '%')->orWhere('status', 'LIKE', '%' . $request->search . '%')->paginate(6);
        } else {
            $pasien = Appointment::paginate(6);
        }
        return view('admin.dashboard', compact('pasien'));
    }

    public function progress($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Proses';
        $data->save();
        return redirect()->back();
    }

    public function complete($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Selesai';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Cancel';
        $data->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = Appointment::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->tgl_janjian = $request->date;
        $data->no_hp = $request->nohp;
        $data->message = $request->msg;
        $data->save();

        return redirect()->back();
    }
}
