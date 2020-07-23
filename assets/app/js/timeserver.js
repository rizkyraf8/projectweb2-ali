setupServerClock( jQuery('#showtime'), 'timeserver.php', 1000*10, 1000 );

function setupServerClock( clock_element, remote_time_url, remote_update_interval, local_update_interval ) {
    var w = window;
    // client time on resync
    var ct = new Date();
    // server time on resync
    var st = new Date();
    // setup local clock display
    w.setInterval( function() {
        // the time passed on our local machine since the last resync
        var delta = new Date() - ct;
        var clock = st - 0 + delta; // - 0 to convert to microsecond timestamp
        jQuery('#showtime').val(new Date(clock));
    }, local_update_interval);

    // // w.setInterval( function() {
    // //     jQuery('#showtime').val('resyncing clock...');
    // //     jQuery.ajax( {
    // //         url: remote_time_url,
    // //         success: function (data) {
    // //             ct = new Date();
    // //             st = new Date(data);
    // //         }
    // //     });
    // }, remote_update_interval);
}