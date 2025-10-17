<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminServiceModel;
use App\Models\AdminSpecializedCategoryModel;
use App\Models\AdminSpecializedModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function index()
    {

        $services = AdminServiceModel::get();
        $videos = AdminVideoDescModel::get();
        $categories = AdminSpecializedCategoryModel::get();
        $spInfo = AdminSpecializedModel::with('category')->inRandomOrder()->get();

        $marketingServices = AdminServiceModel::where('type', 'Marketing & Business Growth')->get();

        $DigitalServices = AdminServiceModel::where('type', 'Digital Marketing & Online Presence')->get();

        $WebsiteAppDevelopmentServices = AdminServiceModel::where('type', 'Website & App Development')->get();

        $softwareServices = AdminServiceModel::where('type', 'Software Solutions (Graphicode India)')->get();

        $educationalServices = AdminServiceModel::where('type', 'Educational Services (Schoolwala)')->get();

        $creativeDesignStudioServices = AdminServiceModel::where('type', 'Creative & Design Studio')->get();

        $consultancyBusinessSupportServices = AdminServiceModel::where('type', 'Consultancy & Business Support')->get();

        $offlineFieldServices = AdminServiceModel::where('type', 'Offline Field Services')->get();

        return view('user-services', compact('services', 'videos', 'categories', 'spInfo', 'marketingServices', 'DigitalServices', 'WebsiteAppDevelopmentServices', 'softwareServices', 'educationalServices', 'creativeDesignStudioServices', 'consultancyBusinessSupportServices', 'offlineFieldServices'));
    }
}
