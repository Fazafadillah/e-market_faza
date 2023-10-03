<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use App\Http\Requests\StorePemasokRequest;
use App\Http\Requests\UpdatePemasokRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;
use Illuminate\Support\Facades\DB;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data['pemasok'] = Pemasok::get();
            return view('pemasok.index')->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

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
     * @param  \App\Http\Requests\StorePemasokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemasokRequest $request)
    {
        Pemasok::create($request->all());
        return redirect('pemasok')->with('success', 'Data berhasil ditambahkan :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function show(Pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemasok $pemasok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemasokRequest  $request
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemasokRequest $request, Pemasok $pemasok)
    {
        $pemasok->update($request->all());

        return redirect('pemasok')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasok $pemasok)
    {
        try {
            DB::beginTransaction();
            $pemasok->delete();
            DB::commit();
            return redirect('pemasok')->with('success', 'data berhasil dihapus');
        } catch (QueryException | Exception  | PDOException $error) {
            DB::rollback();
            return redirect('pemasok')->with("terjadi kesalahan" . $error->getMessage());
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
