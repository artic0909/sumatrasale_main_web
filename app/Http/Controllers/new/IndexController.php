<?php

namespace App\Http\Controllers\new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdminServiceModel;
use App\Models\AdminVideoDescModel;
use App\Models\AdminProjectModel;
use App\Models\AdminBlogModel;
use App\Models\AdminSpecializedModel;
use App\Models\AdminPartnerModel;
use App\Models\AdminNumbersModel;
use App\Models\AdminMarqueeTextModel;
use App\Models\AdminAboutFAQModel;

class IndexController extends Controller
{
    public function index()
    {
        $services = AdminServiceModel::inRandomOrder()->paginate(9);
        $videos = AdminVideoDescModel::get();
        $projects = AdminProjectModel::get();
        $blogs = AdminBlogModel::get();
        $spInfo = AdminSpecializedModel::inRandomOrder()->paginate(6);
        $partners = AdminPartnerModel::get();
        $nums = AdminNumbersModel::get();
        $marquees = AdminMarqueeTextModel::get();
        $faqs = AdminAboutFAQModel::get();

        return view('new.index', compact('services', 'videos', 'projects', 'blogs', 'spInfo', 'partners', 'nums', 'marquees', 'faqs'));
    }
    public function about()
    {
        return view('new.about');
    }
    public function doctorwala()
    {
        $services = AdminServiceModel::inRandomOrder()->paginate(9);
        $videos = AdminVideoDescModel::get();
        $projects = AdminProjectModel::get();
        $blogs = AdminBlogModel::get();
        $spInfo = AdminSpecializedModel::inRandomOrder()->paginate(6);
        $partners = AdminPartnerModel::get();
        $nums = AdminNumbersModel::get();
        $marquees = AdminMarqueeTextModel::get();
        $faqs = AdminAboutFAQModel::get();

        return view('new.doctorwala', compact('services', 'videos', 'projects', 'blogs', 'spInfo', 'partners', 'nums', 'marquees', 'faqs'));
    }
    public function schoolwala()
    {
        return view('new.schoolwala');
    }
}
