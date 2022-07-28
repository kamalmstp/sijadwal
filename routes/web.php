<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'GuestController@index')->name('index');
Route::get('/pengumuman/{id}', 'GuestController@pengumuman')->name('pengumuman');
Route::get('/jadwal', 'GuestController@jadwal')->name('jadwal_guest');
Route::get('/layarfulljadwal', 'GuestController@layarfulljadwal')->name('layarfulljadwalguest');
Route::get('/layarfullpengumuman', 'GuestController@layarfullpengumuman')->name('layarfullpengumumanguest');
Route::get('/pemesanan_jadwal_ruang_kosong', 'GuestController@pemesanan_jadwal_ruang_kosong')->name('pemesanan_jadwal_ruang_kosong');
Route::post('/pemesanan_jadwal_ruang_kosong/simpan', 'GuestController@simpanpemesanan_jadwal_ruang_kosong')->name('simpanpemesanan_jadwal_ruang_kosong');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mulai akademik edit profil
Route::get('/akademik/editprofil', 'AkademikController@editprofil')->name('editprofil');
Route::patch('/akademik/updateprofil', 'AkademikController@updateprofil')->name('updateprofil');
//akhir akademik edit profil

//mulai akademik prodi
Route::get('/akademik/prodi', 'ProdiController@index')->name('prodi');
Route::get('/akademik/prodi/tambah', 'ProdiController@tambahprodi')->name('tambahprodi');
Route::post('/akademik/prodi/simpan', 'ProdiController@simpanprodi')->name('simpanprodi');

Route::get('/akademik/editprodi/{id_prodi}', 'ProdiController@editprodi')->name('editprodi');
Route::patch('/akademik/updateprodi/{id_prodi}', 'ProdiController@updateprodi')->name('updateprodi');

Route::get('/akademik/prodi/{id_prodi}/delete', 'ProdiController@hapusprodi')->name('hapusprodi');
Route::delete('/akademik/prodi/{id_prodi}/delete', 'ProdiController@deleteprodi')->name('deleteprodi');
//tutup akademik prodi

//mulai akademik list history
Route::get('/akademik/list_history', 'ListhistoryController@index')->name('list_history');
//tutup akademik list_history

//mulai tahun ajaran / kurikulum
Route::get('/akademik/tahunajaran', 'TahunajaranController@index')->name('tahunajaran');

Route::get('/akademik/tahun_ajaran/tambah', 'TahunajaranController@tambahtahun_ajaran')->name('tambahtahun_ajaran');
Route::post('/akademik/tahun_ajaran/simpan', 'TahunajaranController@simpantahun_ajaran')->name('simpantahun_ajaran');

Route::get('/akademik/tahun_ajaran/{id}/edit', 'TahunajaranController@edittahun_ajaran')->name('edittahun_ajaran');
Route::patch('/akademik/tahun_ajaran/update/{id}', 'TahunajaranController@updatetahun_ajaran')->name('updatetahun_ajaran');

Route::get('/akademik/tahun_ajaran/hapus/{id}', 'TahunajaranController@hapustahun_ajaran')->name('hapustahun_ajaran');
Route::delete('/akademik/tahun_ajaran/delete/{id}', 'TahunajaranController@deletetahun_ajaran')->name('deletetahun_ajaran');
//tutup tahun ajaran / kurikulum

//mulai akademik kurikulum
Route::get('/akademik/kurikulum', 'KurikulumController@index')->name('kurikulum');
//tutup akademik kurikulum

//mulai akademik waktu
Route::get('/akademik/hari', 'WaktuController@hari')->name('hari');
Route::get('/akademik/hari/tambah', 'WaktuController@tambahhari')->name('tambahhari');
Route::post('/akademik/hari/simpan', 'WaktuController@simpanhari')->name('simpanhari');
Route::get('/akademik/hari/{id}/edit', 'WaktuController@edithari')->name('edithari');
Route::patch('/akademik/hari/update/{id}', 'WaktuController@updatehari')->name('updatehari');
Route::delete('/akademik/hari/delete/{id}', 'WaktuController@deletehari')->name('deletehari');

Route::get('/akademik/jam', 'WaktuController@jam')->name('jam');
Route::get('/akademik/jam/tambah', 'WaktuController@tambahjam')->name('tambahjam');
Route::post('/akademik/jam/simpan', 'WaktuController@simpanjam')->name('simpanjam');
Route::get('/akademik/jam/{id}/edit', 'WaktuController@editjam')->name('editjam');
Route::patch('/akademik/jam/update/{id}', 'WaktuController@updatejam')->name('updatejam');
Route::delete('/akademik/jam/delete/{id}', 'WaktuController@deletejam')->name('deletejam');

