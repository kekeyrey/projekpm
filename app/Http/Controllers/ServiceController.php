<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar layanan.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Menampilkan form untuk membuat layanan baru.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Menyimpan data layanan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        try {
            $service = new Service();
            $service->fill($request->all());
            $service->save();

            return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan!');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menampilkan detail layanan.
     */
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    /**
     * Menampilkan form untuk mengedit layanan.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Memperbarui layanan.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        try {
            $service->update($request->all());

            return redirect()->route('services.index')->with('success', 'Layanan berhasil diperbarui!');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menghapus layanan.
     */
    public function destroy(Service $service)
    {
        try {
            if (!$service) {
                return redirect()->route('services.index')->with('error', 'Layanan tidak ditemukan.');
            }

            $service->delete();

            return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus!');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
