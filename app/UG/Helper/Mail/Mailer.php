<?php namespace UG\Helper\Mail;

class Mailer
{

    /**
    *
    * @
    */
    public function sendTo($user, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)
                    ->subject($subject);
        });
    }
}