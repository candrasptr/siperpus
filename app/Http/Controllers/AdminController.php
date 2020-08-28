<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Buku;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_admin')
                ->where('tbl_admin.nama_admin','like',"%{$request->keyword}%")
                ->paginate(10);

        return view('admin.manajemenpetugas.index',['data'=>$data]);
    }

    public function inputdata(){
        return view('admin.petugas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manajemenpetugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_admin'=>'required|min:3|max:255',
            'email'=>'required|string|email|max:255|unique:tbl_admin',
            'password'=>'required|string|min:8',
        ]);

        Admin::create([
            'nama_admin'=>$request->nama_admin,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->route('admin.index')->with('store','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.manajemenpetugas.edit',['row'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'nama_admin'=>'required|min:3|max:255',
            'email'=>'required|string|email|max:255|unique:tbl_admin',
            'password'=>'nullable|string',
        ]);

        $query = [
            'nama_admin'=>$request->nama_admin,
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        $admin->update($query);
        return redirect()->route('admin.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('destroy','Berhasil dihapus!');
    }

    public function autocomplete(Request $request)
    {
          $search = $request->get('term');
     
          $result = Buku::where('judul_buku', 'LIKE', '%'. $search. '%')->get();

          return response()->json($result);
           
    } 

        // admin
        public function admin(){
            return view('admin.loginuser');
        }
    
        public function regis(){
            return view('admin.Register');
        }
    
        public function dashboard(){
            return view('admin.index');
        }
    
        // Profile
        public function bukutamu(){
            return view('admin/bukutamu.index');
        }

        public function editbukutamu(){
            return view('admin/bukutamu.edit');
        }
    
        // buku
        public function buku(){
            return view('admin/buku.index');
        }
    
        public function editbuku(){
            return view('admin/buku.edit');
        }
    
        public function createbuku(){
            return view('admin/buku.create');
        }
    
        //kategori
        public function kategori(){
            return view('admin/kategori.index');
        }
    
        public function editkategori(){
            return view('admin/kategori.edit');
        }
    
        public function createkategori(){
            return view('admin/kategori.create');
        }
    
        // laporan
        public function laporan(){
            return view('admin/laporan.index');
        }
    
        // Admin
 
    
        public function editAdmin(){
            return view('admin/Admin.edit');
        }
    
        // ruangan
        public function ruangan(){
            return view('admin/ruangan.index');
        }
    
        public function editruangan(){
            return view('admin/ruangan.edit');
        }
    
        public function createruangan(){
            return view('admin/ruangan.create');
        }
    
        // transaksi
        public function transaksi(){
            return view('admin/transaksi.index');
        }
    
        public function edittransaksi(){
            return view('admin/transaksi.edit');
        }
    
        public function showtran(){
            return view('admin/transaksi.show');
        }

}
