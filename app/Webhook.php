<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    public function enabledFor($preference)
    {
        return optional($this->preferences)->{$preference} === true;
    }

    public function preferences()
    {
        return $this->hasOne(WebhookPreference::class);
    }
}
