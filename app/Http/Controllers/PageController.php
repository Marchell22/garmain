<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\Kredit;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }
    public function calculator()
    {
        return view('page.calculator');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'inputJumlahPinjaman' => 'required|numeric|min:1',
            'inputTenor' => 'required|numeric|min:1',
            'bunga' => 'required|numeric|min:0',
        ]);

        $jumlahPinjaman = $request->inputJumlahPinjaman;
        $tenor = $request->inputTenor;
        $bungaPersen = $request->bunga;
        $bunga = $bungaPersen / 100;
        $bungaPerBulan = $bunga / 12;
        $bungaPerBulanPersen = $bungaPerBulan * 100;
        $angsuranPokokPerBulan = $jumlahPinjaman / $tenor;
        $angsuranBungaPerBulan = $angsuranPokokPerBulan * $bungaPerBulan;
        $totalAngsuran = $angsuranPokokPerBulan + $angsuranBungaPerBulan;

        return view('page.calculator', compact(
            'jumlahPinjaman',
            'tenor',
            'bungaPersen',
            'bungaPerBulanPersen',
            'angsuranPokokPerBulan',
            'angsuranBungaPerBulan',
            'totalAngsuran'
        ));
    }
    public function PengajuanKredit(){
        return view('page.pengajuanKredit');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'noKTP' => 'required|string|max:16',
            'jenis_barang.*' => 'required|string|max:255',
            'merk_barang.*' => 'required|string|max:255',
            'tipe_barang.*' => 'required|string|max:255',
            'harga_barang.*' => 'required|numeric',
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf,zip,rar|max:5000',
            'KTP' => 'required|file|mimes:jpg,jpeg,png,pdf,zip,rar|max:5000',
            'STNK' => 'required|file|mimes:jpg,jpeg,png,pdf,zip,rar|max:5000',
            'KK' => 'required|file|mimes:jpg,jpeg,png,pdf,zip,rar|max:5000',
        ]);

        // Create Kredit record
        $kredit = Kredit::create([
            'nama' => $validatedData['nama'],
            'alamat' => $validatedData['alamat'],
            'noKTP' => $validatedData['noKTP'],
            'jenisBarang' => implode(',', $validatedData['jenis_barang']),
            'merkBarang' => implode(',', $validatedData['merk_barang']),
            'tipeBarang' => implode(',', $validatedData['tipe_barang']),
            'hargaBarang' => implode(',', $validatedData['harga_barang']),
        ]);

        // Upload files
        foreach (['document', 'KTP', 'STNK', 'KK'] as $fileType) {
            $file = $request->file($fileType);
            $path = $file->store('uploads');

            FileUpload::create([
                'fileName' => $file->getClientOriginalName(),
                'filePath' => $path,
                'ownerName' => $kredit->nama,
            ]);
        }

        return redirect()->back()->with('success', 'Kredit application submitted successfully!');
    }
    
}
