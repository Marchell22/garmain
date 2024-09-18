<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\Kredit;
use App\Models\PengajuanKredit;
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
    public function PengajuanKredit()
    {
        return view('page.pengajuanKredit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'noKTP' => 'required|numeric',
            'barang' => 'required|array',
            'barang.*.jenis_barang' => 'required|string',
            'barang.*.merk_barang' => 'required|string',
            'barang.*.tipe_barang' => 'required|string',
            'barang.*.harga_barang' => 'required|numeric',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg',
            'KTP' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg',
            'STNK' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg',
            'KK' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg',
        ]);

        // Storing the form data
        $kredit = new Kredit();
        $kredit->nama = $request->nama;
        $kredit->alamat = $request->alamat;
        $kredit->noKTP = $request->noKTP;
        $kredit->uraian_barang = json_encode($request->barang); // Storing the item details as JSON
        $kredit->save();

        // Handle file uploads
        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('documents');
            $kredit->document = $documentPath;
        }
        if ($request->hasFile('KTP')) {
            $ktpPath = $request->file('KTP')->store('documents');
            $kredit->ktp = $ktpPath;
        }
        if ($request->hasFile('STNK')) {
            $stnkPath = $request->file('STNK')->store('documents');
            $kredit->stnk = $stnkPath;
        }
        if ($request->hasFile('KK')) {
            $kkPath = $request->file('KK')->store('documents');
            $kredit->kk = $kkPath;
        }

        // Save the record again to include file paths
        $kredit->save();

        // Return a success response
        return response()->json([
            'message' => 'Data successfully created.',
            'redirect_url' => route('PengajuanKredit')
        ]);
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
