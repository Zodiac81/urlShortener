<?php

namespace App\Rules;

use App\Helpers\Helper;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DisabledTimeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $now = Carbon::now();
        $nextDay = Carbon::now()->addDay();

        if(!Carbon::parse(Helper::dateTimeFormat($value))->between($now, $nextDay)){
            $fail('The  URL Lifetime cannot be less than today`s now time or more than 24 hours.');
        }

    }
}
