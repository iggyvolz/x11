<?php

use iggyvolz\x11\gen\X11;
use iggyvolz\x11\gen\XEventPtr;

require_once __DIR__ . "/vendor/autoload.php";
$x = X11::init();
$display = $x->XOpenDisplay(null);
assert(!is_null($display));
$screen = $display[0]->getScreens()[$display[0]->getDefaultScreen()];
$window = $x->XCreateSimpleWindow($display, $screen->getRoot(), 10, 10, 960, 540, 1, $screen->getBlackPixel(), $screen->getWhitePixel());
$x->XStoreName($display, $window, "foo");
$x->XSelectInput($display, $window, (1 << 0) || (1 << 1));
$x->XMapWindow($display, $window);
while(true) {
    $event = $x->newXEvent();
    /** @var XEventPtr $eventPtr */
    $eventPtr = $event->ptr();
    $x->XNextEvent($display, $eventPtr);
    if($event->getType() === 2) {
        $keyEvent = $event->getXkey();
        $keycode = $keyEvent->getKeycode();
        if($keycode === 9) {
            break;
        }
    }
}
$x->XCloseDisplay($display);