<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Social;
use Illuminate\Http\Request;
use App\Services\SocialService;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    private $socialService;
    public function __construct(SocialService $socialService) {
        $this->socialService = $socialService;
    }

    public function index()
    {
        return view('admin.social.index');
    }

    public function getAllSocial()
    {
        return $this->socialService->GetAllData();
    }

    public function store(Request $request)
    {
        $social = $this->socialService->store($request);
        if ($social['success'] == true) {
            return $request;
        }
    }

    public function edit($id)
    {
        return Social::where('id', $id)->firstOrFail();
    }

    public function update(Request $request)
    {
        $social = $this->socialService->update($request);
        if ($social['success'] == true) {
            return $request;
        }
    }

    public function destroy(Request $request)
    {
        $social = Social::where('id', $request->id)->firstOrFail();
        $social->delete();
    }
}
