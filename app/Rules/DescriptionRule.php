<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DescriptionRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Remove all HTML tags and check if the remaining text is not empty
        $text = strip_tags($value);

        // Check for empty HTML patterns like <p></p>, <br>, or just spaces inside tags
        $isEmptyHtml = preg_match('/^(\s|<[^>]*>)*$/', $value);

        if ($isEmptyHtml || empty(trim($text))) {
            $fail('The :attribute field must not be empty');
        }
    }
}
