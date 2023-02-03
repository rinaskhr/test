<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        $data = [
            'employee' => $employee,
        ];
        return view('index', $data);
    }
    public function create(Request $req)
    {
        $employee = Employee::create([
            'nama' => $req->nama,
            'tanggal_lahir' => $req->tanggal_lahir,
            'email' => $req->email,
            'phone_number' => $req->phone_number,
        ]);

        return redirect()->route('employee.index')->with('status', 'Tambah Data Berhasil');
    }
    public function update(Request $req)
    {
        $employee = Employee::where('id', $req->id)->update([
            'nama' => $req->nama,
            'tanggal_lahir' => $req->tanggal_lahir,
            'email' => $req->email,
            'phone_number' => $req->phone_number,
        ]);

        return redirect()->route('employee.index')->with('status', 'Edit Data Berhasil');

    }
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('status', 'Hapus Data Berhasil');

    }
    public function getEmployee($id)
    {
        $employee = Employee::find($id);

        return json_encode($employee);

    }
}
