<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"=>"required|min:5|max:200",
            "author"=>"required|min:5|max:200",
            "keywords"=>"required|between:5,500",
            "description"=>"required|between:5,500",
        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"Please fill in the Title field",
            "title.max"=>"The Title field should not exceed 200 characters",
            "title.min"=>"The Title field should not less than 5 characters",
            "author.required"=>"Please fill in the Author field",
            "author.max"=>"The Author field should not exceed 200 characters",
            "author.min"=>"The Author field should not less than 5 characters",
            "keywords.required"=>"Please fill in the Keywords field",
            "keywords.between"=>"The Keywords field must be 5 and 200 characters",
            "description.required"=>"Please fill in the Description field",
            "description.between"=>"The Description field must be 5 and 200 characters",
        ];
    }
}
