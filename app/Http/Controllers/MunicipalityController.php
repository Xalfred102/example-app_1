<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;
use App\Models\Barangay;

class MunicipalityController extends Controller
{
    // Show municipality details
    public function show($id)
    {
        $municipality = Municipality::with('barangayList')->find($id);
        return view('municipalities.show', compact('municipality'));
    }
    

    // Upload image for municipality
    public function uploadMunicipalityImage(Request $request)
    {
        $request->validate([
            'municipality_id' => 'required|exists:municipalities,id',
            'municipality_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $municipality = Municipality::findOrFail($request->municipality_id);

        if ($request->hasFile('municipality_image')) {
            // Delete old image if exists
            if ($municipality->image && file_exists(public_path('storage/' . $municipality->image))) {
                unlink(public_path('storage/' . $municipality->image));
            }

            // Save new image in storage/app/public/municipalities
            $imagePath = $request->file('municipality_image')->store('municipalities', 'public');

            // Update database with new image path (only the relative path)
            $municipality->update(['image' => $imagePath]);
        }

        return redirect()->route('municipality.show', $municipality->id)->with('success', 'Municipality image uploaded successfully!');
    }

    // Upload image for barangay
    public function uploadBarangayImage(Request $request)
    {
        $request->validate([
            'barangay_id' => 'required|exists:barangays,id',
            'barangay_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $barangay = Barangay::findOrFail($request->barangay_id);

        if ($request->hasFile('barangay_image')) {
            // Delete old image if exists
            if ($barangay->image && file_exists(public_path('storage/' . $barangay->image))) {
                unlink(public_path('storage/' . $barangay->image));
            }

            // Save new image in storage/app/public/barangays
            $imagePath = $request->file('barangay_image')->store('barangays', 'public');

            // Update database with new image path (only the relative path)
            $barangay->update(['image' => $imagePath]);
        }

        return redirect()->back()->with('success', 'Barangay image uploaded successfully!');
    }

    // List all municipalities
    public function index()
    {
        $municipalities = Municipality::all();
        return view('municipalities.index', compact('municipalities'));
    }
}
