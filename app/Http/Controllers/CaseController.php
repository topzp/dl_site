<?php

namespace App\Http\Controllers;

use App\UseCase;
use App\MiniModule;
use App\CaseCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('useCase.create', [
            'categories' => CaseCategory::all(),
            'modules' => MiniModule::all()
        ]);
    }

    public function categoryCreate()
    {
        $data = request()->validate([
            'category' => 'required',
        ]);
        $name = request('category');
        $newCategory = new CaseCategory();
        $newCategory->name = $name;
        $newCategory->save();
        return view('useCase.create', [
            'categories' => CaseCategory::all(),
            'modules' => MiniModule::all()
        ]);
    }

    public function miniModuleCreate()
    {
        $data = request()->validate([
            'module' => 'required',
        ]);
        $name = request('module');
        $miniModule = new MiniModule();
        $miniModule->name = $name;
        $miniModule->save();
        return view('useCase.create', [
            'categories' => CaseCategory::all(),
            'modules' => MiniModule::all()
        ]);
    }

    public function useCaseCreate()
    {
        // dd(request());
        
        $data = request()->validate([
            'case' => 'required',
            'description' => 'required',
            'logo' => ['required', 'image'],
            'qrcode' => ['required', 'image'],
        ]);
        // dd(request('categories'));
        
        $logoPath = request('logo')->store('uploads', 'public');
        $qrcodePath = request('qrcode')->store('uploads', 'public');

        $newUseCase = new UseCase();
        $newUseCase->title = $data['case'];
        $newUseCase->description = $data['description'];
        $newUseCase->logo = $logoPath;
        $newUseCase->qrcode = $qrcodePath;
        $newUseCase->save();

        $category = CaseCategory::find(request('categories'));
        $newUseCase->caseCategories()->attach($category);
        $modules = MiniModule::find(request('modules'));
        $newUseCase->miniModules()->attach($modules);

        return view('admin.createSuccess');
    }
}
