<?php

namespace App\Observers;

use App\Mail\PasswordChangeMail;
use Illuminate\Support\Facades\Mail;

class PasswordChangeObserver
{
    public function Updated($model){
        if($model->wasChanged('password')){
            Mail::to($model->email)->send(new PasswordChangeMail());
        }
    }
}
