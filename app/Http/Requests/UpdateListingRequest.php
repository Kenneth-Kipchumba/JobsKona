<?php

namespace App\Http\Requests;

use App\Models\Listing;
use Illuminate\Foundation\Http\FormRequest;

class UpdateListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Listin::

        // dd($listing->user_id . '=' . auth()->user()->id);
        // if ($listing->user_id != auth()->user()->id)
        // {
        //     return false;
        // }
        // else
        // {
        //     return true;
        // }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'tags' => '',
            'description' => 'required',
            'slots' => 'required'
        ];
    }
}
