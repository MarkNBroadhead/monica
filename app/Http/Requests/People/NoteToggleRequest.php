<?php

namespace App\Http\Requests\People;

use App\Http\Requests\AuthorizedRequest;

class NoteToggleRequest extends AuthorizedRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
