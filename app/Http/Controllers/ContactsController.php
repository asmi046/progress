<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ControlOrganization;

class ContactsController extends Controller
{
    public function index()
    {
        $all_contact = Contact::all();
        $opt = [];
        foreach ($all_contact as $item) {
            $opt[$item['name']] = $item['value'];
        }

        return view('contacts', ['contacts' => $opt]);
    }

    public function control_organization()
    {
        $organizations = ControlOrganization::orderBy('sort_order')->get();

        return view('control-organizations', ['organizations' => $organizations]);
    }
}
