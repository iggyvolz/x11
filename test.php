<?php
$ffi = FFI::cdef(file_get_contents(__DIR__ . "/Xlib.h"), "libX11.so");
$display = $ffi->XOpenDisplay(null);
$screen = $display->screens[$display->default_screen];
$window = $ffi->XCreateSimpleWindow($display, $screen->root, 10, 10, 100, 100, 1, $screen->black_pixel, $screen->white_pixel);
//var_dump($window);
$ffi->XSelectInput($display, $window, (1 << 0) || (1 << 1));
$ffi->XMapWindow($display, $window);
while(true) {
    $event = $ffi->new("XEvent");
    $ffi->XNextEvent($display, FFI::addr($event));
    if($event->type === 2) {
        if($event->xkey->keycode === 9) {
            break;
        }
        echo "press keycode " . $event->xkey->keycode . PHP_EOL;
    } elseif($event->type === 3) {
        echo "release keycode " . $event->xkey->keycode . PHP_EOL;
    } else {
        var_dump($event->type);
    }
}
$ffi->XCloseDisplay($display);