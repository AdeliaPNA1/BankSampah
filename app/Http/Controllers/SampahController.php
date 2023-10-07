<?php

namespace App\Http\Controllers;

use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SampahController extends Controller
{
    public function index(Request $request)
    {
        $sampahs = Sampah::all();

        $sampahs = Sampah::where([
            ['namaSampah', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('namaSampah', 'LIKE', '%' . $s . '%')
                        ->orWhere('gambarSampah', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(100);
        return view('admin.data.jenisSampah.index', compact('sampahs'));
    }

    
    public function create()
    {
        return view('admin.data.jenisSampah.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaSampah' => 'required',
            'gambarSampah' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image
        $data = $request->all();
        
        $data['gambarSampah'] = $request->file('gambarSampah')->store('sampah');
        
        Sampah::create($data); 
 
        return redirect()->route('sampahs.index')->with('success','Tambah data berhasil.');
    }

    public function show(Sampah $sampah)
    {
        //
    }

    public function edit($id)
    {
        $sampah = Sampah::find($id);
        // dd($sampah);

        return view('admin.data.jenisSampah.edit', [
            'sampah' => $sampah
        ]);
    }

    public function update(Request $request, $id)
    {
        if (empty($request->file('gambarSampah'))) {

            //upload new image
            $sampah = Sampah::find($id); 
            $sampah->update([
                'namaSampah' => $request->namaSampah,
                'gambarSampah' => $request->file('gambarSampah')->store('sampah'),
            ]);

            return redirect()->route('sampahs.index')->with(['success' => 'Data Berhasil Diupdate!']);

        } else {

            //update post without image
            $sampah = Sampah::find($id); 
            Storage::delete($sampah->gambarSampah);
            $sampah->update([
                'namaSampah' => $request->namaSampah,
                'gambarSampah' => $request->file('gambarSampah')->store('sampah'),
            ]);
 
        return redirect()->route('sampahs.index')->with('success','Data berhasil di update.');
        }
    }

    public function destroy($id)
    {
        $sampah = Sampah::find($id);

        Storage::delete($sampah->gambarSampah);
        $sampah->delete();

        return redirect()->route('sampahs.index')->with('success','Data berhasil di hapus.');
    }
}


