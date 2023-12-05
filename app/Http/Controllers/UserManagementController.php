<?php

namespace Ekasit\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index() {
        return view('system.user_management.index');         
    }   
    public function companyList() {
        return view('system.user_management.company');         
    }    
}
