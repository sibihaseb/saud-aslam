<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\DataTables\ContactDataTable;

class ContactController extends Controller
{
    public function index(ContactDataTable $dataTable)
    {
        return $dataTable->render('pages.contacts-us.index');
    }

    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save data to the database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'We’ve received your message and will get back to you shortly!');
    }
    public function destroy($id)
    {
        Contact::destroy($id);
        return response()->json(['success' => true]);
    }

    public function bulkDelete(Request $request)
    {
        Contact::whereIn('id', $request->ids)->delete();
        return response()->json(['success' => true]);
    }
}
