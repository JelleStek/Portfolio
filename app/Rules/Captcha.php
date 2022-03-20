<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
Use ReCaptcha/ReCaptcha;

class Captcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SITE_KEY'));
        $responsive = $recaptcha->verify($value, $_SERVER['REMOTE_ADDR']);
        return $response->isSucces();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'AUB de ReCapcha juist invullen';
    }
}
