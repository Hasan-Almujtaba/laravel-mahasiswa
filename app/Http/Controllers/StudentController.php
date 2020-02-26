<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Student::paginate(10);
        return view('mahasiswa.index', ['students' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        // $mahasiswa = new Student;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->nrp = $request->nrp;
        // $mahasiswa->email = $request->email;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->save();
        
        Student::create($request->all());
        return redirect('student')->with('status', 'Berhasil Menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('mahasiswa.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('mahasiswa.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;
        $student->save();

        return redirect('student')->with('status', 'Berhasil Mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('student')->with('status', 'Berhasil Menghapus data');
    }
}
