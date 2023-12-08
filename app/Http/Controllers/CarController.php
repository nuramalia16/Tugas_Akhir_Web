<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * menampilkan semua data
     */
    // public function index()
    // {
    //     $data=Car::orderBy('Plat','desc')->get();
    //     return view('car.index')->with('data',$data);
    // }
    public function index(Request $request)
    {
    
    $katakunci = $request->katakunci;

    
    $query = Car::query();

    // Cek apakah ada kata kunci pencarian
    if (strlen($katakunci)) {
        $query->where('Merek', 'like', "%$katakunci%")
              ->orWhere('Nama', 'like', "%$katakunci%");
    }

    // Ambil data mobil
    $data = $query->orderBy('Plat', 'desc')->get();
    // view()->share('carData', $data);

    return view('admin.index')->with('data', $data);
    }
    public function index2() {
        $cars = Car::orderBy('Plat', 'desc')->get();

        return view('home', compact('cars'));
     }
     public function index3()
     {
         $car = Car::all(); // Adjust this based on your needs
     
         return view('user.allcar', compact('car'));
     }
    public function index4()
    {
        $car = Car::all(); // Adjust this based on your needs
       //  dd($car); 
        return view('user.home', compact('car'));
        // return view('user.home')->with('car', $car);
    }
     public function index5()
     {
         $car = Car::all(); // Adjust this based on your needs
     
         return view('welcome', compact('car'));
     }
   

    /**
     * Show the form for creating a new resource.
     * menampilkan form untuk memasukkan data baru
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     * memasukkan data yang baru ke database
     */
    public function store(Request $request)
    {

        // return $request->file('image')->store('post-images');
        session()->flash('Nama', $request->nama);
        session()->flash('Tahun', $request->tahun);
        session()->flash('Plat', $request->plat);
        session()->flash('Harga', $request->harga);
        session()->flash('Merek', $request->merek);
        session()->flash('Jumlah_Kursi', $request->jumlah_kursi);
        $request->validate([
            'nama'=>'required',
            'tahun'=>'required',
            'plat'=>'required|string|unique:cars,Plat',
            'harga'=>'required',
            'merek'=>'required',
            'jumlah_kursi'=>'required',
            'image' => 'image|file|max:1024',
            

        ],[
            'nama.required'=>'Masukkan Nama dari Mobil',
            'tahun.required'=>'Masukkan Tahun dari Mobil',
            'plat.required'=>'Masukkan Plat dari Mobil',
            'plat.unique'=>'Plat yang dimasukkan sudah ada',
            'harga.required'=>'Masukkan Harga dari Mobil',
            'merek.required'=>'Masukkan Merek dari Mobil',
            'jumlah_kursi.required'=>'Masukkan jumlah kursi dari Mobil',
            'image.required'=>'Silahkan Masukkan Gambar',
        ]);
     
        $imagePath = $request->file('image')->store('image', 'public');

       
        $data= [
            'Nama'=>$request->nama,
            'Tahun'=>$request->tahun,
            'Plat'=>$request->plat,
            'Harga'=>$request->harga,
            'Merek'=>$request->merek,
            'Jumlah_Kursi'=>$request->jumlah_kursi,
            'Gambar' =>$imagePath,
        ];
        Car::create($data);
        return redirect()->to('car')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     * menampilkan detail data
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * menampilkan form unk proses edit
     */
    public function edit(string $id)
    {
        //
        
        $data= Car::where('Plat',$id)->first();
        return view('admin.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     * menyimpan data yang kita update
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama'=>'required',
            'tahun'=>'required',
            'harga'=>'required',
            'merek'=>'required',
            'jumlah_kursi'=>'required',
            'image' => 'image|file|max:1024',
            

        ]);   
        $data= [
            'Nama'=>$request->nama,
            'Tahun'=>$request->tahun,
            'Harga'=>$request->harga,
            'Merek'=>$request->merek,
            'Jumlah_Kursi'=>$request->jumlah_kursi,
        ];
        $car = Car::where('Plat', $id)->first();

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($car->Gambar && Storage::exists($car->Gambar)) {
            Storage::delete($car->Gambar);
        }

        // Upload gambar baru
        $image = $request->file('image')->store('image', 'public');
        $data['Gambar'] = $image;
    }
        Car::where('Plat',$id)->update($data);
        return redirect()->to('car')->with('success','Berhasil Malakukan Perubahan Data');
    }

    /**
     * Remove the specified resource from storage.
     * digunkan unutuk melakukan penghapusan data
     */
    public function destroy(string $id)
    {
        //
        // Cari data mobil berdasarkan Plat
    $car = Car::where('Plat', $id)->first();

    // Hapus gambar terkait dari storage jika ada
    if ($car->Gambar && Storage::exists($car->Gambar)) {
        Storage::delete($car->Gambar);
    }

    // Hapus data mobil dari database
    Car::where('Plat', $id)->delete();

    return redirect()->to('car')->with('success', 'Data berhasil dihapus');
    }

}


