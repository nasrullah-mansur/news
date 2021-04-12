<?php
namespace   App\Services;

use App\Models\Admin\Social;

class SocialService
{

    public function GetAllData()
    {
        $socials = Social::get()->reverse();
        return datatables($socials)
            ->addIndexColumn()

            ->addColumn('action', function ($social){
                return
                '<a data-toggle="modal" data-target="#edit_social" class="btn btn-secondary edit-btn" href="#" data-id="'.$social->id.'"><i data-id="'.$social->id.'" class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$social->id.'"><i data-id="'.$social->id.'" class="delete-btn ft-trash-2"></i></a>';
            })

            ->editColumn('created_at', function ($social) {
                return $social->created_at->format('d-m-Y');
            })

            ->make(true);
    }


    public function store($request)
    {
        $request->validate([
            'social_name' => 'required|max:255',
            'icon_class' => 'required',
        ]);
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];

        $socialData['social_name'] = $request->social_name;
        $socialData['social_link'] = $request->social_link;
        $socialData['icon_class'] = $request->icon_class;

        $social = Social::create($socialData);
        if ($social) {
            $data['success'] = true;
            $data['message'] = __('Social Successfully added');
            $data['data'] = $social;
            return $data;
        }
        return $data;
    }


    public function update($request)
    {
        $social = Social::where('id', $request->id)->firstOrFail();
        $request->validate([
            'social_name' => 'required|max:255',
            'icon_class' => 'required',
        ]);
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];


        $socialData['social_name'] = $request->social_name;
        $socialData['social_link'] = $request->social_link;
        $socialData['icon_class'] = $request->icon_class;

        $social->fill($socialData)->save();

        if ($social) {
            $data['success'] = true;
            $data['message'] = __('Social Successfully added');
            $data['data'] = $social;
            return $data;
        }
        return $data;


    }

}

?>
