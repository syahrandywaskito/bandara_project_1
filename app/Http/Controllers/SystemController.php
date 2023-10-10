<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\CCTVList;
use App\Models\CctvModel;
use App\Models\fids;
use App\Models\fidslist;
use App\Models\Jadwal;
use App\Models\Komputer;
use App\Models\KomputerList;
use App\Models\Kontak;
use App\Models\Saran;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index() : View
    {
        return view('admin.system.index');
    }

    /**
     * 
     * Backup data database melalui model
     * 
     */

     public function backupData() : RedirectResponse
     {
         $backupData = [];
     
         // Daftar model yang tersedia
         $models = [
             'Berita' => Berita::all(),
             'CCTVList' => CCTVList::all(),
             'CctvModel' => CctvModel::all(),
             'fids' => fids::all(),
             'fidslist' => fidslist::all(),
             'Jadwal' => Jadwal::all(),
             'Komputer' => Komputer::all(),
             'KomputerList' => KomputerList::all(),
             'Kontak' => Kontak::all(),
             'Saran' => Saran::all(),
         ];
     
         // Iterasi untuk memasukkan ke dalam array backupData
         foreach ($models as $modelName => $modelData) {
             foreach ($modelData as $row) {
                 // Sertakan nama model dalam setiap baris data
                 $row['model'] = $modelName;
                 $backupData[] = $row;
             }
         }
     
         // Simpan semua data model dalam bentuk JSON
         file_put_contents(storage_path('app/data_backup.json'), json_encode($backupData));
     
         session()->flash('backup', 'Data berhasil dibackup');
     
         // Kembalikan respons yang sesuai
         return redirect()->back();
     }
     

    /**
     * 
     * Restore data dari hasil backup sebelumnya
     * 
     */

     public function restoreData() : RedirectResponse
     {
         // Baca data dari berkas backup
         $backupData = json_decode(file_get_contents(storage_path('app/data_backup.json')), true);
     
         // Lakukan pemulihan data sesuai dengan model yang disimpan dalam data backup
         foreach ($backupData as $row) {
             $modelName = $row['model'];
     
             // Cek apakah model sesuai dengan data backup
             if (class_exists("App\Models\\$modelName")) {
                 $model = app("App\Models\\$modelName");
     
                unset($row['model']);

                // Masukkan data ke dalam tabel menggunakan updateOrInsert()
                $primaryKeyColumn = 'id'; // Ganti dengan nama kolom PRIMARY KEY yang sesuai
                $primaryKeyValue = $row[$primaryKeyColumn];

                // Ubah format datetime jika diperlukan
                if (isset($row['created_at'])) {
                    $row['created_at'] = date('Y-m-d H:i:s', strtotime($row['created_at']));
                }
                if (isset($row['updated_at'])) {
                    $row['updated_at'] = date('Y-m-d H:i:s', strtotime($row['updated_at']));
                }

                // Gunakan updateOrInsert() untuk memasukkan atau memperbarui data
                $model->updateOrInsert(
                    [$primaryKeyColumn => $primaryKeyValue],
                    $row
                );
             }
         }
     
         session()->flash('restore', 'Data berhasil direstore');
     
         // Kembalikan respons yang sesuai
         return redirect()->back();
     }
     

}
