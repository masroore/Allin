<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FeatureRequest extends Request
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|max:255|unique:features',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|max:255|unique:features,id,' . $this->input('feature_id'),
                ];
            }
            default:
                break;
        }
        return [
            //
        ];
    }
}
