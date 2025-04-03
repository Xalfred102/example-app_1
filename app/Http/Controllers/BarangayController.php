<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class BarangayController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'barangay_id' => 'required|exists:barangays,id',
            'barangay_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $barangay = Barangay::findOrFail($request->barangay_id);

        if ($request->hasFile('barangay_image')) {
            $image = $request->file('barangay_image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Unique filename
            $imagePath = $image->storeAs('barangays', $imageName, 'public');
            
            // Update barangay image path in the database
            $barangay->update(['image' => $imagePath]);
        }
        

        return back()->with('success', 'Barangay image uploaded successfully!');
    }
    public function show($id)
{
    $barangay = Barangay::findOrFail($id);
    return view('barangay.show', compact('barangay'));
}

}