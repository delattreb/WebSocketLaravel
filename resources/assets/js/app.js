require('./bootstrap');

import Echo from 'laravel-echo'

let e = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

e.channel('chan-demo').listen('.ws_emit', (e) => {
    console.log('ws_emit', e);
});

e.private('group.1').listen('.wizz', function (e) {
    console.log('GroupWizzEvent', e);
});

$('#notifier').click(function (e) {
    e.preventDefault();
    $.get('/post')
});





