<?php

namespace Ekasit\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function translation() {
       return view('system.translations.edit_translation');
    }

    public function label() {
        return view('system.translations.edit_label');
    }
}