Route::get('/akademik/waktu', 'WaktuController@waktu')->name('waktu');
Route::get('/akademik/waktu/tambah', 'WaktuController@tambahwaktu')->name('tambahwaktu');
Route::post('/akademik/waktu/simpan', 'WaktuController@simpanwaktu')->name('simpanwaktu');
Route::get('/akademik/waktu/{id}/edit', 'WaktuController@editwaktu')->name('editwaktu');
Route::patch('/akademik/waktu/update/{id}', 'WaktuController@updatewaktu')->name('updatewaktu');
Route::delete('/akademik/waktu/delete/{id}', 'WaktuController@deletewaktu')->name('deletewaktu');
//tutup akademik waktu

//mulai akademik ruangan
Route::get('/akademik/ruangan', 'RuanganController@ruangan')->name('ruangan');
Route::get('/akademik/ruangan/tambah', 'RuanganController@tambahruangan')->name('tambahruangan');
Route::post('/akademik/ruangan/simpan', 'RuanganController@simpanruangan')->name('simpanruangan');
Route::get('/akademik/ruangan/{id}/edit', 'RuanganController@editruangan')->name('editruangan');
Route::patch('/akademik/ruangan/update/{id}', 'RuanganController@updateruangan')->name('updateruangan');
Route::delete('/akademik/ruangan/delete/{id}', 'RuanganController@deleteruangan')->name('deleteruangan');
//tutup akademik ruangan

//mulai akademik kuliah
Route::get('/akademik/dosen', 'KuliahController@dosen')->name('dosen');
Route::get('/akademik/dosen/tambah', 'KuliahController@tambahdosen')->name('tambahdosen');
Route::post('/akademik/dosen/simpan', 'KuliahController@simpandosen')->name('simpandosen');
Route::get('/akademik/dosen/{id}/edit', 'KuliahController@editdosen')->name('editdosen');
Route::patch('/akademik/dosen/update/{id}', 'KuliahController@updatedosen')->name('updatedosen');
Route::delete('/akademik/dosen/delete/{id}', 'KuliahController@deletedosen')->name('deletedosen');

Route::get('/akademik/matakuliah', 'KuliahController@matakuliah')->name('matakuliah');
Route::get('/akademik/matakuliah/tambah', 'KuliahController@tambahmatakuliah')->name('tambahmatakuliah');
Route::post('/akademik/matakuliah/simpan', 'KuliahController@simpanmatakuliah')->name('simpanmatakuliah');
Route::get('/akademik/matakuliah/{id}/edit', 'KuliahController@editmatakuliah')->name('editmatakuliah');
Route::patch('/akademik/matakuliah/update/{id}', 'KuliahController@updatematakuliah')->name('updatematakuliah');
Route::delete('/akademik/matakuliah/delete/{id}', 'KuliahController@deletematakuliah')->name('deletematakuliah');

Route::get('/akademik/jamkuliah', 'KuliahController@jamkuliah')->name('jamkuliah');

Route::any('/akademik/bagikelas/{id}', 'KuliahController@bagikelas')->name('bagikelas');
//tutup akademik kuliah

//mulai akademik jadwal
Route::get('/akademik/kelolajadwal/tahun_ajaran', 'JadwalController@kelolajadwal_tahunajaran')->name('kelolajadwal_tahunajaran');
Route::any('/akademik/kelolajadwal', 'JadwalController@kelolajadwal')->name('kelolajadwal');
Route::get('/akademik/kelolajadwal/import', 'JadwalController@kelolajadwal_import')->name('kelolajadwal_import');
Route::post('/akademik/kelolajadwal/import/simpan', 'JadwalController@storeDatajadwal')->name('storeDatajadwal');

Route::get('/akademik/kelolajadwal/export/{id}', 'JadwalController@kelolajadwal_export')->name('exportjadwal');
Route::get('/akademik/kelolajadwal/export/simpan/{id}', 'JadwalController@kelolajadwal_exportsimpan')->name('exportjadwalsimpan');

