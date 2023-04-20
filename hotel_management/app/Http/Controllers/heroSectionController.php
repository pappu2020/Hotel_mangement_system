<?php

namespace App\Http\Controllers;

use App\Models\heroSectionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class heroSectionController extends Controller
{
    function heroSectionPage()
    {
        $allHeroSectionContent = heroSectionModel::latest()->get();
        return view("admin.hero_section.heroSectionPage", [
            'allHeroSectionContent' => $allHeroSectionContent,
        ]);
    }


    function heroSectionBannerImgInsert(Request $req)
    {
        $req->validate([
            'heroPageImg' => 'mimes:jpg,jpeg,png,gif',
            'heroPageImg' => 'required',
        ]);


        $upload_img = $req->heroPageImg;


        $extension = $upload_img->getClientOriginalExtension();
        $fileName = rand() . '.' . $extension;



        Image::make($upload_img)->resize(1509, 800)->save(public_path('uploads/heroSection/' . $fileName));

        heroSectionModel::insert([
            'bannerImg' => $fileName,
            'created_at' => Carbon::now(),
            'created_by' => Auth::id(),
        ]);
        return back();
    }


     function heroSectionImgTrashPage(){
        $allHeroSectionContent = heroSectionModel::onlyTrashed()->latest()->get();
        return view("admin.hero_section.herosectionTrashpage",[
            'allHeroSectionContent' => $allHeroSectionContent,
        ]);
     }

    function heroSectionImgDelete($id)
    {
        heroSectionModel::find($id)->delete();

        return back();
    }
    
    function heroSectionImgRes($id)
    {
        heroSectionModel::onlyTrashed()->find($id)->restore();

        return back();
    }
    
    function heroSectionImgParDelete($id)
    {
        heroSectionModel::onlyTrashed()->find($id)->forceDelete();

        return back();
    }
}
