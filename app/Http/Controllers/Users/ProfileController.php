<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'phone_1' => $request->input('phone_1'),
            'phone_2' => $request->input('phone_2'),
            'another_email' => $request->input('another_email'),
            'address' => $request->input('address'),
            'website' => $request->input('website'),
            'linked_in' => $request->input('linked_in'),
            'twitter' => $request->input('twitter'),
            'languages_spoken' => $request->input('languages_spoken'),
            'languages_written' => $request->input('languages_written'),
            'biography' => $request->input('biography'),
            'academic_achievement_1' => $request->input('academic_achievement_1'),
            'academic_achievement_2' => $request->input('academic_achievement_2'),
            'academic_achievement_3' => $request->input('academic_achievement_3'),
            'academic_achievement_4' => $request->input('academic_achievement_4'),
            'academic_achievement_5' => $request->input('academic_achievement_5'),
            'professional_achievement_1' => $request->input('professional_achievement_1'),
            'professional_achievement_2' => $request->input('professional_achievement_2'),
            'professional_achievement_3' => $request->input('professional_achievement_3'),
            'professional_achievement_4' => $request->input('professional_achievement_4'),
            'professional_achievement_5' => $request->input('professional_achievement_5'),
        ];

        if (Profile::create($data))
        {
            return redirect()->back()->with('success', 'Your Profile has been created successfully');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = auth()->user()->id;
        
        $data['profile'] = User::find($user_id)->profile;
        //dd($data['profile']);

        if ($data['profile'] == null) {
            return view('backend.users.create_profile');
        } else {
            return view('backend.users.profile', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user_id = auth()->user()->id;
        
        $data['profile'] = User::find($user_id)->profile;

        return view('backend.users.edit_profile', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'phone_1' => $request->input('phone_1'),
            'phone_2' => $request->input('phone_2'),
            'another_email' => $request->input('another_email'),
            'address' => $request->input('address'),
            'website' => $request->input('website'),
            'linked_in' => $request->input('linked_in'),
            'twitter' => $request->input('twitter'),
            'languages_spoken' => $request->input('languages_spoken'),
            'languages_written' => $request->input('languages_written'),
            'biography' => $request->input('biography'),
            'academic_achievement_1' => $request->input('academic_achievement_1'),
            'academic_achievement_2' => $request->input('academic_achievement_2'),
            'academic_achievement_3' => $request->input('academic_achievement_3'),
            'academic_achievement_4' => $request->input('academic_achievement_4'),
            'academic_achievement_5' => $request->input('academic_achievement_5'),
            'professional_achievement_1' => $request->input('professional_achievement_1'),
            'professional_achievement_2' => $request->input('professional_achievement_2'),
            'professional_achievement_3' => $request->input('professional_achievement_3'),
            'professional_achievement_4' => $request->input('professional_achievement_4'),
            'professional_achievement_5' => $request->input('professional_achievement_5'),
        ];

        if ($profile->update($data))
        {
            return redirect()->back()->with('success', 'Your Profile has been created successfully');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
