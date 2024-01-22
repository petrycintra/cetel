<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Indexpage;
use App\Models\Corpodocente;
use App\Models\Cursopresencial;
use App\Models\Grade;
use App\Models\User;

class CursopresencialController extends Controller
{
    public function cursopresencial ()
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::all();
        $gradecurricular = Grade::all();
        return view('cursopresencial', compact('index', 'cursopresencial', 'gradecurricular'));
    }

    public function cursopresencialedit ()
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::all();
        $gradecurricular = Grade::all();
        return view('admin.cursopresencialedit', compact('index', 'cursopresencial', 'gradecurricular'));
    }

    public function cursopresencialedit_id (Request $request)
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::where('id', '=', $request->id)->get();
        $gradecurricular = Grade::where('id', '=', $request->id)->get();
        return view('admin.cursopresencialedit_id', compact('index', 'cursopresencial', 'gradecurricular'));
    }

    public function cursopresencialedit_update (Request $request)
    {
        $dadoscursopresencial = Cursopresencial::where('id', '=', $request->id)->update
        ([
            'question'=>"$request->question",
            'description'=>"$request->description",
        ]);
        return redirect()->back()->with('success', "Alterações salvas com sucesso!!!");
    }

    public function gradecurricularedit ()
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::all();
        $gradecurricular = Grade::all();
        return view('admin.cursopresencialedit', compact('index', 'cursopresencial', 'gradecurricular'));
    }

    public function gradecurricularedit_id (Request $request)
    {
        $index = Indexpage::all();
        $cursopresencial = Cursopresencial::where('id', '=', $request->id)->get();
        $gradecurricular = Grade::where('id', '=', $request->id)->get();
        return view('admin.gradecurricularedit_id', compact('index', 'cursopresencial', 'gradecurricular'));
    }

    public function gradecurricularedit_update (Request $request)
    {
        $gradecurricular = Grade::where('id', '=', $request->id)->update
        ([
            'question'=>"$request->title",
            'description'=>"$request->description",
        ]);
        return redirect()->back()->with('success', "Alterações salvas com sucesso!!!");
    }
}
