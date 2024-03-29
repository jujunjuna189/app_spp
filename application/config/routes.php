<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Routing
// Auth
$route['login'] = 'AuthController/index';
$route['onLogin'] = 'AuthController/onLogin';
$route['register'] = 'AuthController/register';
$route['onRegister'] = 'AuthController/onRegister';
// Dashboard
$route['dashboard'] = 'DashboardController/index';
// Kategori
$route['kategori'] = 'KategoriController/index';
$route['kategori/store'] = 'KategoriController/store';
$route['kategori/get-by-id'] = 'KategoriController/getById';
$route['kategori/update'] = 'KategoriController/update';
$route['kategori/delete'] = 'KategoriController/delete';
// Barang
$route['barang'] = 'BarangController/index';
$route['barang/store'] = 'BarangController/store';
$route['barang/get-by-id'] = 'BarangController/getById';
$route['barang/update'] = 'BarangController/update';
$route['barang/delete'] = 'BarangController/delete';
// Barang kategori
$route['barang-kategori'] = 'BarangKategoriController/index';
$route['barang-kategori/store'] = 'BarangKategoriController/store';
$route['barang-kategori/get-by-id'] = 'BarangKategoriController/getById';
$route['barang-kategori/update'] = 'BarangKategoriController/update';
$route['barang-kategori/delete'] = 'BarangKategoriController/delete';
// Kelas
$route['kelas'] = 'KelasController/index';
$route['kelas/store'] = 'KelasController/store';
$route['kelas/get-by-id'] = 'KelasController/getById';
$route['kelas/update'] = 'KelasController/update';
$route['kelas/delete'] = 'KelasController/delete';
// Pengguna
$route['pengguna'] = 'PenggunaController/index';
$route['pengguna/store'] = 'PenggunaController/store';
$route['pengguna/get-by-id'] = 'PenggunaController/getById';
$route['pengguna/update'] = 'PenggunaController/update';
$route['pengguna/delete'] = 'PenggunaController/delete';
// Siswa
$route['siswa'] = 'SiswaController/index';
$route['siswa/detail'] = 'SiswaController/detail';
$route['siswa/store'] = 'SiswaController/store';
$route['siswa/get-by-id'] = 'SiswaController/getById';
$route['siswa/get-by-search'] = 'SiswaController/getBySearch';
$route['siswa/update'] = 'SiswaController/update';
$route['siswa/delete'] = 'SiswaController/delete';
// Pembayaran
$route['pembayaran'] = 'PembayaranController/index';
$route['pembayaran/hitung-tunggakan'] = 'PembayaranController/hitung_tunggakan';
$route['pembayaran/pembayaran'] = 'PembayaranController/pembayaran';
$route['pembayaran/bayar'] = 'PembayaranController/bayar';
// Dapur
$route['dapur'] = 'DapurController/index';
$route['dapur/store'] = 'DapurController/store';
$route['dapur/delete'] = 'DapurController/delete';
// Laporan
$route['laporan'] = 'LaporanController/index';
