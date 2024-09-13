<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaxRegistryRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OldRecordsTaxRegistryMail;
use Illuminate\Database\RecordsNotFoundException;

class PinCodeController extends Controller
{

        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    // testing
    public function store(Request $request)
    {
        // Validate email and phone number
        $request->validate([
            'email' => 'required|email',
            'phone_number' => ['required', 'regex:/^\+1 \d{3}-\d{3}-\d{4}$/'],
        ]);

        $record = TaxRegistryRecord::where('url_pin', $request->url_pin)->first();

        if (!$record) {
            return redirect()->route('tr.home')->with(['status' => 'danger', 'msg' => 'Enter a valid URL Pin number.']);
        }

        $address = $record->mailing; 
        $addresses = explode('/', $address);
        $address_one = isset($addresses[0]) ? trim($addresses[0]) : '';
        $address_two = isset($addresses[1]) ? trim($addresses[1]) : '';


        $updatedValues = [];
        $hasChanges = false;

        if ($request->filled('first_name') && $request->first_name !== $record->first) {
            $updatedValues['first'] = $request->first_name;
            $hasChanges = true;
        }

        if ($request->filled('middle_name') && $request->middle_name !== $record->mi) {
            $updatedValues['mi'] = $request->middle_name;
            $hasChanges = true;
        }

        if ($request->filled('last_name') && $request->last_name !== $record->last) {
            $updatedValues['last'] = $request->last_name;
            $hasChanges = true;
        }

        if ($request->filled('address_one') && $request->address_one !== $address_one) {
            $updatedValues['mailing'] = $request->address_one;
            $hasChanges = true;
        }

        if ($request->filled('address_two') && $request->address_two !== $address_two) {
            $updatedValues['address_two'] = $request->address_two;
            $hasChanges = true;
        }

        // if ($request->filled('address_two')) {
        //     $updatedValues['address_two'] = $request->address_two;
        //     $hasChanges = true;
        // }

        if ($request->filled('city') && $request->city !== $record->city) {
            $updatedValues['city'] = $request->city;
            $hasChanges = true;
        }

        if ($request->filled('state') && $request->state !== $record->state) {
            $updatedValues['state'] = $request->state;
            $hasChanges = true;
        }

        if ($request->filled('post_code') && $request->post_code !== $record->zip) {
            $updatedValues['zip'] = $request->post_code;
            $hasChanges = true;
        }

        // Prepare other necessary fields for the email

        $url_pin_number = $record->url_pin;
        $userName = "{$request->first_name} {$request->middle_name} {$request->last_name}";
        $email = $request->email;
        $phone_number = $request->phone_number;
        $comments = $request->comments;
        $address_two = $request->address_two;
        $comments = preg_replace('/[^A-Za-z0-9\s]/', '', $comments);
        $check_box = $request->input('options', []);

        if (!$hasChanges) {
            // No changes, send email with original record only
            Mail::to('tauseefdevelopment000@gmail.com')
                ->cc($email)
                ->send(new OldRecordsTaxRegistryMail(
                    $userName,
                    null, 
                    $email,
                    $phone_number,
                    $comments,
                    $check_box,
                    $record->toArray(),
                    $url_pin_number,
                    $address_two
                ));

            return redirect()->route('tr.status');
        }

        // Changes detected, send email with updated values
        Mail::to('tauseefdevelopment000@gmail.com')
            ->cc($email)
            ->send(new OldRecordsTaxRegistryMail(
                $userName,
                $updatedValues,
                $email,
                $phone_number,
                $comments,
                $check_box,
                $record->toArray(),
                $url_pin_number,
                $address_two
            ));

        $fileDate = \DateTime::createFromFormat('d-m-Y', $record->file_date);
        $record->file_date = $fileDate->format('Ymd');


        $uploadDate = \DateTime::createFromFormat('d-m-Y', $record->upload_date);
        $record->upload_date = $uploadDate->format('Ymd');

        // Update the record in the database
        $record->first = ucfirst(strtolower($request->first_name));
        $record->mi = ucfirst(strtolower($request->middle_name));
        $record->last = ucfirst(strtolower($request->last_name));
        // $record->mailing = ucwords(strtolower($request->address_one));
        $record->mailing = ucwords(strtolower($request->address_one)) . " / " . ucwords(strtolower($address_two));
        $record->city = ucwords(strtolower($request->city));
        $record->state = strtoupper($request->state);
        $record->zip = $request->post_code;
        $record->save();

        return redirect()->route('tr.status');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validation = $request->validate([
            'pin_code' => [
                'required',
                'regex:/^\d{5}-\d{3}-\d{5}$/',
            ],
        ]);

        $data = TaxRegistryRecord::where('url_pin', $request->pin_code)->first();

        if ($data) {
            return view('user_record')->with(['data' => $data, 'alert' => 'success', 'msg' => 'Success']);
        } else {
            return redirect()->route('tr.home')->with(['alert' => 'danger', 'msg' => 'Record not Found.Please Inter Valid Number']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function record(Request $request)
    {
        $data = TaxRegistryRecord::where('url_pin', $request->url_pin_code)->first();
        if ($data) {
            return view('user_tax_registry_form', compact('data'));
        } else {
            return redirect()->route('tr.home')->with(['alert' => 'danger', 'msg' => 'Record not Found.Please wait..']);
        }
    }

    public function status()
    {
        return view('tax_registry_status');
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
