<?php


use Pusher\Pusher;

if (!function_exists('notify')){

function notify($channel,$event,$data)
{
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher(
        'af5d4bf500247d2bd602',
        '2570b086c02bd7c46b5b',
        '1562988',
        $options
    );


    $pusher->trigger($channel, $event, $data);
}

}
