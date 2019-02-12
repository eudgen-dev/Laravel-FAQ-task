<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFaqFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->segment(2);

        return [
            'title' => "required|min:3|max:100|unique:faqs,title,{$id},id",
            'content'  => 'required|min:3|max:40000',
        ];
    }
}
