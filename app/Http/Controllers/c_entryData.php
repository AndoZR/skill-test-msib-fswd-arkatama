<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class c_entryData extends Controller
{
    protected function viewUserData()
    {
        $user = User::get();
        return view('user.daftarData', ['user' => $user]);
    }

    protected function addUser()
    {
        return view('user.addUser');
    }

    public function saveUser(Request $request)
    {
        // Validate
        $request->validate([
            'data' => 'required',
        ]);

        // give id user
        $kode = 'usr';
        $i = 1;
        while ($i >= 0) {
            $user_id = $kode . $i;

            $select = User::where('ID', $user_id)->first();
            if (!$select) {
                break;
            }
    
            $i++;
        }

        $patterns = array('/tahun/i', '/TAHUN/i', '/TH/i', '/th/i', '/thn/i');
        $replacement = '';

        // Menghapus kata "tahun" atau "TAHUN" dari data
        $cleanedData = preg_replace($patterns, $replacement, $request->data);

        // Mengubah string menjadi huruf kapital
        $upperCase = strtoupper($cleanedData);

        // Menggunakan regular expression untuk memisahkan Nama, Usia, dan Kota
        preg_match('/^([a-zA-Z ]+)(\d+)([a-zA-Z ]+)$/', $upperCase, $matches);

        // Mengambil hasil dari masing-masing grup
        $nama = trim($matches[1]);
        $usia = (int)$matches[2];
        $kota = trim($matches[3]);

        // set var
        $data = [
            'ID' => $user_id,
            'NAME'=>$nama,
            'AGE'=>$usia,
            'CITY'=>$kota,
        ];

        User::create($data);
        return redirect()->route('viewData')->with('messageBerhasil', 'Data berhasil disimpan!');
    }
}
