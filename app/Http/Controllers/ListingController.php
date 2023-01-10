<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Models\Application;
use App\Models\Listing;
use App\Models\Requirement;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
//Use Alert;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['listings'] = Listing::latest()
                                    ->filter(request(['tag']))
                                    ->paginate(6);

        return view('backend.listings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request)
    {
        $validated = $request->validated();
        $tags = $request->collect('tags')->implode(',');
        
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'tags' => $tags,
            'description' => $request->input('description'),
            'slots' => $request->input('slots'),
            'lt' => $request->float('lt'),
            'wage' => $request->float('wage'),
            'start_date' => Carbon::parse($request->date('start_date')),
            'end_date' => Carbon::parse($request->date('end_date')),
        ];
        //dd($data);

        
        if (Listing::create($data))
        {
            return redirect()->route('requirements.index')->with('success', 'Job Listed Successfully. You can optionally add requirements to this job');

            //Alert::success('SuccessAlert', 'Job Listed Successfully. You can optionally add requirements to this job');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    { 
        $data['listing'] = $listing;
        $data['requirements'] = Requirement::where('listing_id', $listing->id)->get();

        $data['applications'] = Application::latest()->paginate(10);
        //dd($data['requirements']);

        return view('backend.listings.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListingRequest  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        $validated = $request->validated();
        
        $tags = $request->collect('tags')->implode(',');
        
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'tags' => $tags,
            'description' => $request->input('description'),
            'slots' => $request->input('slots'),
            'lt' => $request->float('lt'),
            'wage' => $request->float('wage'),
            'start_date' => Carbon::parse($request->date('start_date')),
            'end_date' => Carbon::parse($request->date('end_date')),
        ];


        if ($listing->update($data))
        {
            return redirect()->back()->with('success', 'Job listing updated successfully');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        if ($listing->delete())
        {
            return redirect('listings')->with('success', 'Job listing deleted successfully');
        }

        return redirect('listings')->with('error', 'Something went wrong. Try again');
    }
}
