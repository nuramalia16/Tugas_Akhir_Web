<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    //
       //
    // public function index(){
    //     $Driver = Driver::all();
    //     return view('driver.index',compact(['Driver']));
    // }
    public function index(Request $request){
        // $Driver = Driver::all();
        // return view('driver.index',compact(['Driver']));
        $katakunci = $request->katakunci;

        // Inisialisasi query builder
        $Driver = Driver::query();

        // Cek apakah ada kata kunci pencarian
        if (strlen($katakunci)) {
            $Driver->where('Nama', 'like', "%$katakunci%");
        }

        // Ambil data driver
        $data = $Driver->orderBy('Nama', 'asc')->get();

        return view('admin.indexdriv')->with('data', $data);
    }
    public function index2()
    {
        $drivers = Driver::all(); // Adjust this based on your needs
    
        return view('user.driver', compact('drivers'));
    }
    
    public function create()
    {
        //
        return view('admin.createdriv');
    }
    
    public function store(Request $request)
    {

        // return $request->file('image')->store('post-images');
        session()->flash('Nama', $request->nama);
        session()->flash('Gender', $request->gender);
        session()->flash('Umur', $request->umur);
        $request->validate([
            'nama'=>'required',
            'gender'=>'required',
            'umur'=>'required',
            'image' => 'image|file|max:1024',
            

        ],[
            'nama.required'=>'Masukkan Nama dari driver',
            'geneder.required'=>'Masukkan gender dari driver',
            'umur.required'=>'Masukkan gender dari driver',
            'image.required'=>'Silahkan Masukkan Gambar',
        ]);
     
        $imagePath = $request->file('image')->store('imageDriver', 'public');

       
        $data= [
            'Nama'=>$request->nama,
            'Gender'=>$request->gender,
            'Umur'=>$request->umur,
            'Gambar' =>$imagePath,
        ];
        Driver::create($data);
        return redirect()->to('driver')->with('success','Berhasil Menambahkan Data');
    }
    public function edit(string $id)
    {
        //
        
        $data = Driver::find($id);
        return view('admin.editdriv')->with('data',$data);
    }
    public function update(Request $request, string $id)
{
    $request->validate([
        'nama' => 'required',
        'gender' => 'required',
        'umur' => 'required',
        'image' => 'image|file|max:1024',
    ]);

    $data = [
        'Nama' => $request->nama,
        'Gender' => $request->gender,
        'Umur' => $request->umur,
    ];

    // Periksa apakah ada file gambar yang diunggah
    if ($request->hasFile('image')) {
        // Validasi dan simpan gambar baru
        $request->validate([
            'image' => 'image|file|max:1024',
        ]);

        // Hapus gambar lama jika ada
        $driver = Driver::find($id);
        if ($driver->Gambar && Storage::exists($driver->Gambar)) {
            Storage::delete($driver->Gambar);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('imageDriver', 'public');
        $data['Gambar'] = $imagePath;
    }

    // Lakukan update data
    Driver::where('id', $id)->update($data);

    return redirect()->to('driver')->with('success', 'Berhasil melakukan perubahan data');
}
public function destroy(string $id)
{
    // Cari data driver berdasarkan ID
    $driver = Driver::find($id);

    // Hapus gambar terkait dari storage jika ada
    if ($driver->Gambar && Storage::exists($driver->Gambar)) {
        Storage::delete($driver->Gambar);
    }

    // Hapus data driver dari database
    Driver::destroy($id);

    return redirect()->to('driver')->with('success', 'Data berhasil dihapus');
}

}
