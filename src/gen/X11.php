<?php

declare(strict_types=1);

namespace iggyvolz\x11\gen;

class X11
{
    public function __construct(
        public readonly \FFI $ffi,
    ) {
    }

    public static function init(string $libpath = 'libX11.so'): self
    {
        return new self(\FFI::cdef(file_get_contents(__DIR__ . "/../../Xlib.h"), $libpath));
    }

    public function newXExtData(): XExtData
    {
        return new \iggyvolz\x11\gen\XExtData($this->ffi->new('XExtData'));
    }

    public function newXPixmapFormatValues(): XPixmapFormatValues
    {
        return new \iggyvolz\x11\gen\XPixmapFormatValues($this->ffi->new('XPixmapFormatValues'));
    }

    public function newXGCValues(): XGCValues
    {
        return new \iggyvolz\x11\gen\XGCValues($this->ffi->new('XGCValues'));
    }

    public function newVisual(): Visual
    {
        return new \iggyvolz\x11\gen\Visual($this->ffi->new('Visual'));
    }

    public function newDepth(): Depth
    {
        return new \iggyvolz\x11\gen\Depth($this->ffi->new('Depth'));
    }

    public function newScreen(): Screen
    {
        return new \iggyvolz\x11\gen\Screen($this->ffi->new('Screen'));
    }

    public function newScreenFormat(): ScreenFormat
    {
        return new \iggyvolz\x11\gen\ScreenFormat($this->ffi->new('ScreenFormat'));
    }

    public function newXSetWindowAttributes(): XSetWindowAttributes
    {
        return new \iggyvolz\x11\gen\XSetWindowAttributes($this->ffi->new('XSetWindowAttributes'));
    }

    public function newXWindowAttributes(): XWindowAttributes
    {
        return new \iggyvolz\x11\gen\XWindowAttributes($this->ffi->new('XWindowAttributes'));
    }

    public function newXHostAddress(): XHostAddress
    {
        return new \iggyvolz\x11\gen\XHostAddress($this->ffi->new('XHostAddress'));
    }

    public function newXServerInterpretedAddress(): XServerInterpretedAddress
    {
        return new \iggyvolz\x11\gen\XServerInterpretedAddress($this->ffi->new('XServerInterpretedAddress'));
    }

    public function newXImage(): XImage
    {
        return new \iggyvolz\x11\gen\XImage($this->ffi->new('XImage'));
    }

    public function newXWindowChanges(): XWindowChanges
    {
        return new \iggyvolz\x11\gen\XWindowChanges($this->ffi->new('XWindowChanges'));
    }

    public function newXColor(): XColor
    {
        return new \iggyvolz\x11\gen\XColor($this->ffi->new('XColor'));
    }

    public function newXSegment(): XSegment
    {
        return new \iggyvolz\x11\gen\XSegment($this->ffi->new('XSegment'));
    }

    public function newXPoint(): XPoint
    {
        return new \iggyvolz\x11\gen\XPoint($this->ffi->new('XPoint'));
    }

    public function newXRectangle(): XRectangle
    {
        return new \iggyvolz\x11\gen\XRectangle($this->ffi->new('XRectangle'));
    }

    public function newXArc(): XArc
    {
        return new \iggyvolz\x11\gen\XArc($this->ffi->new('XArc'));
    }

    public function newXKeyboardControl(): XKeyboardControl
    {
        return new \iggyvolz\x11\gen\XKeyboardControl($this->ffi->new('XKeyboardControl'));
    }

    public function newXKeyboardState(): XKeyboardState
    {
        return new \iggyvolz\x11\gen\XKeyboardState($this->ffi->new('XKeyboardState'));
    }

    public function newXTimeCoord(): XTimeCoord
    {
        return new \iggyvolz\x11\gen\XTimeCoord($this->ffi->new('XTimeCoord'));
    }

    public function newXModifierKeymap(): XModifierKeymap
    {
        return new \iggyvolz\x11\gen\XModifierKeymap($this->ffi->new('XModifierKeymap'));
    }

    public function newDisplay(): Display
    {
        return new \iggyvolz\x11\gen\Display($this->ffi->new('Display'));
    }

    public function newXKeyEvent(): XKeyEvent
    {
        return new \iggyvolz\x11\gen\XKeyEvent($this->ffi->new('XKeyEvent'));
    }

    public function newXButtonEvent(): XButtonEvent
    {
        return new \iggyvolz\x11\gen\XButtonEvent($this->ffi->new('XButtonEvent'));
    }

    public function newXMotionEvent(): XMotionEvent
    {
        return new \iggyvolz\x11\gen\XMotionEvent($this->ffi->new('XMotionEvent'));
    }

    public function newXCrossingEvent(): XCrossingEvent
    {
        return new \iggyvolz\x11\gen\XCrossingEvent($this->ffi->new('XCrossingEvent'));
    }

    public function newXFocusChangeEvent(): XFocusChangeEvent
    {
        return new \iggyvolz\x11\gen\XFocusChangeEvent($this->ffi->new('XFocusChangeEvent'));
    }

    public function newXKeymapEvent(): XKeymapEvent
    {
        return new \iggyvolz\x11\gen\XKeymapEvent($this->ffi->new('XKeymapEvent'));
    }

    public function newXExposeEvent(): XExposeEvent
    {
        return new \iggyvolz\x11\gen\XExposeEvent($this->ffi->new('XExposeEvent'));
    }

    public function newXGraphicsExposeEvent(): XGraphicsExposeEvent
    {
        return new \iggyvolz\x11\gen\XGraphicsExposeEvent($this->ffi->new('XGraphicsExposeEvent'));
    }

    public function newXNoExposeEvent(): XNoExposeEvent
    {
        return new \iggyvolz\x11\gen\XNoExposeEvent($this->ffi->new('XNoExposeEvent'));
    }

    public function newXVisibilityEvent(): XVisibilityEvent
    {
        return new \iggyvolz\x11\gen\XVisibilityEvent($this->ffi->new('XVisibilityEvent'));
    }

    public function newXCreateWindowEvent(): XCreateWindowEvent
    {
        return new \iggyvolz\x11\gen\XCreateWindowEvent($this->ffi->new('XCreateWindowEvent'));
    }

    public function newXDestroyWindowEvent(): XDestroyWindowEvent
    {
        return new \iggyvolz\x11\gen\XDestroyWindowEvent($this->ffi->new('XDestroyWindowEvent'));
    }

    public function newXUnmapEvent(): XUnmapEvent
    {
        return new \iggyvolz\x11\gen\XUnmapEvent($this->ffi->new('XUnmapEvent'));
    }

    public function newXMapEvent(): XMapEvent
    {
        return new \iggyvolz\x11\gen\XMapEvent($this->ffi->new('XMapEvent'));
    }

    public function newXMapRequestEvent(): XMapRequestEvent
    {
        return new \iggyvolz\x11\gen\XMapRequestEvent($this->ffi->new('XMapRequestEvent'));
    }

    public function newXReparentEvent(): XReparentEvent
    {
        return new \iggyvolz\x11\gen\XReparentEvent($this->ffi->new('XReparentEvent'));
    }

    public function newXConfigureEvent(): XConfigureEvent
    {
        return new \iggyvolz\x11\gen\XConfigureEvent($this->ffi->new('XConfigureEvent'));
    }

    public function newXGravityEvent(): XGravityEvent
    {
        return new \iggyvolz\x11\gen\XGravityEvent($this->ffi->new('XGravityEvent'));
    }

    public function newXResizeRequestEvent(): XResizeRequestEvent
    {
        return new \iggyvolz\x11\gen\XResizeRequestEvent($this->ffi->new('XResizeRequestEvent'));
    }

    public function newXConfigureRequestEvent(): XConfigureRequestEvent
    {
        return new \iggyvolz\x11\gen\XConfigureRequestEvent($this->ffi->new('XConfigureRequestEvent'));
    }

    public function newXCirculateEvent(): XCirculateEvent
    {
        return new \iggyvolz\x11\gen\XCirculateEvent($this->ffi->new('XCirculateEvent'));
    }

    public function newXCirculateRequestEvent(): XCirculateRequestEvent
    {
        return new \iggyvolz\x11\gen\XCirculateRequestEvent($this->ffi->new('XCirculateRequestEvent'));
    }

    public function newXPropertyEvent(): XPropertyEvent
    {
        return new \iggyvolz\x11\gen\XPropertyEvent($this->ffi->new('XPropertyEvent'));
    }

    public function newXSelectionClearEvent(): XSelectionClearEvent
    {
        return new \iggyvolz\x11\gen\XSelectionClearEvent($this->ffi->new('XSelectionClearEvent'));
    }

    public function newXSelectionRequestEvent(): XSelectionRequestEvent
    {
        return new \iggyvolz\x11\gen\XSelectionRequestEvent($this->ffi->new('XSelectionRequestEvent'));
    }

    public function newXSelectionEvent(): XSelectionEvent
    {
        return new \iggyvolz\x11\gen\XSelectionEvent($this->ffi->new('XSelectionEvent'));
    }

    public function newXColormapEvent(): XColormapEvent
    {
        return new \iggyvolz\x11\gen\XColormapEvent($this->ffi->new('XColormapEvent'));
    }

    public function newClientEventData(): ClientEventData
    {
        return new \iggyvolz\x11\gen\ClientEventData($this->ffi->new('ClientEventData'));
    }

    public function newXClientMessageEvent(): XClientMessageEvent
    {
        return new \iggyvolz\x11\gen\XClientMessageEvent($this->ffi->new('XClientMessageEvent'));
    }

    public function newXMappingEvent(): XMappingEvent
    {
        return new \iggyvolz\x11\gen\XMappingEvent($this->ffi->new('XMappingEvent'));
    }

    public function newXErrorEvent(): XErrorEvent
    {
        return new \iggyvolz\x11\gen\XErrorEvent($this->ffi->new('XErrorEvent'));
    }

    public function newXAnyEvent(): XAnyEvent
    {
        return new \iggyvolz\x11\gen\XAnyEvent($this->ffi->new('XAnyEvent'));
    }

    public function newXGenericEventCookie(): XGenericEventCookie
    {
        return new \iggyvolz\x11\gen\XGenericEventCookie($this->ffi->new('XGenericEventCookie'));
    }

    public function newXEvent(): XEvent
    {
        return new \iggyvolz\x11\gen\XEvent($this->ffi->new('XEvent'));
    }

    public function newXCharStruct(): XCharStruct
    {
        return new \iggyvolz\x11\gen\XCharStruct($this->ffi->new('XCharStruct'));
    }

    public function newXFontProp(): XFontProp
    {
        return new \iggyvolz\x11\gen\XFontProp($this->ffi->new('XFontProp'));
    }

    public function newXFontStruct(): XFontStruct
    {
        return new \iggyvolz\x11\gen\XFontStruct($this->ffi->new('XFontStruct'));
    }

    public function newXTextItem(): XTextItem
    {
        return new \iggyvolz\x11\gen\XTextItem($this->ffi->new('XTextItem'));
    }

    public function newXTextItem16(): XTextItem16
    {
        return new \iggyvolz\x11\gen\XTextItem16($this->ffi->new('XTextItem16'));
    }

    public function newXEDataObject(): XEDataObject
    {
        return new \iggyvolz\x11\gen\XEDataObject($this->ffi->new('XEDataObject'));
    }

    public function newXFontSetExtents(): XFontSetExtents
    {
        return new \iggyvolz\x11\gen\XFontSetExtents($this->ffi->new('XFontSetExtents'));
    }

    public function newXmbTextItem(): XmbTextItem
    {
        return new \iggyvolz\x11\gen\XmbTextItem($this->ffi->new('XmbTextItem'));
    }

    public function newXwcTextItem(): XwcTextItem
    {
        return new \iggyvolz\x11\gen\XwcTextItem($this->ffi->new('XwcTextItem'));
    }

    public function newXOMCharSetList(): XOMCharSetList
    {
        return new \iggyvolz\x11\gen\XOMCharSetList($this->ffi->new('XOMCharSetList'));
    }

    public function newXOMOrientation(): XOMOrientation
    {
        return new \iggyvolz\x11\gen\XOMOrientation($this->ffi->new('XOMOrientation'));
    }

    public function newXOMFontInfo(): XOMFontInfo
    {
        return new \iggyvolz\x11\gen\XOMFontInfo($this->ffi->new('XOMFontInfo'));
    }

    public function newXIMStyles(): XIMStyles
    {
        return new \iggyvolz\x11\gen\XIMStyles($this->ffi->new('XIMStyles'));
    }

    public function newXIMCallback(): XIMCallback
    {
        return new \iggyvolz\x11\gen\XIMCallback($this->ffi->new('XIMCallback'));
    }

    public function newXICCallback(): XICCallback
    {
        return new \iggyvolz\x11\gen\XICCallback($this->ffi->new('XICCallback'));
    }

    public function newIMString(): IMString
    {
        return new \iggyvolz\x11\gen\IMString($this->ffi->new('IMString'));
    }

    public function newXIMText(): XIMText
    {
        return new \iggyvolz\x11\gen\XIMText($this->ffi->new('XIMText'));
    }