Route::any('/akademik/kelolajadwall/{id}', 'JadwalController@kelolajadwal2')->name('kelolajadwal2');
Route::any('/akademik/kelolajadwal/tambah', 'JadwalController@tambahkelolajadwal')->name('tambahkelolajadwal');
Route::post('/akademik/kelolajadwal/simpan', 'JadwalController@simpankelolajadwal')->name('simpankelolajadwal');
Route::get('/akademik/kelolajadwal/gagal', 'JadwalController@gagalkelolajadwal')->name('gagalkelolajadwal');
Route::get('/akademik/kelolajadwal/gagal2', 'JadwalController@gagalkelolajadwal2')->name('gagalkelolajadwal2');
Route::get('/akademik/kelolajadwal/{id}/editjadwal', 'JadwalController@editkelolajadwal')->name('editkelolajadwal');
Route::patch('/akademik/kelolajadwal/update/{id}', 'JadwalController@updatekelolajadwal')->name('updatekelolajadwal');
Route::delete('/akademik/kelolajadwal/delete/{id}', 'JadwalController@deletekelolajadwal')->name('deletekelolajadwal');
Route::delete('/akademik/kelolajadwal/deletesemua/{id}', 'JadwalController@deletekelolajadwalsemua')->name('deletekelolajadwalsemua');

Route::get('/akademik/hasiljadwal/tahun_ajaran', 'JadwalController@hasiljadwal_tahunajaran')->name('hasiljadwal_tahunajaran');
Route::any('/akademik/hasiljadwal', 'JadwalController@hasiljadwal')->name('hasiljadwal');
//tutup akademik jadwal

//mulai akademik jadwal guest
Route::get('/akademik/jadwalguest', 'JadwalguestController@jadwalguest')->name('jadwalguest');
Route::post('/akademik/jadwalguest/tahun_ajaran', 'JadwalguestController@simpanjadwalguest')->name('simpanjadwalguest');
Route::patch('/akademik/jadwalguest/tahun_ajaran', 'JadwalguestController@updatejadwalguest')->name('updatejadwalguest');
//tutup akademik jadwal guest

//mulai akademik berita
Route::get('/akademik/berita', 'BeritaController@berita')->name('berita');
Route::get('/akademik/berita/tambah', 'BeritaController@tambahberita')->name('tambahberita');
Route::post('/akademik/berita/simpan', 'BeritaController@simpanberita')->name('simpanberita');
Route::get('/akademik/berita/{id}/edit', 'BeritaController@editberita')->name('editberita');
Route::patch('/akademik/berita/update/{id}', 'BeritaController@updateberita')->name('updateberita');
Route::delete('/akademik/berita/delete/{id}', 'BeritaController@deleteberita')->name('deleteberita');
//tutup akademik berita

//mulai akademik jadwal guest
Route::get('/akademik/publikasijadwal', 'PublikasijadwalController@publikasijadwal')->name('publikasijadwal');
//tutup akademik jadwal guest

//mulai akademik mahasiswa
Route::get('/akademik/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/akademik/mahasiswa/tambah', 'MahasiswaController@tambahmahasiswa')->name('tambahmahasiswa');
Route::post('/akademik/mahasiswa/simpan', 'MahasiswaController@simpanmahasiswa')->name('simpanmahasiswa');

Route::get('/akademik/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa')->name('editmahasiswa');
Route::patch('/akademik/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa')->name('updatemahasiswa');

Route::get('/akademik/mahasiswa/{id}/delete', 'MahasiswaController@hapusmahasiswa')->name('hapusmahasiswa');
Route::delete('/akademik/mahasiswa/{id}/delete', 'MahasiswaController@deletemahasiswa')->name('deletemahasiswa');
//tutup akademik mahasiswa

//mulai akademik pemesanan ruangan kosong
Route::get('/akademik/pemesanan_ruangan_kosong', 'PemesananruangkosongController@index')->name('pemesanan_ruangan_kosong');
Route::get('/akademik/pemesanan_ruangan_kosong/tambah', 'PemesananruangkosongController@tambahpemesanan_ruangan_kosong')->name('tambahpemesanan_ruangan_kosong');
Route::post('/akademik/pemesanan_ruangan_kosong/simpan', 'PemesananruangkosongController@simpanpemesanan_ruangan_kosong')->name('simpanpemesanan_ruangan_kosong');

Route::get('/akademik/editpemesanan_ruangan_kosong/{id}', 'PemesananruangkosongController@editpemesanan_ruangan_kosong')->name('editpemesanan_ruangan_kosong');
Route::patch('/akademik/updatepemesanan_ruangan_kosong/{id}', 'PemesananruangkosongController@updatepemesanan_ruangan_kosong')->name('updatepemesanan_ruangan_kosong');

Route::get('/akademik/pemesanan_ruangan_kosong/{id}/delete', 'PemesananruangkosongController@hapuspemesanan_ruangan_kosong')->name('hapuspemesanan_ruangan_kosong');
Route::delete('/akademik/pemesanan_ruangan_kosong/{id}/delete', 'PemesananruangkosongController@deletepemesanan_ruangan_kosong')->name('deletepemesanan_ruangan_kosong');
//tutup akademik pemesanan ruangan kosong