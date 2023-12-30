<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class XEventConst extends \iggyvolz\x11\XStruct
{
    public function getType(): int
    {
        return $this->cdata->type;
    }

    public function getXany(): null|XAnyEvent
    {
        return \is_null($this->cdata->xany) ? null : new \iggyvolz\x11\gen\XAnyEvent($this->cdata->xany);
    }

    public function getXkey(): null|XKeyEvent
    {
        return \is_null($this->cdata->xkey) ? null : new \iggyvolz\x11\gen\XKeyEvent($this->cdata->xkey);
    }

    public function getXbutton(): null|XButtonEvent
    {
        return \is_null($this->cdata->xbutton) ? null : new \iggyvolz\x11\gen\XButtonEvent($this->cdata->xbutton);
    }

    public function getXmotion(): null|XMotionEvent
    {
        return \is_null($this->cdata->xmotion) ? null : new \iggyvolz\x11\gen\XMotionEvent($this->cdata->xmotion);
    }

    public function getXcrossing(): null|XCrossingEvent
    {
        return \is_null($this->cdata->xcrossing) ? null : new \iggyvolz\x11\gen\XCrossingEvent($this->cdata->xcrossing);
    }

    public function getXfocus(): null|XFocusChangeEvent
    {
        return \is_null($this->cdata->xfocus) ? null : new \iggyvolz\x11\gen\XFocusChangeEvent($this->cdata->xfocus);
    }

    public function getXexpose(): null|XExposeEvent
    {
        return \is_null($this->cdata->xexpose) ? null : new \iggyvolz\x11\gen\XExposeEvent($this->cdata->xexpose);
    }

    public function getXgraphicsexpose(): null|XGraphicsExposeEvent
    {
        return \is_null($this->cdata->xgraphicsexpose) ? null : new \iggyvolz\x11\gen\XGraphicsExposeEvent($this->cdata->xgraphicsexpose);
    }

    public function getXnoexpose(): null|XNoExposeEvent
    {
        return \is_null($this->cdata->xnoexpose) ? null : new \iggyvolz\x11\gen\XNoExposeEvent($this->cdata->xnoexpose);
    }

    public function getXvisibility(): null|XVisibilityEvent
    {
        return \is_null($this->cdata->xvisibility) ? null : new \iggyvolz\x11\gen\XVisibilityEvent($this->cdata->xvisibility);
    }

    public function getXcreatewindow(): null|XCreateWindowEvent
    {
        return \is_null($this->cdata->xcreatewindow) ? null : new \iggyvolz\x11\gen\XCreateWindowEvent($this->cdata->xcreatewindow);
    }

    public function getXdestroywindow(): null|XDestroyWindowEvent
    {
        return \is_null($this->cdata->xdestroywindow) ? null : new \iggyvolz\x11\gen\XDestroyWindowEvent($this->cdata->xdestroywindow);
    }

    public function getXunmap(): null|XUnmapEvent
    {
        return \is_null($this->cdata->xunmap) ? null : new \iggyvolz\x11\gen\XUnmapEvent($this->cdata->xunmap);
    }

    public function getXmap(): null|XMapEvent
    {
        return \is_null($this->cdata->xmap) ? null : new \iggyvolz\x11\gen\XMapEvent($this->cdata->xmap);
    }

    public function getXmaprequest(): null|XMapRequestEvent
    {
        return \is_null($this->cdata->xmaprequest) ? null : new \iggyvolz\x11\gen\XMapRequestEvent($this->cdata->xmaprequest);
    }

    public function getXreparent(): null|XReparentEvent
    {
        return \is_null($this->cdata->xreparent) ? null : new \iggyvolz\x11\gen\XReparentEvent($this->cdata->xreparent);
    }

    public function getXconfigure(): null|XConfigureEvent
    {
        return \is_null($this->cdata->xconfigure) ? null : new \iggyvolz\x11\gen\XConfigureEvent($this->cdata->xconfigure);
    }

    public function getXgravity(): null|XGravityEvent
    {
        return \is_null($this->cdata->xgravity) ? null : new \iggyvolz\x11\gen\XGravityEvent($this->cdata->xgravity);
    }

    public function getXresizerequest(): null|XResizeRequestEvent
    {
        return \is_null($this->cdata->xresizerequest) ? null : new \iggyvolz\x11\gen\XResizeRequestEvent($this->cdata->xresizerequest);
    }

    public function getXconfigurerequest(): null|XConfigureRequestEvent
    {
        return \is_null($this->cdata->xconfigurerequest) ? null : new \iggyvolz\x11\gen\XConfigureRequestEvent($this->cdata->xconfigurerequest);
    }

    public function getXcirculate(): null|XCirculateEvent
    {
        return \is_null($this->cdata->xcirculate) ? null : new \iggyvolz\x11\gen\XCirculateEvent($this->cdata->xcirculate);
    }

    public function getXcirculaterequest(): null|XCirculateRequestEvent
    {
        return \is_null($this->cdata->xcirculaterequest) ? null : new \iggyvolz\x11\gen\XCirculateRequestEvent($this->cdata->xcirculaterequest);
    }

    public function getXproperty(): null|XPropertyEvent
    {
        return \is_null($this->cdata->xproperty) ? null : new \iggyvolz\x11\gen\XPropertyEvent($this->cdata->xproperty);
    }

    public function getXselectionclear(): null|XSelectionClearEvent
    {
        return \is_null($this->cdata->xselectionclear) ? null : new \iggyvolz\x11\gen\XSelectionClearEvent($this->cdata->xselectionclear);
    }

    public function getXselectionrequest(): null|XSelectionRequestEvent
    {
        return \is_null($this->cdata->xselectionrequest) ? null : new \iggyvolz\x11\gen\XSelectionRequestEvent($this->cdata->xselectionrequest);
    }

    public function getXselection(): null|XSelectionEvent
    {
        return \is_null($this->cdata->xselection) ? null : new \iggyvolz\x11\gen\XSelectionEvent($this->cdata->xselection);
    }

    public function getXcolormap(): null|XColormapEvent
    {
        return \is_null($this->cdata->xcolormap) ? null : new \iggyvolz\x11\gen\XColormapEvent($this->cdata->xcolormap);
    }

    public function getXclient(): null|XClientMessageEvent
    {
        return \is_null($this->cdata->xclient) ? null : new \iggyvolz\x11\gen\XClientMessageEvent($this->cdata->xclient);
    }

    public function getXmapping(): null|XMappingEvent
    {
        return \is_null($this->cdata->xmapping) ? null : new \iggyvolz\x11\gen\XMappingEvent($this->cdata->xmapping);
    }

    public function getXerror(): null|XErrorEvent
    {
        return \is_null($this->cdata->xerror) ? null : new \iggyvolz\x11\gen\XErrorEvent($this->cdata->xerror);
    }

    public function getXkeymap(): null|XKeymapEvent
    {
        return \is_null($this->cdata->xkeymap) ? null : new \iggyvolz\x11\gen\XKeymapEvent($this->cdata->xkeymap);
    }

    public function getXgeneric(): never
    {
        throw new \LogicException('Not yet implemented');
    }

    public function getXcookie(): null|XGenericEventCookie
    {
        return \is_null($this->cdata->xcookie) ? null : new \iggyvolz\x11\gen\XGenericEventCookie($this->cdata->xcookie);
    }

    public function getPad(): never
    {
        throw new \LogicException('Not yet implemented');
    }
}
