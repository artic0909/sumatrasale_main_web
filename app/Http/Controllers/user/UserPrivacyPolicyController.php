<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminSpecializedCategoryModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserPrivacyPolicyController extends Controller
{
     public function index()
    {

        $videos = AdminVideoDescModel::get();
        $categories = AdminSpecializedCategoryModel::get();

        return view('user-privacy-policy', compact('videos', 'categories'));
    }
}
