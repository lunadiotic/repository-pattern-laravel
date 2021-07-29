<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $contact = $this->contactRepository->getAll();

        return $contact;
    }

    public function show($id)
    {
        $contact = $this->contactRepository->findById($id);
        return $contact;
    }
}
