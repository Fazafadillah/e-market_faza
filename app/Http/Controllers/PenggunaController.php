<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Pengguna;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data['pengguna'] = Pengguna::get();
            return view('pengguna.index')->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
        // if ($user = Auth::user()) {
        //     switch ($user->level) {
        //         case '1':
        //             return redirect()->intended('/');
        //             break;

        //         case '2':
        //             return redirect()->intended('pembelian');
        //             break;
        //     }
        // }
        // $data['pengguna'] = Pengguna::get();
        // return view('auth.login')->with($data);
    }

    // public function cekLogin(AuthRequest $request)
    // {
    //     $credential = $request->only('email', 'password');
    //     //dd($credential)
    //     $request->session()->regenerate();
    //     if (Auth::attempt($credential)) {
    //         $user = Auth::user();
    //         switch ($user->level) {
    //             case '1':
    //                 return redirect()->intended('/');
    //                 break;
    //             case '2':
    //                 return redirect()->intended('pembelian');
    //                 break;
    //         }
    //         return redirect()->intended('/');
    //     }
    //     return back()->withErrors([
    //         'nofound' => 'Email or password is wrong'
    //     ])->onlyInput('email');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenggunaRequest $request)
    {
        Pengguna::create($request->all());
        return redirect('pengguna')->with('success', 'Data berhasil ditambahkan :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenggunaRequest  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenggunaRequest $request, Pengguna $pengguna)
    {
        $pengguna->update($request->all());

        return redirect('pengguna')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        try {
            DB::beginTransaction();
            $pengguna->delete();
            DB::commit();
            return redirect('pengguna')->with('success', 'data berhasil dihapus');
        } catch (QueryException | Exception  | PDOException $error) {
            DB::rollback();
            return redirect('pengguna')->with("terjadi kesalahan" . $error->getMessage());
        }
    }
    /**
     * Handle the failure response.
     *
     * @param  string  $message
     * @param  int  $code
     * @return \Illuminate\Http\Response
     */
    public function failResponse($message, $code)
    {
        // Lakukan sesuatu dengan pesan kesalahan dan kode di sini.
        // Contoh: tampilkan pesan kesalahan atau lakukan tindakan tertentu.
        return response()->json(['error' => $message], $code);
    }
}
