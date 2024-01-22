<?php

namespace App\Http\Controllers;

use App\Models\Indexpage;
use App\Models\Cursopresencial;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexpageController extends Controller
{
    
    public function index ()
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::all();
        return view('index', compact('index', 'cursopresencial'));
    }

    public function indexedit ()
    {
        $index = Indexpage::all();
        return view('admin.indexedit', compact('index'));
    }

    public function indexedit_update(Request $request)
    {

        if($request->hasFile('logomarca') && $request->file('logomarca')->isValid())
        {
            $imageName = "logo".".png";
            $request->logomarca->move(public_path('img/'), $imageName);
            $imageName = "logo_index".".png";
            $request->logomarca->move(public_path('img/'), $imageName);
        }

        if($request->hasFile('slide1') && $request->file('slide1')->isValid())
        {
            $imageName = "1".".jpg";
            $request->slide1->move(public_path('img/slide/'), $imageName);
        }

        if($request->hasFile('slide2') && $request->file('slide2')->isValid())
        {
            $imageName = "2".".jpg";
            $request->slide2->move(public_path('img/slide/'), $imageName);
        }

        if($request->hasFile('slide3') && $request->file('slide3')->isValid())
        {
            $imageName = "3".".jpg";
            $request->slide3->move(public_path('img/slide/'), $imageName);
        } 

        if($request->hasFile('description_photo_left') && $request->file('description_photo_left')->isValid())
        {
            $imageName = "banner".".png";
            $request->sdescription_photo_left->move(public_path('img/slide/'), $imageName);
        } 

        if($request->hasFile('description_photo_right') && $request->file('description_photo_right')->isValid())
        {
            $imageName = "banner2".".png";
            $request->sdescription_photo_left->move(public_path('img/slide/'), $imageName);
        } 

        if($request->hasFile('about_photo') && $request->file('about_photo')->isValid())
        {
            $imageName = "about".".png";
            $request->about_photo->move(public_path('img/'), $imageName);
        }

        if($request->hasFile('about_footer_photo') && $request->file('about_footer_photo')->isValid())
        {
            $imageName = "about2".".png";
            $request->about_footer_photo->move(public_path('img/'), $imageName);
        }

        //////////////////////////////////////

        $indexpage = Indexpage::where('id', '=', "1")->update
            ([
                //'logo'=>$request->
                //'logo_index'=>$request->
                'email'=>$request->email,
                'tel_one'=>$request->tel_one,
                'tel_two'=>$request->tel_two,
                'menu_one'=>$request->menu_one,
                'menu_btn'=>$request->menu_btn,
                'submenu_one'=>$request->submenu_one,
                'submenu_two'=>$request->submenu_two,
                'submenu_three'=>$request->submenu_three,
                'submenu_four'=>$request->submenu_four,
                'submenu_five'=>$request->submenu_five,
                'insta'=>$request->insta,
                'slider_title'=>$request->slider_title,
                'slider_content'=>$request->slider_content,
                'slider_btn'=>$request->slider_btn,
                //'slider_photo_one'=>$request->
                //'slider_photo_two'=>$request->
                //'slider_photo_three'=>$request->
                
                //'description_one_bolder'=>$request->description_one_bolder,
                //'description_one_text'=>$request->description_one_text,
                //'description_two_bolder'=>$request->description_two_bolder,
                //'description_two_text'=>$request->description_two_text,
                //'description_three_bolder'=>$request->description_three_bolder,
                //'description_three_text'=>$request->description_three_text,
                //'description_four_bolder'=>$request->description_four_bolder,
                //'description_four_text'=>$request->description_four_text,
                
                //'description_photo_left'=>$request->
                //'description_photo_right'=>$request->
                'description_title'=>$request->description_title,
                'description_subtitle'=>$request->description_subtitle,
                'description_text'=>$request->description_text,
                'description_btn'=>$request->description_btn,
                'about_title'=>$request->about_title,
                'about_paragraph_one'=>$request->about_paragraph_one,
                'about_paragraph_two_bolder'=>$request->about_paragraph_two_bolder,
                'about_paragraph_two'=>$request->about_paragraph_two,
                //'about_photo'=>$request->
                'about_footer_title'=>$request->about_footer_title,
                'about_footer_paragraph_one'=>$request->about_footer_paragraph_one,
                'about_footer_paragraph_two'=>$request->about_footer_paragraph_two,
                'about_footer_btn'=>$request->about_footer_btn,
                //'about_footer_photo'=>$request->about_foter_photo,
            ]);
            return redirect()->back()->with('success', "Alterações salvas com sucesso!!!");
    }
}
