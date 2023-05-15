<?php

declare(strict_types=1);

namespace App\Api\Plano;

class PlanoValidate
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "id" => "required",
            "text" => "required"
        ];
    }
}