    public function newXIMStringConversionText(): XIMStringConversionText
    {
        return new \iggyvolz\x11\gen\XIMStringConversionText($this->ffi->new('XIMStringConversionText'));
    }

    public function newXIMStringConversionCallbackStruct(): XIMStringConversionCallbackStruct
    {
        return new \iggyvolz\x11\gen\XIMStringConversionCallbackStruct($this->ffi->new('XIMStringConversionCallbackStruct'));
    }

    public function newXIMPreeditDrawCallbackStruct(): XIMPreeditDrawCallbackStruct
    {
        return new \iggyvolz\x11\gen\XIMPreeditDrawCallbackStruct($this->ffi->new('XIMPreeditDrawCallbackStruct'));
    }

    public function newXIMPreeditCaretCallbackStruct(): XIMPreeditCaretCallbackStruct
    {
        return new \iggyvolz\x11\gen\XIMPreeditCaretCallbackStruct($this->ffi->new('XIMPreeditCaretCallbackStruct'));
    }

    public function newTextOrBitmap(): TextOrBitmap
    {
        return new \iggyvolz\x11\gen\TextOrBitmap($this->ffi->new('TextOrBitmap'));
    }

    public function newXIMStatusDrawCallbackStruct(): XIMStatusDrawCallbackStruct
    {
        return new \iggyvolz\x11\gen\XIMStatusDrawCallbackStruct($this->ffi->new('XIMStatusDrawCallbackStruct'));
    }

    public function newXIMHotKeyTrigger(): XIMHotKeyTrigger
    {
        return new \iggyvolz\x11\gen\XIMHotKeyTrigger($this->ffi->new('XIMHotKeyTrigger'));
    }

    public function newXIMHotKeyTriggers(): XIMHotKeyTriggers
    {
        return new \iggyvolz\x11\gen\XIMHotKeyTriggers($this->ffi->new('XIMHotKeyTriggers'));
    }

    public function newXIMValuesList(): XIMValuesList
    {
        return new \iggyvolz\x11\gen\XIMValuesList($this->ffi->new('XIMValuesList'));
    }

