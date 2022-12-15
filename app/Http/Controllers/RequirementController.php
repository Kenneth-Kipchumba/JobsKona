<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequirementRequest;
use App\Http\Requests\UpdateRequirementRequest;
use App\Models\Listing;
use App\Models\Requirement;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Ensure Job poster can only see their own job listings
         */
        $user_id = auth()->id();
        $data['listings'] = Listing::where('user_id', $user_id)
                                    ->orderBy('id', 'desc')
                                    ->get();
        //dd($data['listings']);

        return view('backend.requirements.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->id();
        $data['listings'] = Listing::where('user_id', $user_id)
                                    ->get();

        return view('backend.requirements.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequirementRequest $request)
    {
        $requirements = [
            'listing_id'    => $request->input('listing_id'),
            'requirement_1' => $request->input('requirement_1'),
            'requirement_2' => $request->input('requirement_2'),
            'requirement_3' => $request->input('requirement_3'),
            'requirement_4' => $request->input('requirement_4'),
            'requirement_5' => $request->input('requirement_5'),
        ];

        //dd($data);
        if (Requirement::create($requirements))
        {
            return redirect('listings')->with('success', 'Job Requirements added Successfully.');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function show(Requirement $requirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirement $requirement)
    {
        $user_id = auth()->id();
        $data['listings'] = Listing::where('user_id', $user_id)
                                    ->get();
        $data['requirement'] = $requirement;

        return view('backend.requirements.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequirementRequest  $request
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequirementRequest $request, Requirement $requirement)
    {
        $requirements = [
            'requirement_1' => $request->input('requirement_1'),
            'requirement_2' => $request->input('requirement_2'),
            'requirement_3' => $request->input('requirement_3'),
            'requirement_4' => $request->input('requirement_4'),
            'requirement_5' => $request->input('requirement_5'),
        ];

        //dd($data);
        if ($requirement->update($requirements))
        {
            return redirect()->back()->with('success', 'Job Requirements updated Successfully.');
        }

        return redirect()->back()->with('error', 'Something went wrong. Try again');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirement $requirement)
    {
        //
    }
}
