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
            'barangay_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $barangay = Barangay::findOrFail($request->barangay_id);

        if ($request->hasFile('barangay_image')) {
            // Delete old image if exists
            if ($barangay->image && file_exists(storage_path('app/public/' . $barangay->image))) {
                unlink(storage_path('app/public/' . $barangay->image));
            }

            // Save new image
            $imagePath = $request->file('barangay_image')->store('barangays', 'public');
            $barangay->update(['image' => $imagePath]);
        }

        return back()->with('success', 'Barangay image uploaded successfully!');
    }
}