    public function XLoadQueryFont(null|DisplayPtr $display, null|string $name): ?XFontStructPtr
    {
        $result = $this->ffi->XLoadQueryFont(
          $display->cdata,
          $name,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XFontStructPtr($result);
    }

    public function XQueryFont(null|DisplayPtr $display, int $fontID): ?XFontStructPtr
    {
        $result = $this->ffi->XQueryFont(
          $display->cdata,
          $fontID,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XFontStructPtr($result);
    }

    public function XGetMotionEvents(
        null|DisplayPtr $display,
        int $w,
        int $start,
        int $stop,
        $neventsReturn,
    ): ?XTimeCoordPtr
    {
        $result = $this->ffi->XGetMotionEvents(
          $display->cdata,
          $w,
          $start,
          $stop,
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XTimeCoordPtr($result);
    }

    public function XDeleteModifiermapEntry(
        null|XModifierKeymapPtr $modmap,
        $keycodeEntry,
        int $modifier,
    ): ?XModifierKeymapPtr
    {
        $result = $this->ffi->XDeleteModifiermapEntry(
          $modmap->cdata,
          throw new \LogicException(),
          $modifier,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XModifierKeymapPtr($result);
    }

    public function XGetModifierMapping(null|DisplayPtr $display): ?XModifierKeymapPtr
    {
        $result = $this->ffi->XGetModifierMapping(
          $display->cdata,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XModifierKeymapPtr($result);
    }

    public function XInsertModifiermapEntry(
        null|XModifierKeymapPtr $modmap,
        $keycodeEntry,
        int $modifier,
    ): ?XModifierKeymapPtr
    {
        $result = $this->ffi->XInsertModifiermapEntry(
          $modmap->cdata,
          throw new \LogicException(),
          $modifier,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XModifierKeymapPtr($result);
    }

    public function XNewModifiermap(int $maxKeysPerMod): ?XModifierKeymapPtr
    {
        $result = $this->ffi->XNewModifiermap(
          $maxKeysPerMod,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XModifierKeymapPtr($result);
    }

    public function XCreateImage(
        null|DisplayPtr $display,
        null|VisualPtr $visual,
        int $depth,
        int $format,
        int $offset,
        $data,
        int $width,
        int $height,
        int $bitmapPad,
        int $bytesPerLine,
    ): ?XImagePtr
    {
        $result = $this->ffi->XCreateImage(
          $display->cdata,
          $visual->cdata,
          $depth,
          $format,
          $offset,
          throw new \LogicException(),
          $width,
          $height,
          $bitmapPad,
          $bytesPerLine,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XImagePtr($result);
    }

    public function XInitImage(null|XImagePtr $image): int
    {
        $result = $this->ffi->XInitImage(
          $image->cdata,
        );
        return $result;
    }

    public function XGetImage(
        null|DisplayPtr $display,
        int $d,
        int $x,
        int $y,
        int $width,
        int $height,
        int $planeMask,
        int $format,
    ): ?XImagePtr
    {
        $result = $this->ffi->XGetImage(
          $display->cdata,
          $d,
          $x,
          $y,
          $width,
          $height,
          $planeMask,
          $format,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XImagePtr($result);
    }

    public function XGetSubImage(
        null|DisplayPtr $display,
        int $d,
        int $x,
        int $y,
        int $width,
        int $height,
        int $planeMask,
        int $format,
        null|XImagePtr $destImage,
        int $destX,
        int $destY,
    ): ?XImagePtr
    {
        $result = $this->ffi->XGetSubImage(
          $display->cdata,
          $d,
          $x,
          $y,
          $width,
          $height,
          $planeMask,
          $format,
          $destImage->cdata,
          $destX,
          $destY,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XImagePtr($result);
    }

    public function XOpenDisplay(null|string $displayName): ?DisplayPtr
    {
        $result = $this->ffi->XOpenDisplay(
          $displayName,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\DisplayPtr($result);
    }

    public function XrmInitialize()
    {
        $result = $this->ffi->XrmInitialize(
        );
    }

    public function XFetchBytes(null|DisplayPtr $display, $nbytesReturn)
    {
        $result = $this->ffi->XFetchBytes(
          $display->cdata,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XFetchBuffer(null|DisplayPtr $display, $nbytesReturn, int $buffer)
    {
        $result = $this->ffi->XFetchBuffer(
          $display->cdata,
          throw new \LogicException(),
          $buffer,
        );
        throw new \LogicException();
    }

    public function XGetAtomName(null|DisplayPtr $display, int $atom)
    {
        $result = $this->ffi->XGetAtomName(
          $display->cdata,
          $atom,
        );
        throw new \LogicException();
    }

    public function XGetAtomNames(null|DisplayPtr $dpy, $atoms, int $count, $namesReturn): int
    {
        $result = $this->ffi->XGetAtomNames(
          $dpy->cdata,
          throw new \LogicException(),
          $count,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetDefault(null|DisplayPtr $display, null|string $program, null|string $option)
    {
        $result = $this->ffi->XGetDefault(
          $display->cdata,
          $program,
          $option,
        );
        throw new \LogicException();
    }

    public function XDisplayName(null|string $string)
    {
        $result = $this->ffi->XDisplayName(
          $string,
        );
        throw new \LogicException();
    }

    public function XKeysymToString(int $keysym)
    {
        $result = $this->ffi->XKeysymToString(
          $keysym,
        );
        throw new \LogicException();
    }

    public function XInternAtom(null|DisplayPtr $display, null|string $atomName, bool $onlyIfExists): int
    {
        $result = $this->ffi->XInternAtom(
          $display->cdata,
          $atomName,
          $onlyIfExists === 1,
        );
        return $result;
    }

    public function XInternAtoms(null|DisplayPtr $dpy, $names, int $count, bool $onlyIfExists, $atomsReturn): int
    {
        $result = $this->ffi->XInternAtoms(
          $dpy->cdata,
          throw new \LogicException(),
          $count,
          $onlyIfExists === 1,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XCopyColormapAndFree(null|DisplayPtr $display, int $colormap): int
    {
        $result = $this->ffi->XCopyColormapAndFree(
          $display->cdata,
          $colormap,
        );
        return $result;
    }

    public function XCreateColormap(null|DisplayPtr $display, int $w, null|VisualPtr $visual, int $alloc): int
    {
        $result = $this->ffi->XCreateColormap(
          $display->cdata,
          $w,
          $visual->cdata,
          $alloc,
        );
        return $result;
    }

    public function XCreatePixmapCursor(
        null|DisplayPtr $display,
        int $source,
        int $mask,
        null|XColorPtr $foregroundColor,
        null|XColorPtr $backgroundColor,
        int $x,
        int $y,
    ): int
    {
        $result = $this->ffi->XCreatePixmapCursor(
          $display->cdata,
          $source,
          $mask,
          $foregroundColor->cdata,
          $backgroundColor->cdata,
          $x,
          $y,
        );
        return $result;
    }

    public function XCreateGlyphCursor(
        null|DisplayPtr $display,
        int $sourceFont,
        int $maskFont,
        int $sourceChar,
        int $maskChar,
        $foregroundColor,
        $backgroundColor,
    ): int
    {
        $result = $this->ffi->XCreateGlyphCursor(
          $display->cdata,
          $sourceFont,
          $maskFont,
          $sourceChar,
          $maskChar,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XCreateFontCursor(null|DisplayPtr $display, int $shape): int
    {
        $result = $this->ffi->XCreateFontCursor(
          $display->cdata,
          $shape,
        );
        return $result;
    }

    public function XLoadFont(null|DisplayPtr $display, null|string $name): int
    {
        $result = $this->ffi->XLoadFont(
          $display->cdata,
          $name,
        );
        return $result;
    }

    public function XCreateGC(null|DisplayPtr $display, int $d, int $valuemask, null|XGCValuesPtr $values)
    {
        $result = $this->ffi->XCreateGC(
          $display->cdata,
          $d,
          $valuemask,
          $values->cdata,
        );
        throw new \LogicException();
    }

    public function XGContextFromGC($gc): int
    {
        $result = $this->ffi->XGContextFromGC(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFlushGC(null|DisplayPtr $display, $gc)
    {
        $result = $this->ffi->XFlushGC(
          $display->cdata,
          throw new \LogicException(),
        );
    }

    public function XCreatePixmap(null|DisplayPtr $display, int $d, int $width, int $height, int $depth): int
    {
        $result = $this->ffi->XCreatePixmap(
          $display->cdata,
          $d,
          $width,
          $height,
          $depth,
        );
        return $result;
    }

    public function XCreateBitmapFromData(
        null|DisplayPtr $display,
        int $d,
        null|string $data,
        int $width,
        int $height,
    ): int
    {
        $result = $this->ffi->XCreateBitmapFromData(
          $display->cdata,
          $d,
          $data,
          $width,
          $height,
        );
        return $result;
    }

    public function XCreatePixmapFromBitmapData(
        null|DisplayPtr $display,
        int $d,
        $data,
        int $width,
        int $height,
        int $fg,
        int $bg,
        int $depth,
    ): int
    {
        $result = $this->ffi->XCreatePixmapFromBitmapData(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $width,
          $height,
          $fg,
          $bg,
          $depth,
        );
        return $result;
    }

    public function XCreateSimpleWindow(
        null|DisplayPtr $display,
        int $parent,
        int $x,
        int $y,
        int $width,
        int $height,
        int $borderWidth,
        int $border,
        int $background,
    ): int
    {
        $result = $this->ffi->XCreateSimpleWindow(
          $display->cdata,
          $parent,
          $x,
          $y,
          $width,
          $height,
          $borderWidth,
          $border,
          $background,
        );
        return $result;
    }

    public function XGetSelectionOwner(null|DisplayPtr $display, int $selection): int
    {
        $result = $this->ffi->XGetSelectionOwner(
          $display->cdata,
          $selection,
        );
        return $result;
    }

    public function XCreateWindow(
        null|DisplayPtr $display,
        int $parent,
        int $x,
        int $y,
        int $width,
        int $height,
        int $borderWidth,
        int $depth,
        int $class,
        null|VisualPtr $visual,
        int $valuemask,
        null|XSetWindowAttributesPtr $attributes,
    ): int
    {
        $result = $this->ffi->XCreateWindow(
          $display->cdata,
          $parent,
          $x,
          $y,
          $width,
          $height,
          $borderWidth,
          $depth,
          $class,
          $visual->cdata,
          $valuemask,
          $attributes->cdata,
        );
        return $result;
    }

    public function XListInstalledColormaps(null|DisplayPtr $display, int $w, $numReturn)
    {
        $result = $this->ffi->XListInstalledColormaps(
          $display->cdata,
          $w,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XListFonts(null|DisplayPtr $display, null|string $pattern, int $maxnames, $actualCountReturn)
    {
        $result = $this->ffi->XListFonts(
          $display->cdata,
          $pattern,
          $maxnames,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XListFontsWithInfo(
        null|DisplayPtr $display,
        null|string $pattern,
        int $maxnames,
        $countReturn,
        null|XFontStructPtrPtr $infoReturn,
    ) {
        $result = $this->ffi->XListFontsWithInfo(
          $display->cdata,
          $pattern,
          $maxnames,
          throw new \LogicException(),
          $infoReturn->cdata,
        );
        throw new \LogicException();
    }

    public function XGetFontPath(null|DisplayPtr $display, $npathsReturn)
    {
        $result = $this->ffi->XGetFontPath(
          $display->cdata,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XListExtensions(null|DisplayPtr $display, $nextensionsReturn)
    {
        $result = $this->ffi->XListExtensions(
          $display->cdata,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XListProperties(null|DisplayPtr $display, int $w, $numPropReturn)
    {
        $result = $this->ffi->XListProperties(
          $display->cdata,
          $w,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XListHosts(null|DisplayPtr $display, $nhostsReturn, $stateReturn): ?XHostAddressPtr
    {
        $result = $this->ffi->XListHosts(
          $display->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XHostAddressPtr($result);
    }

    public function XKeycodeToKeysym(null|DisplayPtr $display, $keycode, int $index): int
    {
        $result = $this->ffi->XKeycodeToKeysym(
          $display->cdata,
          throw new \LogicException(),
          $index,
        );
        return $result;
    }

    public function XLookupKeysym(null|XKeyEventPtr $keyEvent, int $index): int
    {
        $result = $this->ffi->XLookupKeysym(
          $keyEvent->cdata,
          $index,
        );
        return $result;
    }

    public function XGetKeyboardMapping(
        null|DisplayPtr $display,
        $firstKeycode,
        int $keycodeCount,
        $keysymsPerKeycodeReturn,
    ) {
        $result = $this->ffi->XGetKeyboardMapping(
          $display->cdata,
          throw new \LogicException(),
          $keycodeCount,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XStringToKeysym(null|string $string): int
    {
        $result = $this->ffi->XStringToKeysym(
          $string,
        );
        return $result;
    }

    public function XMaxRequestSize(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XMaxRequestSize(
          $display->cdata,
        );
        return $result;
    }

    public function XExtendedMaxRequestSize(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XExtendedMaxRequestSize(
          $display->cdata,
        );
        return $result;
    }

    public function XResourceManagerString(null|DisplayPtr $display)
    {
        $result = $this->ffi->XResourceManagerString(
          $display->cdata,
        );
        throw new \LogicException();
    }

    public function XScreenResourceString(null|ScreenPtr $screen)
    {
        $result = $this->ffi->XScreenResourceString(
          $screen->cdata,
        );
        throw new \LogicException();
    }

    public function XDisplayMotionBufferSize(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XDisplayMotionBufferSize(
          $display->cdata,
        );
        return $result;
    }

    public function XVisualIDFromVisual(null|VisualPtr $visual): int
    {
        $result = $this->ffi->XVisualIDFromVisual(
          $visual->cdata,
        );
        return $result;
    }

    public function XInitThreads(): int
    {
        $result = $this->ffi->XInitThreads(
        );
        return $result;
    }

    public function XFreeThreads(): int
    {
        $result = $this->ffi->XFreeThreads(
        );
        return $result;
    }

    public function XLockDisplay(null|DisplayPtr $display)
    {
        $result = $this->ffi->XLockDisplay(
          $display->cdata,
        );
    }

    public function XUnlockDisplay(null|DisplayPtr $display)
    {
        $result = $this->ffi->XUnlockDisplay(
          $display->cdata,
        );
    }

    public function XInitExtension(null|DisplayPtr $display, null|string $name)
    {
        $result = $this->ffi->XInitExtension(
          $display->cdata,
          $name,
        );
        throw new \LogicException();
    }

    public function XAddExtension(null|DisplayPtr $display)
    {
        $result = $this->ffi->XAddExtension(
          $display->cdata,
        );
        throw new \LogicException();
    }

    public function XFindOnExtensionList(null|XExtDataPtrPtr $structure, int $number): ?XExtDataPtr
    {
        $result = $this->ffi->XFindOnExtensionList(
          $structure->cdata,
          $number,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XExtDataPtr($result);
    }

    public function XEHeadOfExtensionList(null|XEDataObject $object): ?XExtDataPtrPtr
    {
        $result = $this->ffi->XEHeadOfExtensionList(
          $object->cdata,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XExtDataPtrPtr($result);
    }

    public function XRootWindow(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XRootWindow(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDefaultRootWindow(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XDefaultRootWindow(
          $display->cdata,
        );
        return $result;
    }

    public function XRootWindowOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XRootWindowOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XDefaultVisual(null|DisplayPtr $display, int $screenNumber): ?VisualPtr
    {
        $result = $this->ffi->XDefaultVisual(
          $display->cdata,
          $screenNumber,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\VisualPtr($result);
    }

    public function XDefaultVisualOfScreen(null|ScreenPtr $screen): ?VisualPtr
    {
        $result = $this->ffi->XDefaultVisualOfScreen(
          $screen->cdata,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\VisualPtr($result);
    }

    public function XDefaultGC(null|DisplayPtr $display, int $screenNumber)
    {
        $result = $this->ffi->XDefaultGC(
          $display->cdata,
          $screenNumber,
        );
        throw new \LogicException();
    }

    public function XDefaultGCOfScreen(null|ScreenPtr $screen)
    {
        $result = $this->ffi->XDefaultGCOfScreen(
          $screen->cdata,
        );
        throw new \LogicException();
    }

    public function XBlackPixel(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XBlackPixel(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XWhitePixel(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XWhitePixel(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XAllPlanes(): int
    {
        $result = $this->ffi->XAllPlanes(
        );
        return $result;
    }

    public function XBlackPixelOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XBlackPixelOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XWhitePixelOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XWhitePixelOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XNextRequest(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XNextRequest(
          $display->cdata,
        );
        return $result;
    }

    public function XLastKnownRequestProcessed(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XLastKnownRequestProcessed(
          $display->cdata,
        );
        return $result;
    }

    public function XServerVendor(null|DisplayPtr $display)
    {
        $result = $this->ffi->XServerVendor(
          $display->cdata,
        );
        throw new \LogicException();
    }

    public function XDisplayString(null|DisplayPtr $display)
    {
        $result = $this->ffi->XDisplayString(
          $display->cdata,
        );
        throw new \LogicException();
    }

    public function XDefaultColormap(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDefaultColormap(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDefaultColormapOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XDefaultColormapOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XDisplayOfScreen(null|ScreenPtr $screen): ?DisplayPtr
    {
        $result = $this->ffi->XDisplayOfScreen(
          $screen->cdata,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\DisplayPtr($result);
    }

    public function XScreenOfDisplay(null|DisplayPtr $display, int $screenNumber): ?ScreenPtr
    {
        $result = $this->ffi->XScreenOfDisplay(
          $display->cdata,
          $screenNumber,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\ScreenPtr($result);
    }

    public function XDefaultScreenOfDisplay(null|DisplayPtr $display): ?ScreenPtr
    {
        $result = $this->ffi->XDefaultScreenOfDisplay(
          $display->cdata,
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\ScreenPtr($result);
    }

    public function XEventMaskOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XEventMaskOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XScreenNumberOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XScreenNumberOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XSetErrorHandler($handler)
    {
        $result = $this->ffi->XSetErrorHandler(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XSetIOErrorHandler($handler)
    {
        $result = $this->ffi->XSetIOErrorHandler(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XSetIOErrorExitHandler(null|DisplayPtr $display, $handler, null|\FFI\CData $userData)
    {
        $result = $this->ffi->XSetIOErrorExitHandler(
          $display->cdata,
          throw new \LogicException(),
          $userData,
        );
    }

    public function XListPixmapFormats(null|DisplayPtr $display, $countReturn): ?XPixmapFormatValuesPtr
    {
        $result = $this->ffi->XListPixmapFormats(
          $display->cdata,
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XPixmapFormatValuesPtr($result);
    }

    public function XListDepths(null|DisplayPtr $display, int $screenNumber, $countReturn)
    {
        $result = $this->ffi->XListDepths(
          $display->cdata,
          $screenNumber,
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XReconfigureWMWindow(
        null|DisplayPtr $display,
        int $w,
        int $screenNumber,
        int $mask,
        null|XWindowChangesPtr $changes,
    ): int
    {
        $result = $this->ffi->XReconfigureWMWindow(
          $display->cdata,
          $w,
          $screenNumber,
          $mask,
          $changes->cdata,
        );
        return $result;
    }

    public function XGetWMProtocols(null|DisplayPtr $display, int $w, $protocolsReturn, $countReturn): int
    {
        $result = $this->ffi->XGetWMProtocols(
          $display->cdata,
          $w,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XSetWMProtocols(null|DisplayPtr $display, int $w, $protocols, int $count): int
    {
        $result = $this->ffi->XSetWMProtocols(
          $display->cdata,
          $w,
          throw new \LogicException(),
          $count,
        );
        return $result;
    }

    public function XIconifyWindow(null|DisplayPtr $display, int $w, int $screenNumber): int
    {
        $result = $this->ffi->XIconifyWindow(
          $display->cdata,
          $w,
          $screenNumber,
        );
        return $result;
    }

    public function XWithdrawWindow(null|DisplayPtr $display, int $w, int $screenNumber): int
    {
        $result = $this->ffi->XWithdrawWindow(
          $display->cdata,
          $w,
          $screenNumber,
        );
        return $result;
    }

    public function XGetCommand(null|DisplayPtr $display, int $w, $argvReturn, $argcReturn): int
    {
        $result = $this->ffi->XGetCommand(
          $display->cdata,
          $w,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetWMColormapWindows(null|DisplayPtr $display, int $w, $windowsReturn, $countReturn): int
    {
        $result = $this->ffi->XGetWMColormapWindows(
          $display->cdata,
          $w,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XSetWMColormapWindows(null|DisplayPtr $display, int $w, $colormapWindows, int $count): int
    {
        $result = $this->ffi->XSetWMColormapWindows(
          $display->cdata,
          $w,
          throw new \LogicException(),
          $count,
        );
        return $result;
    }

    public function XFreeStringList($list)
    {
        $result = $this->ffi->XFreeStringList(
          throw new \LogicException(),
        );
    }

    public function XSetTransientForHint(null|DisplayPtr $display, int $w, int $propWindow): int
    {
        $result = $this->ffi->XSetTransientForHint(
          $display->cdata,
          $w,
          $propWindow,
        );
        return $result;
    }

    public function XActivateScreenSaver(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XActivateScreenSaver(
          $display->cdata,
        );
        return $result;
    }

    public function XAddHost(null|DisplayPtr $display, null|XHostAddressPtr $host): int
    {
        $result = $this->ffi->XAddHost(
          $display->cdata,
          $host->cdata,
        );
        return $result;
    }

    public function XAddHosts(null|DisplayPtr $display, null|XHostAddressPtr $hosts, int $numHosts): int
    {
        $result = $this->ffi->XAddHosts(
          $display->cdata,
          $hosts->cdata,
          $numHosts,
        );
        return $result;
    }

    public function XAddToExtensionList($structure, null|XExtDataPtr $extData): int
    {
        $result = $this->ffi->XAddToExtensionList(
          throw new \LogicException(),
          $extData->cdata,
        );
        return $result;
    }

    public function XAddToSaveSet(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XAddToSaveSet(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XAllocColor(null|DisplayPtr $display, int $colormap, null|XColorPtr $screenInOut): int
    {
        $result = $this->ffi->XAllocColor(
          $display->cdata,
          $colormap,
          $screenInOut->cdata,
        );
        return $result;
    }

    public function XAllocColorCells(
        null|DisplayPtr $display,
        int $colormap,
        bool $contig,
        $planeMasksReturn,
        int $nplanes,
        $pixelsReturn,
        int $npixels,
    ): int
    {
        $result = $this->ffi->XAllocColorCells(
          $display->cdata,
          $colormap,
          $contig === 1,
          throw new \LogicException(),
          $nplanes,
          throw new \LogicException(),
          $npixels,
        );
        return $result;
    }

    public function XAllocColorPlanes(
        null|DisplayPtr $display,
        int $colormap,
        bool $contig,
        $pixelsReturn,
        int $ncolors,
        int $nreds,
        int $ngreens,
        int $nblues,
        $rmaskReturn,
        $gmaskReturn,
        $bmaskReturn,
    ): int
    {
        $result = $this->ffi->XAllocColorPlanes(
          $display->cdata,
          $colormap,
          $contig === 1,
          throw new \LogicException(),
          $ncolors,
          $nreds,
          $ngreens,
          $nblues,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XAllocNamedColor(
        null|DisplayPtr $display,
        int $colormap,
        null|string $colorName,
        null|XColorPtr $screenDefReturn,
        null|XColorPtr $exactDefReturn,
    ): int
    {
        $result = $this->ffi->XAllocNamedColor(
          $display->cdata,
          $colormap,
          $colorName,
          $screenDefReturn->cdata,
          $exactDefReturn->cdata,
        );
        return $result;
    }

    public function XAllowEvents(null|DisplayPtr $display, int $eventMode, int $time): int
    {
        $result = $this->ffi->XAllowEvents(
          $display->cdata,
          $eventMode,
          $time,
        );
        return $result;
    }

    public function XAutoRepeatOff(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XAutoRepeatOff(
          $display->cdata,
        );
        return $result;
    }

    public function XAutoRepeatOn(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XAutoRepeatOn(
          $display->cdata,
        );
        return $result;
    }

    public function XBell(null|DisplayPtr $display, int $percent): int
    {
        $result = $this->ffi->XBell(
          $display->cdata,
          $percent,
        );
        return $result;
    }

    public function XBitmapBitOrder(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XBitmapBitOrder(
          $display->cdata,
        );
        return $result;
    }

    public function XBitmapPad(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XBitmapPad(
          $display->cdata,
        );
        return $result;
    }

    public function XBitmapUnit(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XBitmapUnit(
          $display->cdata,
        );
        return $result;
    }

    public function XCellsOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XCellsOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XChangeActivePointerGrab(null|DisplayPtr $display, int $eventMask, int $cursor, int $time): int
    {
        $result = $this->ffi->XChangeActivePointerGrab(
          $display->cdata,
          $eventMask,
          $cursor,
          $time,
        );
        return $result;
    }

    public function XChangeGC(null|DisplayPtr $display, $gc, int $valuemask, null|XGCValuesPtr $values): int
    {
        $result = $this->ffi->XChangeGC(
          $display->cdata,
          throw new \LogicException(),
          $valuemask,
          $values->cdata,
        );
        return $result;
    }

    public function XChangeKeyboardControl(
        null|DisplayPtr $display,
        int $valueMask,
        null|XKeyboardControlPtr $values,
    ): int
    {
        $result = $this->ffi->XChangeKeyboardControl(
          $display->cdata,
          $valueMask,
          $values->cdata,
        );
        return $result;
    }

    public function XChangeKeyboardMapping(
        null|DisplayPtr $display,
        int $firstKeycode,
        int $keysymsPerKeycode,
        $keysyms,
        int $numCodes,
    ): int
    {
        $result = $this->ffi->XChangeKeyboardMapping(
          $display->cdata,
          $firstKeycode,
          $keysymsPerKeycode,
          throw new \LogicException(),
          $numCodes,
        );
        return $result;
    }

    public function XChangePointerControl(
        null|DisplayPtr $display,
        bool $doAccel,
        bool $doThreshold,
        int $accelNumerator,
        int $accelDenominator,
        int $threshold,
    ): int
    {
        $result = $this->ffi->XChangePointerControl(
          $display->cdata,
          $doAccel === 1,
          $doThreshold === 1,
          $accelNumerator,
          $accelDenominator,
          $threshold,
        );
        return $result;
    }

    public function XChangeProperty(
        null|DisplayPtr $display,
        int $w,
        int $property,
        int $type,
        int $format,
        int $mode,
        $data,
        int $nelements,
    ): int
    {
        $result = $this->ffi->XChangeProperty(
          $display->cdata,
          $w,
          $property,
          $type,
          $format,
          $mode,
          throw new \LogicException(),
          $nelements,
        );
        return $result;
    }

    public function XChangeSaveSet(null|DisplayPtr $display, int $w, int $changeMode): int
    {
        $result = $this->ffi->XChangeSaveSet(
          $display->cdata,
          $w,
          $changeMode,
        );
        return $result;
    }

    public function XChangeWindowAttributes(
        null|DisplayPtr $display,
        int $w,
        int $valuemask,
        null|XSetWindowAttributesPtr $attributes,
    ): int
    {
        $result = $this->ffi->XChangeWindowAttributes(
          $display->cdata,
          $w,
          $valuemask,
          $attributes->cdata,
        );
        return $result;
    }

    public function XCheckMaskEvent(null|DisplayPtr $display, int $eventMask, null|XEventPtr $eventReturn): bool
    {
        $result = $this->ffi->XCheckMaskEvent(
          $display->cdata,
          $eventMask,
          $eventReturn->cdata,
        );
        return $result === 1;
    }

    public function XCheckTypedEvent(null|DisplayPtr $display, int $eventType, null|XEventPtr $eventReturn): bool
    {
        $result = $this->ffi->XCheckTypedEvent(
          $display->cdata,
          $eventType,
          $eventReturn->cdata,
        );
        return $result === 1;
    }

    public function XCheckTypedWindowEvent(
        null|DisplayPtr $display,
        int $w,
        int $eventType,
        null|XEventPtr $eventReturn,
    ): bool
    {
        $result = $this->ffi->XCheckTypedWindowEvent(
          $display->cdata,
          $w,
          $eventType,
          $eventReturn->cdata,
        );
        return $result === 1;
    }

    public function XCheckWindowEvent(
        null|DisplayPtr $display,
        int $w,
        int $eventMask,
        null|XEventPtr $eventReturn,
    ): bool
    {
        $result = $this->ffi->XCheckWindowEvent(
          $display->cdata,
          $w,
          $eventMask,
          $eventReturn->cdata,
        );
        return $result === 1;
    }

    public function XCirculateSubwindows(null|DisplayPtr $display, int $w, int $direction): int
    {
        $result = $this->ffi->XCirculateSubwindows(
          $display->cdata,
          $w,
          $direction,
        );
        return $result;
    }

    public function XCirculateSubwindowsDown(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XCirculateSubwindowsDown(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XCirculateSubwindowsUp(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XCirculateSubwindowsUp(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XClearArea(
        null|DisplayPtr $display,
        int $w,
        int $x,
        int $y,
        int $width,
        int $height,
        bool $exposures,
    ): int
    {
        $result = $this->ffi->XClearArea(
          $display->cdata,
          $w,
          $x,
          $y,
          $width,
          $height,
          $exposures === 1,
        );
        return $result;
    }

    public function XClearWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XClearWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XCloseDisplay(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XCloseDisplay(
          $display->cdata,
        );
        return $result;
    }

    public function XConfigureWindow(
        null|DisplayPtr $display,
        int $w,
        int $valueMask,
        null|XWindowChangesPtr $values,
    ): int
    {
        $result = $this->ffi->XConfigureWindow(
          $display->cdata,
          $w,
          $valueMask,
          $values->cdata,
        );
        return $result;
    }

    public function XConnectionNumber(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XConnectionNumber(
          $display->cdata,
        );
        return $result;
    }

    public function XConvertSelection(
        null|DisplayPtr $display,
        int $selection,
        int $target,
        int $property,
        int $requestor,
        int $time,
    ): int
    {
        $result = $this->ffi->XConvertSelection(
          $display->cdata,
          $selection,
          $target,
          $property,
          $requestor,
          $time,
        );
        return $result;
    }

    public function XCopyArea(
        null|DisplayPtr $display,
        int $src,
        int $dest,
        $gc,
        int $srcX,
        int $srcY,
        int $width,
        int $height,
        int $destX,
        int $destY,
    ): int
    {
        $result = $this->ffi->XCopyArea(
          $display->cdata,
          $src,
          $dest,
          throw new \LogicException(),
          $srcX,
          $srcY,
          $width,
          $height,
          $destX,
          $destY,
        );
        return $result;
    }

    public function XCopyGC(null|DisplayPtr $display, $src, int $valuemask, $dest): int
    {
        $result = $this->ffi->XCopyGC(
          $display->cdata,
          throw new \LogicException(),
          $valuemask,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XCopyPlane(
        null|DisplayPtr $display,
        int $src,
        int $dest,
        $gc,
        int $srcX,
        int $srcY,
        int $width,
        int $height,
        int $destX,
        int $destY,
        int $plane,
    ): int
    {
        $result = $this->ffi->XCopyPlane(
          $display->cdata,
          $src,
          $dest,
          throw new \LogicException(),
          $srcX,
          $srcY,
          $width,
          $height,
          $destX,
          $destY,
          $plane,
        );
        return $result;
    }

    public function XDefaultDepth(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDefaultDepth(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDefaultDepthOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XDefaultDepthOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XDefaultScreen(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XDefaultScreen(
          $display->cdata,
        );
        return $result;
    }

    public function XDefineCursor(null|DisplayPtr $display, int $w, int $cursor): int
    {
        $result = $this->ffi->XDefineCursor(
          $display->cdata,
          $w,
          $cursor,
        );
        return $result;
    }

    public function XDeleteProperty(null|DisplayPtr $display, int $w, int $property): int
    {
        $result = $this->ffi->XDeleteProperty(
          $display->cdata,
          $w,
          $property,
        );
        return $result;
    }

    public function XDestroyWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XDestroyWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XDestroySubwindows(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XDestroySubwindows(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XDoesBackingStore(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XDoesBackingStore(
          $screen->cdata,
        );
        return $result;
    }

    public function XDoesSaveUnders(null|ScreenPtr $screen): bool
    {
        $result = $this->ffi->XDoesSaveUnders(
          $screen->cdata,
        );
        return $result === 1;
    }

    public function XDisableAccessControl(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XDisableAccessControl(
          $display->cdata,
        );
        return $result;
    }

    public function XDisplayCells(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayCells(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDisplayHeight(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayHeight(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDisplayHeightMM(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayHeightMM(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDisplayKeycodes(null|DisplayPtr $display, $minKeycodesReturn, $maxKeycodesReturn): int
    {
        $result = $this->ffi->XDisplayKeycodes(
          $display->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XDisplayPlanes(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayPlanes(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDisplayWidth(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayWidth(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDisplayWidthMM(null|DisplayPtr $display, int $screenNumber): int
    {
        $result = $this->ffi->XDisplayWidthMM(
          $display->cdata,
          $screenNumber,
        );
        return $result;
    }

    public function XDrawArc(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        int $width,
        int $height,
        int $angle1,
        int $angle2,
    ): int
    {
        $result = $this->ffi->XDrawArc(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $width,
          $height,
          $angle1,
          $angle2,
        );
        return $result;
    }

    public function XDrawArcs(null|DisplayPtr $display, int $d, $gc, null|XArcPtr $arcs, int $narcs): int
    {
        $result = $this->ffi->XDrawArcs(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $arcs->cdata,
          $narcs,
        );
        return $result;
    }

    public function XDrawImageString(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|string $string,
        int $length,
    ): int
    {
        $result = $this->ffi->XDrawImageString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $string,
          $length,
        );
        return $result;
    }

    public function XDrawImageString16(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        $string,
        int $length,
    ): int
    {
        $result = $this->ffi->XDrawImageString16(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          throw new \LogicException(),
          $length,
        );
        return $result;
    }

    public function XDrawLine(null|DisplayPtr $display, int $d, $gc, int $x1, int $y1, int $x2, int $y2): int
    {
        $result = $this->ffi->XDrawLine(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x1,
          $y1,
          $x2,
          $y2,
        );
        return $result;
    }

    public function XDrawLines(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XPointPtr $points,
        int $npoints,
        int $mode,
    ): int
    {
        $result = $this->ffi->XDrawLines(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $points->cdata,
          $npoints,
          $mode,
        );
        return $result;
    }

    public function XDrawPoint(null|DisplayPtr $display, int $d, $gc, int $x, int $y): int
    {
        $result = $this->ffi->XDrawPoint(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
        );
        return $result;
    }

    public function XDrawPoints(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XPointPtr $points,
        int $npoints,
        int $mode,
    ): int
    {
        $result = $this->ffi->XDrawPoints(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $points->cdata,
          $npoints,
          $mode,
        );
        return $result;
    }

    public function XDrawRectangle(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        int $width,
        int $height,
    ): int
    {
        $result = $this->ffi->XDrawRectangle(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $width,
          $height,
        );
        return $result;
    }

    public function XDrawRectangles(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XRectanglePtr $rectangles,
        int $nrectangles,
    ): int
    {
        $result = $this->ffi->XDrawRectangles(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $rectangles->cdata,
          $nrectangles,
        );
        return $result;
    }

    public function XDrawSegments(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XSegmentPtr $segments,
        int $nsegments,
    ): int
    {
        $result = $this->ffi->XDrawSegments(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $segments->cdata,
          $nsegments,
        );
        return $result;
    }

    public function XDrawString(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|string $string,
        int $length,
    ): int
    {
        $result = $this->ffi->XDrawString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $string,
          $length,
        );
        return $result;
    }

    public function XDrawString16(null|DisplayPtr $display, int $d, $gc, int $x, int $y, $string, int $length): int
    {
        $result = $this->ffi->XDrawString16(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          throw new \LogicException(),
          $length,
        );
        return $result;
    }

    public function XDrawText(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|XTextItemPtr $items,
        int $nitems,
    ): int
    {
        $result = $this->ffi->XDrawText(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $items->cdata,
          $nitems,
        );
        return $result;
    }

    public function XDrawText16(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|XTextItem16Ptr $items,
        int $nitems,
    ): int
    {
        $result = $this->ffi->XDrawText16(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $items->cdata,
          $nitems,
        );
        return $result;
    }

    public function XEnableAccessControl(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XEnableAccessControl(
          $display->cdata,
        );
        return $result;
    }

    public function XEventsQueued(null|DisplayPtr $display, int $mode): int
    {
        $result = $this->ffi->XEventsQueued(
          $display->cdata,
          $mode,
        );
        return $result;
    }

    public function XFetchName(null|DisplayPtr $display, int $w, $windowNameReturn): int
    {
        $result = $this->ffi->XFetchName(
          $display->cdata,
          $w,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFillArc(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        int $width,
        int $height,
        int $angle1,
        int $angle2,
    ): int
    {
        $result = $this->ffi->XFillArc(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $width,
          $height,
          $angle1,
          $angle2,
        );
        return $result;
    }

    public function XFillArcs(null|DisplayPtr $display, int $d, $gc, null|XArcPtr $arcs, int $narcs): int
    {
        $result = $this->ffi->XFillArcs(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $arcs->cdata,
          $narcs,
        );
        return $result;
    }

    public function XFillPolygon(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XPointPtr $points,
        int $npoints,
        int $shape,
        int $mode,
    ): int
    {
        $result = $this->ffi->XFillPolygon(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $points->cdata,
          $npoints,
          $shape,
          $mode,
        );
        return $result;
    }

    public function XFillRectangle(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        int $width,
        int $height,
    ): int
    {
        $result = $this->ffi->XFillRectangle(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $width,
          $height,
        );
        return $result;
    }

    public function XFillRectangles(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XRectanglePtr $rectangles,
        int $nrectangles,
    ): int
    {
        $result = $this->ffi->XFillRectangles(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $rectangles->cdata,
          $nrectangles,
        );
        return $result;
    }

    public function XFlush(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XFlush(
          $display->cdata,
        );
        return $result;
    }

    public function XForceScreenSaver(null|DisplayPtr $display, int $mode): int
    {
        $result = $this->ffi->XForceScreenSaver(
          $display->cdata,
          $mode,
        );
        return $result;
    }

    public function XFree(null|\FFI\CData $data): int
    {
        $result = $this->ffi->XFree(
          $data,
        );
        return $result;
    }

    public function XFreeColormap(null|DisplayPtr $display, int $colormap): int
    {
        $result = $this->ffi->XFreeColormap(
          $display->cdata,
          $colormap,
        );
        return $result;
    }

    public function XFreeColors(null|DisplayPtr $display, int $colormap, $pixels, int $npixels, int $planes): int
    {
        $result = $this->ffi->XFreeColors(
          $display->cdata,
          $colormap,
          throw new \LogicException(),
          $npixels,
          $planes,
        );
        return $result;
    }

    public function XFreeCursor(null|DisplayPtr $display, int $cursor): int
    {
        $result = $this->ffi->XFreeCursor(
          $display->cdata,
          $cursor,
        );
        return $result;
    }

    public function XFreeExtensionList($list): int
    {
        $result = $this->ffi->XFreeExtensionList(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFreeFont(null|DisplayPtr $display, null|XFontStructPtr $fontStruct): int
    {
        $result = $this->ffi->XFreeFont(
          $display->cdata,
          $fontStruct->cdata,
        );
        return $result;
    }

    public function XFreeFontInfo($names, null|XFontStructPtr $freeInfo, int $actualCount): int
    {
        $result = $this->ffi->XFreeFontInfo(
          throw new \LogicException(),
          $freeInfo->cdata,
          $actualCount,
        );
        return $result;
    }

    public function XFreeFontNames($list): int
    {
        $result = $this->ffi->XFreeFontNames(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFreeFontPath($list): int
    {
        $result = $this->ffi->XFreeFontPath(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFreeGC(null|DisplayPtr $display, $gc): int
    {
        $result = $this->ffi->XFreeGC(
          $display->cdata,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XFreeModifiermap(null|XModifierKeymapPtr $modmap): int
    {
        $result = $this->ffi->XFreeModifiermap(
          $modmap->cdata,
        );
        return $result;
    }

    public function XFreePixmap(null|DisplayPtr $display, int $pixmap): int
    {
        $result = $this->ffi->XFreePixmap(
          $display->cdata,
          $pixmap,
        );
        return $result;
    }

    public function XGeometry(
        null|DisplayPtr $display,
        int $screen,
        null|string $position,
        null|string $defaultPosition,
        int $bwidth,
        int $fwidth,
        int $fheight,
        int $xadder,
        int $yadder,
        $xReturn,
        $yReturn,
        $widthReturn,
        $heightReturn,
    ): int
    {
        $result = $this->ffi->XGeometry(
          $display->cdata,
          $screen,
          $position,
          $defaultPosition,
          $bwidth,
          $fwidth,
          $fheight,
          $xadder,
          $yadder,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetErrorDatabaseText(
        null|DisplayPtr $display,
        null|string $name,
        null|string $message,
        null|string $defaultString,
        $bufferReturn,
        int $length,
    ): int
    {
        $result = $this->ffi->XGetErrorDatabaseText(
          $display->cdata,
          $name,
          $message,
          $defaultString,
          throw new \LogicException(),
          $length,
        );
        return $result;
    }

    public function XGetErrorText(null|DisplayPtr $display, int $code, $bufferReturn, int $length): int
    {
        $result = $this->ffi->XGetErrorText(
          $display->cdata,
          $code,
          throw new \LogicException(),
          $length,
        );
        return $result;
    }

    public function XGetFontProperty(null|XFontStructPtr $fontStruct, int $atom, $valueReturn): bool
    {
        $result = $this->ffi->XGetFontProperty(
          $fontStruct->cdata,
          $atom,
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XGetGCValues(null|DisplayPtr $display, $gc, int $valuemask, null|XGCValuesPtr $valuesReturn): int
    {
        $result = $this->ffi->XGetGCValues(
          $display->cdata,
          throw new \LogicException(),
          $valuemask,
          $valuesReturn->cdata,
        );
        return $result;
    }

    public function XGetGeometry(
        null|DisplayPtr $display,
        int $d,
        $rootReturn,
        $xReturn,
        $yReturn,
        $widthReturn,
        $heightReturn,
        $borderWidthReturn,
        $depthReturn,
    ): int
    {
        $result = $this->ffi->XGetGeometry(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetIconName(null|DisplayPtr $display, int $w, $iconNameReturn): int
    {
        $result = $this->ffi->XGetIconName(
          $display->cdata,
          $w,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetInputFocus(null|DisplayPtr $display, $focusReturn, $revertToReturn): int
    {
        $result = $this->ffi->XGetInputFocus(
          $display->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetKeyboardControl(null|DisplayPtr $display, null|XKeyboardStatePtr $valuesReturn): int
    {
        $result = $this->ffi->XGetKeyboardControl(
          $display->cdata,
          $valuesReturn->cdata,
        );
        return $result;
    }

    public function XGetPointerControl(
        null|DisplayPtr $display,
        $accelNumeratorReturn,
        $accelDenominatorReturn,
        $thresholdReturn,
    ): int
    {
        $result = $this->ffi->XGetPointerControl(
          $display->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetPointerMapping(null|DisplayPtr $display, $mapReturn, int $nmap): int
    {
        $result = $this->ffi->XGetPointerMapping(
          $display->cdata,
          throw new \LogicException(),
          $nmap,
        );
        return $result;
    }

    public function XGetScreenSaver(
        null|DisplayPtr $display,
        $timeoutReturn,
        $intervalReturn,
        $preferBlankingReturn,
        $allowExposuresReturn,
    ): int
    {
        $result = $this->ffi->XGetScreenSaver(
          $display->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetTransientForHint(null|DisplayPtr $display, int $w, $propWindowReturn): int
    {
        $result = $this->ffi->XGetTransientForHint(
          $display->cdata,
          $w,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetWindowProperty(
        null|DisplayPtr $display,
        int $w,
        int $property,
        int $longOffset,
        int $longLength,
        bool $delete,
        int $reqType,
        $actualTypeReturn,
        $actualFormatReturn,
        $nitemsReturn,
        $bytesAfterReturn,
        $propReturn,
    ): int
    {
        $result = $this->ffi->XGetWindowProperty(
          $display->cdata,
          $w,
          $property,
          $longOffset,
          $longLength,
          $delete === 1,
          $reqType,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XGetWindowAttributes(
        null|DisplayPtr $display,
        int $w,
        null|XWindowAttributesPtr $windowAttributesReturn,
    ): int
    {
        $result = $this->ffi->XGetWindowAttributes(
          $display->cdata,
          $w,
          $windowAttributesReturn->cdata,
        );
        return $result;
    }

    public function XGrabButton(
        null|DisplayPtr $display,
        int $button,
        int $modifiers,
        int $grabWindow,
        bool $ownerEvents,
        int $eventMask,
        int $pointerMode,
        int $keyboardMode,
        int $confineTo,
        int $cursor,
    ): int
    {
        $result = $this->ffi->XGrabButton(
          $display->cdata,
          $button,
          $modifiers,
          $grabWindow,
          $ownerEvents === 1,
          $eventMask,
          $pointerMode,
          $keyboardMode,
          $confineTo,
          $cursor,
        );
        return $result;
    }

    public function XGrabKey(
        null|DisplayPtr $display,
        int $keycode,
        int $modifiers,
        int $grabWindow,
        bool $ownerEvents,
        int $pointerMode,
        int $keyboardMode,
    ): int
    {
        $result = $this->ffi->XGrabKey(
          $display->cdata,
          $keycode,
          $modifiers,
          $grabWindow,
          $ownerEvents === 1,
          $pointerMode,
          $keyboardMode,
        );
        return $result;
    }

    public function XGrabKeyboard(
        null|DisplayPtr $display,
        int $grabWindow,
        bool $ownerEvents,
        int $pointerMode,
        int $keyboardMode,
        int $time,
    ): int
    {
        $result = $this->ffi->XGrabKeyboard(
          $display->cdata,
          $grabWindow,
          $ownerEvents === 1,
          $pointerMode,
          $keyboardMode,
          $time,
        );
        return $result;
    }

    public function XGrabPointer(
        null|DisplayPtr $display,
        int $grabWindow,
        bool $ownerEvents,
        int $eventMask,
        int $pointerMode,
        int $keyboardMode,
        int $confineTo,
        int $cursor,
        int $time,
    ): int
    {
        $result = $this->ffi->XGrabPointer(
          $display->cdata,
          $grabWindow,
          $ownerEvents === 1,
          $eventMask,
          $pointerMode,
          $keyboardMode,
          $confineTo,
          $cursor,
          $time,
        );
        return $result;
    }

    public function XGrabServer(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XGrabServer(
          $display->cdata,
        );
        return $result;
    }

    public function XHeightMMOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XHeightMMOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XHeightOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XHeightOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XImageByteOrder(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XImageByteOrder(
          $display->cdata,
        );
        return $result;
    }

    public function XInstallColormap(null|DisplayPtr $display, int $colormap): int
    {
        $result = $this->ffi->XInstallColormap(
          $display->cdata,
          $colormap,
        );
        return $result;
    }

    public function XKeysymToKeycode(null|DisplayPtr $display, int $keysym)
    {
        $result = $this->ffi->XKeysymToKeycode(
          $display->cdata,
          $keysym,
        );
        throw new \LogicException();
    }

    public function XKillClient(null|DisplayPtr $display, int $resource): int
    {
        $result = $this->ffi->XKillClient(
          $display->cdata,
          $resource,
        );
        return $result;
    }

    public function XLookupColor(
        null|DisplayPtr $display,
        int $colormap,
        null|string $colorName,
        null|XColorPtr $exactDefReturn,
        null|XColorPtr $screenDefReturn,
    ): int
    {
        $result = $this->ffi->XLookupColor(
          $display->cdata,
          $colormap,
          $colorName,
          $exactDefReturn->cdata,
          $screenDefReturn->cdata,
        );
        return $result;
    }

    public function XLowerWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XLowerWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XMapRaised(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XMapRaised(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XMapSubwindows(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XMapSubwindows(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XMapWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XMapWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XMaskEvent(null|DisplayPtr $display, int $eventMask, null|XEventPtr $eventReturn): int
    {
        $result = $this->ffi->XMaskEvent(
          $display->cdata,
          $eventMask,
          $eventReturn->cdata,
        );
        return $result;
    }

    public function XMaxCmapsOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XMaxCmapsOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XMinCmapsOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XMinCmapsOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XMoveResizeWindow(null|DisplayPtr $display, int $w, int $x, int $y, int $width, int $height): int
    {
        $result = $this->ffi->XMoveResizeWindow(
          $display->cdata,
          $w,
          $x,
          $y,
          $width,
          $height,
        );
        return $result;
    }

    public function XMoveWindow(null|DisplayPtr $display, int $w, int $x, int $y): int
    {
        $result = $this->ffi->XMoveWindow(
          $display->cdata,
          $w,
          $x,
          $y,
        );
        return $result;
    }

    public function XNextEvent(null|DisplayPtr $display, null|XEventPtr $eventReturn): int
    {
        $result = $this->ffi->XNextEvent(
          $display->cdata,
          $eventReturn->cdata,
        );
        return $result;
    }

    public function XNoOp(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XNoOp(
          $display->cdata,
        );
        return $result;
    }

    public function XParseColor(
        null|DisplayPtr $display,
        int $colormap,
        null|string $spec,
        null|XColorPtr $exactDefReturn,
    ): int
    {
        $result = $this->ffi->XParseColor(
          $display->cdata,
          $colormap,
          $spec,
          $exactDefReturn->cdata,
        );
        return $result;
    }

    public function XParseGeometry(null|string $parsestring, $xReturn, $yReturn, $widthReturn, $heightReturn): int
    {
        $result = $this->ffi->XParseGeometry(
          $parsestring,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XPeekEvent(null|DisplayPtr $display, null|XEventPtr $eventReturn): int
    {
        $result = $this->ffi->XPeekEvent(
          $display->cdata,
          $eventReturn->cdata,
        );
        return $result;
    }

    public function XPending(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XPending(
          $display->cdata,
        );
        return $result;
    }

    public function XPlanesOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XPlanesOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XProtocolRevision(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XProtocolRevision(
          $display->cdata,
        );
        return $result;
    }

    public function XProtocolVersion(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XProtocolVersion(
          $display->cdata,
        );
        return $result;
    }

    public function XPutBackEvent(null|DisplayPtr $display, null|XEventPtr $event): int
    {
        $result = $this->ffi->XPutBackEvent(
          $display->cdata,
          $event->cdata,
        );
        return $result;
    }

    public function XPutImage(
        null|DisplayPtr $display,
        int $d,
        $gc,
        null|XImagePtr $image,
        int $srcX,
        int $srcY,
        int $destX,
        int $destY,
        int $width,
        int $height,
    ): int
    {
        $result = $this->ffi->XPutImage(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $image->cdata,
          $srcX,
          $srcY,
          $destX,
          $destY,
          $width,
          $height,
        );
        return $result;
    }

    public function XQLength(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XQLength(
          $display->cdata,
        );
        return $result;
    }

    public function XQueryBestCursor(
        null|DisplayPtr $display,
        int $d,
        int $width,
        int $height,
        $widthReturn,
        $heightReturn,
    ): int
    {
        $result = $this->ffi->XQueryBestCursor(
          $display->cdata,
          $d,
          $width,
          $height,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XQueryBestSize(
        null|DisplayPtr $display,
        int $class,
        int $whichScreen,
        int $width,
        int $height,
        $widthReturn,
        $heightReturn,
    ): int
    {
        $result = $this->ffi->XQueryBestSize(
          $display->cdata,
          $class,
          $whichScreen,
          $width,
          $height,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XQueryBestStipple(
        null|DisplayPtr $display,
        int $whichScreen,
        int $width,
        int $height,
        $widthReturn,
        $heightReturn,
    ): int
    {
        $result = $this->ffi->XQueryBestStipple(
          $display->cdata,
          $whichScreen,
          $width,
          $height,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XQueryBestTile(
        null|DisplayPtr $display,
        int $whichScreen,
        int $width,
        int $height,
        $widthReturn,
        $heightReturn,
    ): int
    {
        $result = $this->ffi->XQueryBestTile(
          $display->cdata,
          $whichScreen,
          $width,
          $height,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XQueryColor(null|DisplayPtr $display, int $colormap, null|XColorPtr $defInOut): int
    {
        $result = $this->ffi->XQueryColor(
          $display->cdata,
          $colormap,
          $defInOut->cdata,
        );
        return $result;
    }

    public function XQueryColors(
        null|DisplayPtr $display,
        int $colormap,
        null|XColorPtr $defsInOut,
        int $ncolors,
    ): int
    {
        $result = $this->ffi->XQueryColors(
          $display->cdata,
          $colormap,
          $defsInOut->cdata,
          $ncolors,
        );
        return $result;
    }

    public function XQueryExtension(
        null|DisplayPtr $display,
        null|string $name,
        $majorOpcodeReturn,
        $firstEventReturn,
        $firstErrorReturn,
    ): bool
    {
        $result = $this->ffi->XQueryExtension(
          $display->cdata,
          $name,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XQueryKeymap(null|DisplayPtr $display, $keysReturn): int
    {
        $result = $this->ffi->XQueryKeymap(
          $display->cdata,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XQueryPointer(
        null|DisplayPtr $display,
        int $w,
        $rootReturn,
        $childReturn,
        $rootXReturn,
        $rootYReturn,
        $winXReturn,
        $winYReturn,
        $maskReturn,
    ): bool
    {
        $result = $this->ffi->XQueryPointer(
          $display->cdata,
          $w,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XQueryTextExtents(
        null|DisplayPtr $display,
        int $fontID,
        null|string $string,
        int $nchars,
        $directionReturn,
        $fontAscentReturn,
        $fontDescentReturn,
        null|XCharStructPtr $overallReturn,
    ): int
    {
        $result = $this->ffi->XQueryTextExtents(
          $display->cdata,
          $fontID,
          $string,
          $nchars,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $overallReturn->cdata,
        );
        return $result;
    }

    public function XQueryTextExtents16(
        null|DisplayPtr $display,
        int $fontID,
        $string,
        int $nchars,
        $directionReturn,
        $fontAscentReturn,
        $fontDescentReturn,
        null|XCharStructPtr $overallReturn,
    ): int
    {
        $result = $this->ffi->XQueryTextExtents16(
          $display->cdata,
          $fontID,
          throw new \LogicException(),
          $nchars,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $overallReturn->cdata,
        );
        return $result;
    }

    public function XQueryTree(
        null|DisplayPtr $display,
        int $w,
        $rootReturn,
        $parentReturn,
        $childrenReturn,
        $nchildrenReturn,
    ): int
    {
        $result = $this->ffi->XQueryTree(
          $display->cdata,
          $w,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XRaiseWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XRaiseWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XReadBitmapFile(
        null|DisplayPtr $display,
        int $d,
        null|string $filename,
        $widthReturn,
        $heightReturn,
        $bitmapReturn,
        $xHotReturn,
        $yHotReturn,
    ): int
    {
        $result = $this->ffi->XReadBitmapFile(
          $display->cdata,
          $d,
          $filename,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XReadBitmapFileData(
        null|string $filename,
        $widthReturn,
        $heightReturn,
        $dataReturn,
        $xHotReturn,
        $yHotReturn,
    ): int
    {
        $result = $this->ffi->XReadBitmapFileData(
          $filename,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XRebindKeysym(
        null|DisplayPtr $display,
        int $keysym,
        $list,
        int $modCount,
        $string,
        int $bytesString,
    ): int
    {
        $result = $this->ffi->XRebindKeysym(
          $display->cdata,
          $keysym,
          throw new \LogicException(),
          $modCount,
          throw new \LogicException(),
          $bytesString,
        );
        return $result;
    }

    public function XRecolorCursor(
        null|DisplayPtr $display,
        int $cursor,
        null|XColorPtr $foregroundColor,
        null|XColorPtr $backgroundColor,
    ): int
    {
        $result = $this->ffi->XRecolorCursor(
          $display->cdata,
          $cursor,
          $foregroundColor->cdata,
          $backgroundColor->cdata,
        );
        return $result;
    }

    public function XRefreshKeyboardMapping(null|XMappingEventPtr $eventMap): int
    {
        $result = $this->ffi->XRefreshKeyboardMapping(
          $eventMap->cdata,
        );
        return $result;
    }

    public function XRemoveFromSaveSet(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XRemoveFromSaveSet(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XRemoveHost(null|DisplayPtr $display, null|XHostAddressPtr $host): int
    {
        $result = $this->ffi->XRemoveHost(
          $display->cdata,
          $host->cdata,
        );
        return $result;
    }

    public function XRemoveHosts(null|DisplayPtr $display, null|XHostAddressPtr $hosts, int $numHosts): int
    {
        $result = $this->ffi->XRemoveHosts(
          $display->cdata,
          $hosts->cdata,
          $numHosts,
        );
        return $result;
    }

    public function XReparentWindow(null|DisplayPtr $display, int $w, int $parent, int $x, int $y): int
    {
        $result = $this->ffi->XReparentWindow(
          $display->cdata,
          $w,
          $parent,
          $x,
          $y,
        );
        return $result;
    }

    public function XResetScreenSaver(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XResetScreenSaver(
          $display->cdata,
        );
        return $result;
    }

    public function XResizeWindow(null|DisplayPtr $display, int $w, int $width, int $height): int
    {
        $result = $this->ffi->XResizeWindow(
          $display->cdata,
          $w,
          $width,
          $height,
        );
        return $result;
    }

    public function XRestackWindows(null|DisplayPtr $display, $windows, int $nwindows): int
    {
        $result = $this->ffi->XRestackWindows(
          $display->cdata,
          throw new \LogicException(),
          $nwindows,
        );
        return $result;
    }

    public function XRotateBuffers(null|DisplayPtr $display, int $rotate): int
    {
        $result = $this->ffi->XRotateBuffers(
          $display->cdata,
          $rotate,
        );
        return $result;
    }

    public function XRotateWindowProperties(
        null|DisplayPtr $display,
        int $w,
        $properties,
        int $numProp,
        int $npositions,
    ): int
    {
        $result = $this->ffi->XRotateWindowProperties(
          $display->cdata,
          $w,
          throw new \LogicException(),
          $numProp,
          $npositions,
        );
        return $result;
    }

    public function XScreenCount(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XScreenCount(
          $display->cdata,
        );
        return $result;
    }

    public function XSelectInput(null|DisplayPtr $display, int $w, int $eventMask): int
    {
        $result = $this->ffi->XSelectInput(
          $display->cdata,
          $w,
          $eventMask,
        );
        return $result;
    }

    public function XSendEvent(
        null|DisplayPtr $display,
        int $w,
        bool $propagate,
        int $eventMask,
        null|XEventPtr $eventSend,
    ): int
    {
        $result = $this->ffi->XSendEvent(
          $display->cdata,
          $w,
          $propagate === 1,
          $eventMask,
          $eventSend->cdata,
        );
        return $result;
    }

    public function XSetAccessControl(null|DisplayPtr $display, int $mode): int
    {
        $result = $this->ffi->XSetAccessControl(
          $display->cdata,
          $mode,
        );
        return $result;
    }

    public function XSetArcMode(null|DisplayPtr $display, $gc, int $arcMode): int
    {
        $result = $this->ffi->XSetArcMode(
          $display->cdata,
          throw new \LogicException(),
          $arcMode,
        );
        return $result;
    }

    public function XSetBackground(null|DisplayPtr $display, $gc, int $background): int
    {
        $result = $this->ffi->XSetBackground(
          $display->cdata,
          throw new \LogicException(),
          $background,
        );
        return $result;
    }

    public function XSetClipMask(null|DisplayPtr $display, $gc, int $pixmap): int
    {
        $result = $this->ffi->XSetClipMask(
          $display->cdata,
          throw new \LogicException(),
          $pixmap,
        );
        return $result;
    }

    public function XSetClipOrigin(null|DisplayPtr $display, $gc, int $clipXOrigin, int $clipYOrigin): int
    {
        $result = $this->ffi->XSetClipOrigin(
          $display->cdata,
          throw new \LogicException(),
          $clipXOrigin,
          $clipYOrigin,
        );
        return $result;
    }

    public function XSetClipRectangles(
        null|DisplayPtr $display,
        $gc,
        int $clipXOrigin,
        int $clipYOrigin,
        null|XRectanglePtr $rectangles,
        int $n,
        int $ordering,
    ): int
    {
        $result = $this->ffi->XSetClipRectangles(
          $display->cdata,
          throw new \LogicException(),
          $clipXOrigin,
          $clipYOrigin,
          $rectangles->cdata,
          $n,
          $ordering,
        );
        return $result;
    }

    public function XSetCloseDownMode(null|DisplayPtr $display, int $closeMode): int
    {
        $result = $this->ffi->XSetCloseDownMode(
          $display->cdata,
          $closeMode,
        );
        return $result;
    }

    public function XSetCommand(null|DisplayPtr $display, int $w, $argv, int $argc): int
    {
        $result = $this->ffi->XSetCommand(
          $display->cdata,
          $w,
          throw new \LogicException(),
          $argc,
        );
        return $result;
    }

    public function XSetDashes(null|DisplayPtr $display, $gc, int $dashOffset, null|string $dashList, int $n): int
    {
        $result = $this->ffi->XSetDashes(
          $display->cdata,
          throw new \LogicException(),
          $dashOffset,
          $dashList,
          $n,
        );
        return $result;
    }

    public function XSetFillRule(null|DisplayPtr $display, $gc, int $fillRule): int
    {
        $result = $this->ffi->XSetFillRule(
          $display->cdata,
          throw new \LogicException(),
          $fillRule,
        );
        return $result;
    }

    public function XSetFillStyle(null|DisplayPtr $display, $gc, int $fillStyle): int
    {
        $result = $this->ffi->XSetFillStyle(
          $display->cdata,
          throw new \LogicException(),
          $fillStyle,
        );
        return $result;
    }

    public function XSetFont(null|DisplayPtr $display, $gc, int $font): int
    {
        $result = $this->ffi->XSetFont(
          $display->cdata,
          throw new \LogicException(),
          $font,
        );
        return $result;
    }

    public function XSetFontPath(null|DisplayPtr $display, $directories, int $ndirs): int
    {
        $result = $this->ffi->XSetFontPath(
          $display->cdata,
          throw new \LogicException(),
          $ndirs,
        );
        return $result;
    }

    public function XSetForeground(null|DisplayPtr $display, $gc, int $foreground): int
    {
        $result = $this->ffi->XSetForeground(
          $display->cdata,
          throw new \LogicException(),
          $foreground,
        );
        return $result;
    }

    public function XSetFunction(null|DisplayPtr $display, $gc, int $function): int
    {
        $result = $this->ffi->XSetFunction(
          $display->cdata,
          throw new \LogicException(),
          $function,
        );
        return $result;
    }

    public function XSetGraphicsExposures(null|DisplayPtr $display, $gc, bool $graphicsExposures): int
    {
        $result = $this->ffi->XSetGraphicsExposures(
          $display->cdata,
          throw new \LogicException(),
          $graphicsExposures === 1,
        );
        return $result;
    }

    public function XSetIconName(null|DisplayPtr $display, int $w, null|string $iconName): int
    {
        $result = $this->ffi->XSetIconName(
          $display->cdata,
          $w,
          $iconName,
        );
        return $result;
    }

    public function XSetInputFocus(null|DisplayPtr $display, int $focus, int $revertTo, int $time): int
    {
        $result = $this->ffi->XSetInputFocus(
          $display->cdata,
          $focus,
          $revertTo,
          $time,
        );
        return $result;
    }

    public function XSetLineAttributes(
        null|DisplayPtr $display,
        $gc,
        int $lineWidth,
        int $lineStyle,
        int $capStyle,
        int $joinStyle,
    ): int
    {
        $result = $this->ffi->XSetLineAttributes(
          $display->cdata,
          throw new \LogicException(),
          $lineWidth,
          $lineStyle,
          $capStyle,
          $joinStyle,
        );
        return $result;
    }

    public function XSetModifierMapping(null|DisplayPtr $display, null|XModifierKeymapPtr $modmap): int
    {
        $result = $this->ffi->XSetModifierMapping(
          $display->cdata,
          $modmap->cdata,
        );
        return $result;
    }

    public function XSetPlaneMask(null|DisplayPtr $display, $gc, int $planeMask): int
    {
        $result = $this->ffi->XSetPlaneMask(
          $display->cdata,
          throw new \LogicException(),
          $planeMask,
        );
        return $result;
    }

    public function XSetPointerMapping(null|DisplayPtr $display, $map, int $nmap): int
    {
        $result = $this->ffi->XSetPointerMapping(
          $display->cdata,
          throw new \LogicException(),
          $nmap,
        );
        return $result;
    }

    public function XSetScreenSaver(
        null|DisplayPtr $display,
        int $timeout,
        int $interval,
        int $preferBlanking,
        int $allowExposures,
    ): int
    {
        $result = $this->ffi->XSetScreenSaver(
          $display->cdata,
          $timeout,
          $interval,
          $preferBlanking,
          $allowExposures,
        );
        return $result;
    }

    public function XSetSelectionOwner(null|DisplayPtr $display, int $selection, int $owner, int $time): int
    {
        $result = $this->ffi->XSetSelectionOwner(
          $display->cdata,
          $selection,
          $owner,
          $time,
        );
        return $result;
    }

    public function XSetState(
        null|DisplayPtr $display,
        $gc,
        int $foreground,
        int $background,
        int $function,
        int $planeMask,
    ): int
    {
        $result = $this->ffi->XSetState(
          $display->cdata,
          throw new \LogicException(),
          $foreground,
          $background,
          $function,
          $planeMask,
        );
        return $result;
    }

    public function XSetStipple(null|DisplayPtr $display, $gc, int $stipple): int
    {
        $result = $this->ffi->XSetStipple(
          $display->cdata,
          throw new \LogicException(),
          $stipple,
        );
        return $result;
    }

    public function XSetSubwindowMode(null|DisplayPtr $display, $gc, int $subwindowMode): int
    {
        $result = $this->ffi->XSetSubwindowMode(
          $display->cdata,
          throw new \LogicException(),
          $subwindowMode,
        );
        return $result;
    }

    public function XSetTSOrigin(null|DisplayPtr $display, $gc, int $tsXOrigin, int $tsYOrigin): int
    {
        $result = $this->ffi->XSetTSOrigin(
          $display->cdata,
          throw new \LogicException(),
          $tsXOrigin,
          $tsYOrigin,
        );
        return $result;
    }

    public function XSetTile(null|DisplayPtr $display, $gc, int $tile): int
    {
        $result = $this->ffi->XSetTile(
          $display->cdata,
          throw new \LogicException(),
          $tile,
        );
        return $result;
    }

    public function XSetWindowBackground(null|DisplayPtr $display, int $w, int $backgroundPixel): int
    {
        $result = $this->ffi->XSetWindowBackground(
          $display->cdata,
          $w,
          $backgroundPixel,
        );
        return $result;
    }

    public function XSetWindowBackgroundPixmap(null|DisplayPtr $display, int $w, int $backgroundPixmap): int
    {
        $result = $this->ffi->XSetWindowBackgroundPixmap(
          $display->cdata,
          $w,
          $backgroundPixmap,
        );
        return $result;
    }

    public function XSetWindowBorder(null|DisplayPtr $display, int $w, int $borderPixel): int
    {
        $result = $this->ffi->XSetWindowBorder(
          $display->cdata,
          $w,
          $borderPixel,
        );
        return $result;
    }

    public function XSetWindowBorderPixmap(null|DisplayPtr $display, int $w, int $borderPixmap): int
    {
        $result = $this->ffi->XSetWindowBorderPixmap(
          $display->cdata,
          $w,
          $borderPixmap,
        );
        return $result;
    }

    public function XSetWindowBorderWidth(null|DisplayPtr $display, int $w, int $width): int
    {
        $result = $this->ffi->XSetWindowBorderWidth(
          $display->cdata,
          $w,
          $width,
        );
        return $result;
    }

    public function XSetWindowColormap(null|DisplayPtr $display, int $w, int $colormap): int
    {
        $result = $this->ffi->XSetWindowColormap(
          $display->cdata,
          $w,
          $colormap,
        );
        return $result;
    }

    public function XStoreBuffer(null|DisplayPtr $display, null|string $bytes, int $nbytes, int $buffer): int
    {
        $result = $this->ffi->XStoreBuffer(
          $display->cdata,
          $bytes,
          $nbytes,
          $buffer,
        );
        return $result;
    }

    public function XStoreBytes(null|DisplayPtr $display, null|string $bytes, int $nbytes): int
    {
        $result = $this->ffi->XStoreBytes(
          $display->cdata,
          $bytes,
          $nbytes,
        );
        return $result;
    }

    public function XStoreColor(null|DisplayPtr $display, int $colormap, null|XColorPtr $color): int
    {
        $result = $this->ffi->XStoreColor(
          $display->cdata,
          $colormap,
          $color->cdata,
        );
        return $result;
    }

    public function XStoreColors(null|DisplayPtr $display, int $colormap, null|XColorPtr $color, int $ncolors): int
    {
        $result = $this->ffi->XStoreColors(
          $display->cdata,
          $colormap,
          $color->cdata,
          $ncolors,
        );
        return $result;
    }

    public function XStoreName(null|DisplayPtr $display, int $w, null|string $windowName): int
    {
        $result = $this->ffi->XStoreName(
          $display->cdata,
          $w,
          $windowName,
        );
        return $result;
    }

    public function XStoreNamedColor(
        null|DisplayPtr $display,
        int $colormap,
        null|string $color,
        int $pixel,
        int $flags,
    ): int
    {
        $result = $this->ffi->XStoreNamedColor(
          $display->cdata,
          $colormap,
          $color,
          $pixel,
          $flags,
        );
        return $result;
    }

    public function XSync(null|DisplayPtr $display, bool $discard): int
    {
        $result = $this->ffi->XSync(
          $display->cdata,
          $discard === 1,
        );
        return $result;
    }

    public function XTextExtents(
        null|XFontStructPtr $fontStruct,
        null|string $string,
        int $nchars,
        $directionReturn,
        $fontAscentReturn,
        $fontDescentReturn,
        null|XCharStructPtr $overallReturn,
    ): int
    {
        $result = $this->ffi->XTextExtents(
          $fontStruct->cdata,
          $string,
          $nchars,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $overallReturn->cdata,
        );
        return $result;
    }

    public function XTextExtents16(
        null|XFontStructPtr $fontStruct,
        $string,
        int $nchars,
        $directionReturn,
        $fontAscentReturn,
        $fontDescentReturn,
        null|XCharStructPtr $overallReturn,
    ): int
    {
        $result = $this->ffi->XTextExtents16(
          $fontStruct->cdata,
          throw new \LogicException(),
          $nchars,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $overallReturn->cdata,
        );
        return $result;
    }

    public function XTextWidth(null|XFontStructPtr $fontStruct, null|string $string, int $count): int
    {
        $result = $this->ffi->XTextWidth(
          $fontStruct->cdata,
          $string,
          $count,
        );
        return $result;
    }

    public function XTextWidth16(null|XFontStructPtr $fontStruct, $string, int $count): int
    {
        $result = $this->ffi->XTextWidth16(
          $fontStruct->cdata,
          throw new \LogicException(),
          $count,
        );
        return $result;
    }

    public function XTranslateCoordinates(
        null|DisplayPtr $display,
        int $srcW,
        int $destW,
        int $srcX,
        int $srcY,
        $destXReturn,
        $destYReturn,
        $childReturn,
    ): bool
    {
        $result = $this->ffi->XTranslateCoordinates(
          $display->cdata,
          $srcW,
          $destW,
          $srcX,
          $srcY,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XUndefineCursor(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XUndefineCursor(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XUngrabButton(null|DisplayPtr $display, int $button, int $modifiers, int $grabWindow): int
    {
        $result = $this->ffi->XUngrabButton(
          $display->cdata,
          $button,
          $modifiers,
          $grabWindow,
        );
        return $result;
    }

    public function XUngrabKey(null|DisplayPtr $display, int $keycode, int $modifiers, int $grabWindow): int
    {
        $result = $this->ffi->XUngrabKey(
          $display->cdata,
          $keycode,
          $modifiers,
          $grabWindow,
        );
        return $result;
    }

    public function XUngrabKeyboard(null|DisplayPtr $display, int $time): int
    {
        $result = $this->ffi->XUngrabKeyboard(
          $display->cdata,
          $time,
        );
        return $result;
    }

    public function XUngrabPointer(null|DisplayPtr $display, int $time): int
    {
        $result = $this->ffi->XUngrabPointer(
          $display->cdata,
          $time,
        );
        return $result;
    }

    public function XUngrabServer(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XUngrabServer(
          $display->cdata,
        );
        return $result;
    }

    public function XUninstallColormap(null|DisplayPtr $display, int $colormap): int
    {
        $result = $this->ffi->XUninstallColormap(
          $display->cdata,
          $colormap,
        );
        return $result;
    }

    public function XUnloadFont(null|DisplayPtr $display, int $font): int
    {
        $result = $this->ffi->XUnloadFont(
          $display->cdata,
          $font,
        );
        return $result;
    }

    public function XUnmapSubwindows(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XUnmapSubwindows(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XUnmapWindow(null|DisplayPtr $display, int $w): int
    {
        $result = $this->ffi->XUnmapWindow(
          $display->cdata,
          $w,
        );
        return $result;
    }

    public function XVendorRelease(null|DisplayPtr $display): int
    {
        $result = $this->ffi->XVendorRelease(
          $display->cdata,
        );
        return $result;
    }

    public function XWarpPointer(
        null|DisplayPtr $display,
        int $srcW,
        int $destW,
        int $srcX,
        int $srcY,
        int $srcWidth,
        int $srcHeight,
        int $destX,
        int $destY,
    ): int
    {
        $result = $this->ffi->XWarpPointer(
          $display->cdata,
          $srcW,
          $destW,
          $srcX,
          $srcY,
          $srcWidth,
          $srcHeight,
          $destX,
          $destY,
        );
        return $result;
    }

    public function XWidthMMOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XWidthMMOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XWidthOfScreen(null|ScreenPtr $screen): int
    {
        $result = $this->ffi->XWidthOfScreen(
          $screen->cdata,
        );
        return $result;
    }

    public function XWindowEvent(null|DisplayPtr $display, int $w, int $eventMask, null|XEventPtr $eventReturn): int
    {
        $result = $this->ffi->XWindowEvent(
          $display->cdata,
          $w,
          $eventMask,
          $eventReturn->cdata,
        );
        return $result;
    }

    public function XWriteBitmapFile(
        null|DisplayPtr $display,
        null|string $filename,
        int $bitmap,
        int $width,
        int $height,
        int $xHot,
        int $yHot,
    ): int
    {
        $result = $this->ffi->XWriteBitmapFile(
          $display->cdata,
          $filename,
          $bitmap,
          $width,
          $height,
          $xHot,
          $yHot,
        );
        return $result;
    }

    public function XSupportsLocale(): bool
    {
        $result = $this->ffi->XSupportsLocale(
        );
        return $result === 1;
    }

    public function XSetLocaleModifiers(null|string $modifierList)
    {
        $result = $this->ffi->XSetLocaleModifiers(
          $modifierList,
        );
        throw new \LogicException();
    }

    public function XOpenOM(null|DisplayPtr $display, $rdb, null|string $resName, null|string $resClass)
    {
        $result = $this->ffi->XOpenOM(
          $display->cdata,
          throw new \LogicException(),
          $resName,
          $resClass,
        );
        throw new \LogicException();
    }

    public function XCloseOM($om): int
    {
        $result = $this->ffi->XCloseOM(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XDisplayOfOM($om): ?DisplayPtr
    {
        $result = $this->ffi->XDisplayOfOM(
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\DisplayPtr($result);
    }

    public function XLocaleOfOM($om)
    {
        $result = $this->ffi->XLocaleOfOM(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XDestroyOC($oc)
    {
        $result = $this->ffi->XDestroyOC(
          throw new \LogicException(),
        );
    }

    public function XOMOfOC($oc)
    {
        $result = $this->ffi->XOMOfOC(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XCreateFontSet(
        null|DisplayPtr $display,
        null|string $baseFontNameList,
        $missingCharsetList,
        $missingCharsetCount,
        $defString,
    ) {
        $result = $this->ffi->XCreateFontSet(
          $display->cdata,
          $baseFontNameList,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XFreeFontSet(null|DisplayPtr $display, $fontSet)
    {
        $result = $this->ffi->XFreeFontSet(
          $display->cdata,
          throw new \LogicException(),
        );
    }

    public function XFontsOfFontSet($fontSet, null|XFontStructPtrPtrPtr $fontStructList, $fontNameList): int
    {
        $result = $this->ffi->XFontsOfFontSet(
          throw new \LogicException(),
          $fontStructList->cdata,
          throw new \LogicException(),
        );
        return $result;
    }

    public function XBaseFontNameListOfFontSet($fontSet)
    {
        $result = $this->ffi->XBaseFontNameListOfFontSet(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XLocaleOfFontSet($fontSet)
    {
        $result = $this->ffi->XLocaleOfFontSet(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XContextDependentDrawing($fontSet): bool
    {
        $result = $this->ffi->XContextDependentDrawing(
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XDirectionalDependentDrawing($fontSet): bool
    {
        $result = $this->ffi->XDirectionalDependentDrawing(
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XContextualDrawing($fontSet): bool
    {
        $result = $this->ffi->XContextualDrawing(
          throw new \LogicException(),
        );
        return $result === 1;
    }

    public function XExtentsOfFontSet($fontSet): ?XFontSetExtentsPtr
    {
        $result = $this->ffi->XExtentsOfFontSet(
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\XFontSetExtentsPtr($result);
    }

    public function XmbTextEscapement($fontSet, null|string $text, int $bytesText): int
    {
        $result = $this->ffi->XmbTextEscapement(
          throw new \LogicException(),
          $text,
          $bytesText,
        );
        return $result;
    }

    public function XwcTextEscapement($fontSet, $text, int $numWchars): int
    {
        $result = $this->ffi->XwcTextEscapement(
          throw new \LogicException(),
          throw new \LogicException(),
          $numWchars,
        );
        return $result;
    }

    public function Xutf8TextEscapement($fontSet, null|string $text, int $bytesText): int
    {
        $result = $this->ffi->Xutf8TextEscapement(
          throw new \LogicException(),
          $text,
          $bytesText,
        );
        return $result;
    }

    public function XmbTextExtents(
        $fontSet,
        null|string $text,
        int $bytesText,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->XmbTextExtents(
          throw new \LogicException(),
          $text,
          $bytesText,
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function XwcTextExtents(
        $fontSet,
        $text,
        int $numWchars,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->XwcTextExtents(
          throw new \LogicException(),
          throw new \LogicException(),
          $numWchars,
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function Xutf8TextExtents(
        $fontSet,
        null|string $text,
        int $bytesText,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->Xutf8TextExtents(
          throw new \LogicException(),
          $text,
          $bytesText,
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function XmbTextPerCharExtents(
        $fontSet,
        null|string $text,
        int $bytesText,
        null|XRectanglePtr $inkExtentsBuffer,
        null|XRectanglePtr $logicalExtentsBuffer,
        int $bufferSize,
        $numChars,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->XmbTextPerCharExtents(
          throw new \LogicException(),
          $text,
          $bytesText,
          $inkExtentsBuffer->cdata,
          $logicalExtentsBuffer->cdata,
          $bufferSize,
          throw new \LogicException(),
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function XwcTextPerCharExtents(
        $fontSet,
        $text,
        int $numWchars,
        null|XRectanglePtr $inkExtentsBuffer,
        null|XRectanglePtr $logicalExtentsBuffer,
        int $bufferSize,
        $numChars,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->XwcTextPerCharExtents(
          throw new \LogicException(),
          throw new \LogicException(),
          $numWchars,
          $inkExtentsBuffer->cdata,
          $logicalExtentsBuffer->cdata,
          $bufferSize,
          throw new \LogicException(),
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function Xutf8TextPerCharExtents(
        $fontSet,
        null|string $text,
        int $bytesText,
        null|XRectanglePtr $inkExtentsBuffer,
        null|XRectanglePtr $logicalExtentsBuffer,
        int $bufferSize,
        $numChars,
        null|XRectanglePtr $overallInkReturn,
        null|XRectanglePtr $overallLogicalReturn,
    ): int
    {
        $result = $this->ffi->Xutf8TextPerCharExtents(
          throw new \LogicException(),
          $text,
          $bytesText,
          $inkExtentsBuffer->cdata,
          $logicalExtentsBuffer->cdata,
          $bufferSize,
          throw new \LogicException(),
          $overallInkReturn->cdata,
          $overallLogicalReturn->cdata,
        );
        return $result;
    }

    public function XmbDrawText(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|XmbTextItemPtr $textItems,
        int $nitems,
    ) {
        $result = $this->ffi->XmbDrawText(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $textItems->cdata,
          $nitems,
        );
    }

    public function XwcDrawText(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|XwcTextItemPtr $textItems,
        int $nitems,
    ) {
        $result = $this->ffi->XwcDrawText(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $textItems->cdata,
          $nitems,
        );
    }

    public function Xutf8DrawText(
        null|DisplayPtr $display,
        int $d,
        $gc,
        int $x,
        int $y,
        null|XmbTextItemPtr $textItems,
        int $nitems,
    ) {
        $result = $this->ffi->Xutf8DrawText(
          $display->cdata,
          $d,
          throw new \LogicException(),
          $x,
          $y,
          $textItems->cdata,
          $nitems,
        );
    }

    public function XmbDrawString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        null|string $text,
        int $bytesText,
    ) {
        $result = $this->ffi->XmbDrawString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          $text,
          $bytesText,
        );
    }

    public function XwcDrawString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        $text,
        int $numWchars,
    ) {
        $result = $this->ffi->XwcDrawString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          throw new \LogicException(),
          $numWchars,
        );
    }

    public function Xutf8DrawString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        null|string $text,
        int $bytesText,
    ) {
        $result = $this->ffi->Xutf8DrawString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          $text,
          $bytesText,
        );
    }

    public function XmbDrawImageString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        null|string $text,
        int $bytesText,
    ) {
        $result = $this->ffi->XmbDrawImageString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          $text,
          $bytesText,
        );
    }

    public function XwcDrawImageString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        $text,
        int $numWchars,
    ) {
        $result = $this->ffi->XwcDrawImageString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          throw new \LogicException(),
          $numWchars,
        );
    }

    public function Xutf8DrawImageString(
        null|DisplayPtr $display,
        int $d,
        $fontSet,
        $gc,
        int $x,
        int $y,
        null|string $text,
        int $bytesText,
    ) {
        $result = $this->ffi->Xutf8DrawImageString(
          $display->cdata,
          $d,
          throw new \LogicException(),
          throw new \LogicException(),
          $x,
          $y,
          $text,
          $bytesText,
        );
    }

    public function XOpenIM(null|DisplayPtr $dpy, $rdb, $resName, $resClass)
    {
        $result = $this->ffi->XOpenIM(
          $dpy->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XCloseIM($im): int
    {
        $result = $this->ffi->XCloseIM(
          throw new \LogicException(),
        );
        return $result;
    }

    public function XDisplayOfIM($im): ?DisplayPtr
    {
        $result = $this->ffi->XDisplayOfIM(
          throw new \LogicException(),
        );
        return \is_null($result) ? null : new \iggyvolz\x11\gen\DisplayPtr($result);
    }

    public function XLocaleOfIM($im)
    {
        $result = $this->ffi->XLocaleOfIM(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XDestroyIC($ic)
    {
        $result = $this->ffi->XDestroyIC(
          throw new \LogicException(),
        );
    }

    public function XSetICFocus($ic)
    {
        $result = $this->ffi->XSetICFocus(
          throw new \LogicException(),
        );
    }

    public function XUnsetICFocus($ic)
    {
        $result = $this->ffi->XUnsetICFocus(
          throw new \LogicException(),
        );
    }

    public function XwcResetIC($ic)
    {
        $result = $this->ffi->XwcResetIC(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XmbResetIC($ic)
    {
        $result = $this->ffi->XmbResetIC(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function Xutf8ResetIC($ic)
    {
        $result = $this->ffi->Xutf8ResetIC(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XIMOfIC($ic)
    {
        $result = $this->ffi->XIMOfIC(
          throw new \LogicException(),
        );
        throw new \LogicException();
    }

    public function XFilterEvent(null|XEventPtr $event, int $window): bool
    {
        $result = $this->ffi->XFilterEvent(
          $event->cdata,
          $window,
        );
        return $result === 1;
    }

    public function XmbLookupString($ic, $event, $bufferReturn, int $bytesBuffer, $keysymReturn, $statusReturn): int
    {
        $result = $this->ffi->XmbLookupString(
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $bytesBuffer,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XwcLookupString($ic, $event, $bufferReturn, int $wcharsBuffer, $keysymReturn, $statusReturn): int
    {
        $result = $this->ffi->XwcLookupString(
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $wcharsBuffer,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function Xutf8LookupString($ic, $event, $bufferReturn, int $bytesBuffer, $keysymReturn, $statusReturn): int
    {
        $result = $this->ffi->Xutf8LookupString(
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $bytesBuffer,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XRegisterIMInstantiateCallback(
        null|DisplayPtr $dpy,
        $rdb,
        $resName,
        $resClass,
        $callback,
        null|\FFI\CData $clientData,
    ): bool
    {
        $result = $this->ffi->XRegisterIMInstantiateCallback(
          $dpy->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $clientData,
        );
        return $result === 1;
    }

    public function XUnregisterIMInstantiateCallback(
        null|DisplayPtr $dpy,
        $rdb,
        $resName,
        $resClass,
        $callback,
        null|\FFI\CData $clientData,
    ): bool
    {
        $result = $this->ffi->XUnregisterIMInstantiateCallback(
          $dpy->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          throw new \LogicException(),
          $clientData,
        );
        return $result === 1;
    }

    public function XInternalConnectionNumbers(null|DisplayPtr $dpy, $fdReturn, $countReturn): int
    {
        $result = $this->ffi->XInternalConnectionNumbers(
          $dpy->cdata,
          throw new \LogicException(),
          throw new \LogicException(),
        );
        return $result;
    }

    public function XProcessInternalConnection(null|DisplayPtr $dpy, int $fd)
    {
        $result = $this->ffi->XProcessInternalConnection(
          $dpy->cdata,
          $fd,
        );
    }

    public function XAddConnectionWatch(null|DisplayPtr $dpy, $callback, null|\FFI\CData $clientData): int
    {
        $result = $this->ffi->XAddConnectionWatch(
          $dpy->cdata,
          throw new \LogicException(),
          $clientData,
        );
        return $result;
    }

    public function XRemoveConnectionWatch(null|DisplayPtr $dpy, $callback, null|\FFI\CData $clientData)
    {
        $result = $this->ffi->XRemoveConnectionWatch(
          $dpy->cdata,
          throw new \LogicException(),
          $clientData,
        );
    }

    public function XSetAuthorization($name, int $namelen, $data, int $datalen)
    {
        $result = $this->ffi->XSetAuthorization(
          throw new \LogicException(),
          $namelen,
          throw new \LogicException(),
          $datalen,
        );
    }

    public function XGetEventData(null|DisplayPtr $dpy, null|XGenericEventCookiePtr $cookie): bool
    {
        $result = $this->ffi->XGetEventData(
          $dpy->cdata,
          $cookie->cdata,
        );
        return $result === 1;
    }

    public function XFreeEventData(null|DisplayPtr $dpy, null|XGenericEventCookiePtr $cookie)
    {
        $result = $this->ffi->XFreeEventData(
          $dpy->cdata,
          $cookie->cdata,
        );
    }
}
