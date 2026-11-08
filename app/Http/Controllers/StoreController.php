<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('store.index', [
            'title' => 'Store',
            'stores' => Store::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.create', [
            'title' => 'Create Store']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required', 
        'owner' => 'required',
        'category' => 'required', 
        'address' => 'required',
        'omset' => 'required|numeric',
    ],
    [
        'name.required' => 'Nama wajib di input',
        'owner.required' => 'Pemilik wajib di input',
        'category.required' => 'Kategori wajib di input',
        'address.required' => 'Alamat wajib di input',
        'omset.required' => 'Penghasilan wajib di input',
        'omset.numeric' => 'Penghasilan wajib berupa angka',
    ]);
    Store::create( $validated);
    return redirect()->route('store.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store) 
    {
        return view('store.show', [
        'title' => 'Detail ' . $store->name,
        'store' => $store
    ]);
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    { 
        return view('store.edit', [
            'title' => 'Edit Store',
            'store' => $store,
            ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        $validated = $request->validate([
        'name' => 'required', 
        'owner' => 'required',
        'category' => 'required', 
        'address' => 'required',
        'omset' => 'required|numeric',
    ],
    [
        'name.required' => 'Nama wajib di input',
        'owner.required' => 'Pemilik wajib di input',
        'category.required' => 'Kategori wajib di input',
        'address.required' => 'Alamat wajib di input',
        'omset.required' => 'Penghasilan wajib di input',
        'omset.numeric' => 'Penghasilan wajib berupa angka',
    ]);
    $store->update($validated);
    return redirect()->route('store.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
