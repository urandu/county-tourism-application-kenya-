/*! jQuery UI - v1.10.3 - 2013-09-18
 * http://jqueryui.com
 * Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.draggable.js, jquery.ui.resizable.js, jquery.ui.sortable.js
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */

(function (t, e) {
    function n(e, n) {
        var r, s, o, a = e.nodeName.toLowerCase();
        return"area" === a ? (r = e.parentNode, s = r.name, e.href && s && "map" === r.nodeName.toLowerCase() ? (o = t("img[usemap=#" + s + "]")[0], !!o && i(o)) : !1) : (/input|select|textarea|button|object/.test(a) ? !e.disabled : "a" === a ? e.href || n : n) && i(e)
    }

    function i(e) {
        return t.expr.filters.visible(e) && !t(e).parents().addBack().filter(function () {
            return"hidden" === t.css(this, "visibility")
        }).length
    }

    var r = 0, s = /^ui-id-\d+$/;
    t.ui = t.ui || {}, t.extend(t.ui, {version: "1.10.3", keyCode: {BACKSPACE: 8, COMMA: 188, DELETE: 46, DOWN: 40, END: 35, ENTER: 13, ESCAPE: 27, HOME: 36, LEFT: 37, NUMPAD_ADD: 107, NUMPAD_DECIMAL: 110, NUMPAD_DIVIDE: 111, NUMPAD_ENTER: 108, NUMPAD_MULTIPLY: 106, NUMPAD_SUBTRACT: 109, PAGE_DOWN: 34, PAGE_UP: 33, PERIOD: 190, RIGHT: 39, SPACE: 32, TAB: 9, UP: 38}}), t.fn.extend({focus: function (e) {
        return function (n, i) {
            return"number" == typeof n ? this.each(function () {
                var e = this;
                setTimeout(function () {
                    t(e).focus(), i && i.call(e)
                }, n)
            }) : e.apply(this, arguments)
        }
    }(t.fn.focus), scrollParent: function () {
        var e;
        return e = t.ui.ie && /(static|relative)/.test(this.css("position")) || /absolute/.test(this.css("position")) ? this.parents().filter(function () {
            return/(relative|absolute|fixed)/.test(t.css(this, "position")) && /(auto|scroll)/.test(t.css(this, "overflow") + t.css(this, "overflow-y") + t.css(this, "overflow-x"))
        }).eq(0) : this.parents().filter(function () {
            return/(auto|scroll)/.test(t.css(this, "overflow") + t.css(this, "overflow-y") + t.css(this, "overflow-x"))
        }).eq(0), /fixed/.test(this.css("position")) || !e.length ? t(document) : e
    }, zIndex: function (n) {
        if (n !== e)return this.css("zIndex", n);
        if (this.length)for (var i, r, s = t(this[0]); s.length && s[0] !== document;) {
            if (i = s.css("position"), ("absolute" === i || "relative" === i || "fixed" === i) && (r = parseInt(s.css("zIndex"), 10), !isNaN(r) && 0 !== r))return r;
            s = s.parent()
        }
        return 0
    }, uniqueId: function () {
        return this.each(function () {
            this.id || (this.id = "ui-id-" + ++r)
        })
    }, removeUniqueId: function () {
        return this.each(function () {
            s.test(this.id) && t(this).removeAttr("id")
        })
    }}), t.extend(t.expr[":"], {data: t.expr.createPseudo ? t.expr.createPseudo(function (e) {
        return function (n) {
            return!!t.data(n, e)
        }
    }) : function (e, n, i) {
        return!!t.data(e, i[3])
    }, focusable: function (e) {
        return n(e, !isNaN(t.attr(e, "tabindex")))
    }, tabbable: function (e) {
        var i = t.attr(e, "tabindex"), r = isNaN(i);
        return(r || i >= 0) && n(e, !r)
    }}), t("<a>").outerWidth(1).jquery || t.each(["Width", "Height"], function (n, i) {
        function r(e, n, i, r) {
            return t.each(s, function () {
                n -= parseFloat(t.css(e, "padding" + this)) || 0, i && (n -= parseFloat(t.css(e, "border" + this + "Width")) || 0), r && (n -= parseFloat(t.css(e, "margin" + this)) || 0)
            }), n
        }

        var s = "Width" === i ? ["Left", "Right"] : ["Top", "Bottom"], o = i.toLowerCase(), a = {innerWidth: t.fn.innerWidth, innerHeight: t.fn.innerHeight, outerWidth: t.fn.outerWidth, outerHeight: t.fn.outerHeight};
        t.fn["inner" + i] = function (n) {
            return n === e ? a["inner" + i].call(this) : this.each(function () {
                t(this).css(o, r(this, n) + "px")
            })
        }, t.fn["outer" + i] = function (e, n) {
            return"number" != typeof e ? a["outer" + i].call(this, e) : this.each(function () {
                t(this).css(o, r(this, e, !0, n) + "px")
            })
        }
    }), t.fn.addBack || (t.fn.addBack = function (t) {
        return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
    }), t("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (t.fn.removeData = function (e) {
        return function (n) {
            return arguments.length ? e.call(this, t.camelCase(n)) : e.call(this)
        }
    }(t.fn.removeData)), t.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), t.support.selectstart = "onselectstart"in document.createElement("div"), t.fn.extend({disableSelection: function () {
        return this.bind((t.support.selectstart ? "selectstart" : "mousedown") + ".ui-disableSelection", function (t) {
            t.preventDefault()
        })
    }, enableSelection: function () {
        return this.unbind(".ui-disableSelection")
    }}), t.extend(t.ui, {plugin: {add: function (e, n, i) {
        var r, s = t.ui[e].prototype;
        for (r in i)s.plugins[r] = s.plugins[r] || [], s.plugins[r].push([n, i[r]])
    }, call: function (t, e, n) {
        var i, r = t.plugins[e];
        if (r && t.element[0].parentNode && 11 !== t.element[0].parentNode.nodeType)for (i = 0; r.length > i; i++)t.options[r[i][0]] && r[i][1].apply(t.element, n)
    }}, hasScroll: function (e, n) {
        if ("hidden" === t(e).css("overflow"))return!1;
        var i = n && "left" === n ? "scrollLeft" : "scrollTop", r = !1;
        return e[i] > 0 ? !0 : (e[i] = 1, r = e[i] > 0, e[i] = 0, r)
    }})
})(jQuery);
(function (t, e) {
    var i = 0, s = Array.prototype.slice, n = t.cleanData;
    t.cleanData = function (e) {
        for (var i, s = 0; null != (i = e[s]); s++)try {
            t(i).triggerHandler("remove")
        } catch (o) {
        }
        n(e)
    }, t.widget = function (i, s, n) {
        var o, r, a, h, l = {}, c = i.split(".")[0];
        i = i.split(".")[1], o = c + "-" + i, n || (n = s, s = t.Widget), t.expr[":"][o.toLowerCase()] = function (e) {
            return!!t.data(e, o)
        }, t[c] = t[c] || {}, r = t[c][i], a = t[c][i] = function (t, i) {
            return this._createWidget ? (arguments.length && this._createWidget(t, i), e) : new a(t, i)
        }, t.extend(a, r, {version: n.version, _proto: t.extend({}, n), _childConstructors: []}), h = new s, h.options = t.widget.extend({}, h.options), t.each(n, function (i, n) {
            return t.isFunction(n) ? (l[i] = function () {
                var t = function () {
                    return s.prototype[i].apply(this, arguments)
                }, e = function (t) {
                    return s.prototype[i].apply(this, t)
                };
                return function () {
                    var i, s = this._super, o = this._superApply;
                    return this._super = t, this._superApply = e, i = n.apply(this, arguments), this._super = s, this._superApply = o, i
                }
            }(), e) : (l[i] = n, e)
        }), a.prototype = t.widget.extend(h, {widgetEventPrefix: r ? h.widgetEventPrefix : i}, l, {constructor: a, namespace: c, widgetName: i, widgetFullName: o}), r ? (t.each(r._childConstructors, function (e, i) {
            var s = i.prototype;
            t.widget(s.namespace + "." + s.widgetName, a, i._proto)
        }), delete r._childConstructors) : s._childConstructors.push(a), t.widget.bridge(i, a)
    }, t.widget.extend = function (i) {
        for (var n, o, r = s.call(arguments, 1), a = 0, h = r.length; h > a; a++)for (n in r[a])o = r[a][n], r[a].hasOwnProperty(n) && o !== e && (i[n] = t.isPlainObject(o) ? t.isPlainObject(i[n]) ? t.widget.extend({}, i[n], o) : t.widget.extend({}, o) : o);
        return i
    }, t.widget.bridge = function (i, n) {
        var o = n.prototype.widgetFullName || i;
        t.fn[i] = function (r) {
            var a = "string" == typeof r, h = s.call(arguments, 1), l = this;
            return r = !a && h.length ? t.widget.extend.apply(null, [r].concat(h)) : r, a ? this.each(function () {
                var s, n = t.data(this, o);
                return n ? t.isFunction(n[r]) && "_" !== r.charAt(0) ? (s = n[r].apply(n, h), s !== n && s !== e ? (l = s && s.jquery ? l.pushStack(s.get()) : s, !1) : e) : t.error("no such method '" + r + "' for " + i + " widget instance") : t.error("cannot call methods on " + i + " prior to initialization; " + "attempted to call method '" + r + "'")
            }) : this.each(function () {
                var e = t.data(this, o);
                e ? e.option(r || {})._init() : t.data(this, o, new n(r, this))
            }), l
        }
    }, t.Widget = function () {
    }, t.Widget._childConstructors = [], t.Widget.prototype = {widgetName: "widget", widgetEventPrefix: "", defaultElement: "<div>", options: {disabled: !1, create: null}, _createWidget: function (e, s) {
        s = t(s || this.defaultElement || this)[0], this.element = t(s), this.uuid = i++, this.eventNamespace = "." + this.widgetName + this.uuid, this.options = t.widget.extend({}, this.options, this._getCreateOptions(), e), this.bindings = t(), this.hoverable = t(), this.focusable = t(), s !== this && (t.data(s, this.widgetFullName, this), this._on(!0, this.element, {remove: function (t) {
            t.target === s && this.destroy()
        }}), this.document = t(s.style ? s.ownerDocument : s.document || s), this.window = t(this.document[0].defaultView || this.document[0].parentWindow)), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
    }, _getCreateOptions: t.noop, _getCreateEventData: t.noop, _create: t.noop, _init: t.noop, destroy: function () {
        this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(t.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
    }, _destroy: t.noop, widget: function () {
        return this.element
    }, option: function (i, s) {
        var n, o, r, a = i;
        if (0 === arguments.length)return t.widget.extend({}, this.options);
        if ("string" == typeof i)if (a = {}, n = i.split("."), i = n.shift(), n.length) {
            for (o = a[i] = t.widget.extend({}, this.options[i]), r = 0; n.length - 1 > r; r++)o[n[r]] = o[n[r]] || {}, o = o[n[r]];
            if (i = n.pop(), s === e)return o[i] === e ? null : o[i];
            o[i] = s
        } else {
            if (s === e)return this.options[i] === e ? null : this.options[i];
            a[i] = s
        }
        return this._setOptions(a), this
    }, _setOptions: function (t) {
        var e;
        for (e in t)this._setOption(e, t[e]);
        return this
    }, _setOption: function (t, e) {
        return this.options[t] = e, "disabled" === t && (this.widget().toggleClass(this.widgetFullName + "-disabled ui-state-disabled", !!e).attr("aria-disabled", e), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")), this
    }, enable: function () {
        return this._setOption("disabled", !1)
    }, disable: function () {
        return this._setOption("disabled", !0)
    }, _on: function (i, s, n) {
        var o, r = this;
        "boolean" != typeof i && (n = s, s = i, i = !1), n ? (s = o = t(s), this.bindings = this.bindings.add(s)) : (n = s, s = this.element, o = this.widget()), t.each(n, function (n, a) {
            function h() {
                return i || r.options.disabled !== !0 && !t(this).hasClass("ui-state-disabled") ? ("string" == typeof a ? r[a] : a).apply(r, arguments) : e
            }

            "string" != typeof a && (h.guid = a.guid = a.guid || h.guid || t.guid++);
            var l = n.match(/^(\w+)\s*(.*)$/), c = l[1] + r.eventNamespace, p = l[2];
            p ? o.delegate(p, c, h) : s.bind(c, h)
        })
    }, _off: function (t, e) {
        e = (e || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, t.unbind(e).undelegate(e)
    }, _delay: function (t, e) {
        function i() {
            return("string" == typeof t ? s[t] : t).apply(s, arguments)
        }

        var s = this;
        return setTimeout(i, e || 0)
    }, _hoverable: function (e) {
        this.hoverable = this.hoverable.add(e), this._on(e, {mouseenter: function (e) {
            t(e.currentTarget).addClass("ui-state-hover")
        }, mouseleave: function (e) {
            t(e.currentTarget).removeClass("ui-state-hover")
        }})
    }, _focusable: function (e) {
        this.focusable = this.focusable.add(e), this._on(e, {focusin: function (e) {
            t(e.currentTarget).addClass("ui-state-focus")
        }, focusout: function (e) {
            t(e.currentTarget).removeClass("ui-state-focus")
        }})
    }, _trigger: function (e, i, s) {
        var n, o, r = this.options[e];
        if (s = s || {}, i = t.Event(i), i.type = (e === this.widgetEventPrefix ? e : this.widgetEventPrefix + e).toLowerCase(), i.target = this.element[0], o = i.originalEvent)for (n in o)n in i || (i[n] = o[n]);
        return this.element.trigger(i, s), !(t.isFunction(r) && r.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented())
    }}, t.each({show: "fadeIn", hide: "fadeOut"}, function (e, i) {
        t.Widget.prototype["_" + e] = function (s, n, o) {
            "string" == typeof n && (n = {effect: n});
            var r, a = n ? n === !0 || "number" == typeof n ? i : n.effect || i : e;
            n = n || {}, "number" == typeof n && (n = {duration: n}), r = !t.isEmptyObject(n), n.complete = o, n.delay && s.delay(n.delay), r && t.effects && t.effects.effect[a] ? s[e](n) : a !== e && s[a] ? s[a](n.duration, n.easing, o) : s.queue(function (i) {
                t(this)[e](), o && o.call(s[0]), i()
            })
        }
    })
})(jQuery);
(function (t) {
    var e = !1;
    t(document).mouseup(function () {
        e = !1
    }), t.widget("ui.mouse", {version: "1.10.3", options: {cancel: "input,textarea,button,select,option", distance: 1, delay: 0}, _mouseInit: function () {
        var e = this;
        this.element.bind("mousedown." + this.widgetName, function (t) {
            return e._mouseDown(t)
        }).bind("click." + this.widgetName, function (s) {
            return!0 === t.data(s.target, e.widgetName + ".preventClickEvent") ? (t.removeData(s.target, e.widgetName + ".preventClickEvent"), s.stopImmediatePropagation(), !1) : undefined
        }), this.started = !1
    }, _mouseDestroy: function () {
        this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && t(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
    }, _mouseDown: function (s) {
        if (!e) {
            this._mouseStarted && this._mouseUp(s), this._mouseDownEvent = s;
            var i = this, o = 1 === s.which, n = "string" == typeof this.options.cancel && s.target.nodeName ? t(s.target).closest(this.options.cancel).length : !1;
            return o && !n && this._mouseCapture(s) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function () {
                i.mouseDelayMet = !0
            }, this.options.delay)), this._mouseDistanceMet(s) && this._mouseDelayMet(s) && (this._mouseStarted = this._mouseStart(s) !== !1, !this._mouseStarted) ? (s.preventDefault(), !0) : (!0 === t.data(s.target, this.widgetName + ".preventClickEvent") && t.removeData(s.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function (t) {
                return i._mouseMove(t)
            }, this._mouseUpDelegate = function (t) {
                return i._mouseUp(t)
            }, t(document).bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), s.preventDefault(), e = !0, !0)) : !0
        }
    }, _mouseMove: function (e) {
        return t.ui.ie && (!document.documentMode || 9 > document.documentMode) && !e.button ? this._mouseUp(e) : this._mouseStarted ? (this._mouseDrag(e), e.preventDefault()) : (this._mouseDistanceMet(e) && this._mouseDelayMet(e) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, e) !== !1, this._mouseStarted ? this._mouseDrag(e) : this._mouseUp(e)), !this._mouseStarted)
    }, _mouseUp: function (e) {
        return t(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, e.target === this._mouseDownEvent.target && t.data(e.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(e)), !1
    }, _mouseDistanceMet: function (t) {
        return Math.max(Math.abs(this._mouseDownEvent.pageX - t.pageX), Math.abs(this._mouseDownEvent.pageY - t.pageY)) >= this.options.distance
    }, _mouseDelayMet: function () {
        return this.mouseDelayMet
    }, _mouseStart: function () {
    }, _mouseDrag: function () {
    }, _mouseStop: function () {
    }, _mouseCapture: function () {
        return!0
    }})
})(jQuery);
(function (t) {
    t.widget("ui.draggable", t.ui.mouse, {version: "1.10.3", widgetEventPrefix: "drag", options: {addClasses: !0, appendTo: "parent", axis: !1, connectToSortable: !1, containment: !1, cursor: "auto", cursorAt: !1, grid: !1, handle: !1, helper: "original", iframeFix: !1, opacity: !1, refreshPositions: !1, revert: !1, revertDuration: 500, scope: "default", scroll: !0, scrollSensitivity: 20, scrollSpeed: 20, snap: !1, snapMode: "both", snapTolerance: 20, stack: !1, zIndex: !1, drag: null, start: null, stop: null}, _create: function () {
        "original" !== this.options.helper || /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative"), this.options.addClasses && this.element.addClass("ui-draggable"), this.options.disabled && this.element.addClass("ui-draggable-disabled"), this._mouseInit()
    }, _destroy: function () {
        this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._mouseDestroy()
    }, _mouseCapture: function (e) {
        var s = this.options;
        return this.helper || s.disabled || t(e.target).closest(".ui-resizable-handle").length > 0 ? !1 : (this.handle = this._getHandle(e), this.handle ? (t(s.iframeFix === !0 ? "iframe" : s.iframeFix).each(function () {
            t("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>").css({width: this.offsetWidth + "px", height: this.offsetHeight + "px", position: "absolute", opacity: "0.001", zIndex: 1e3}).css(t(this).offset()).appendTo("body")
        }), !0) : !1)
    }, _mouseStart: function (e) {
        var s = this.options;
        return this.helper = this._createHelper(e), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), t.ui.ddmanager && (t.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(), this.offsetParent = this.helper.offsetParent(), this.offsetParentCssPosition = this.offsetParent.css("position"), this.offset = this.positionAbs = this.element.offset(), this.offset = {top: this.offset.top - this.margins.top, left: this.offset.left - this.margins.left}, this.offset.scroll = !1, t.extend(this.offset, {click: {left: e.pageX - this.offset.left, top: e.pageY - this.offset.top}, parent: this._getParentOffset(), relative: this._getRelativeOffset()}), this.originalPosition = this.position = this._generatePosition(e), this.originalPageX = e.pageX, this.originalPageY = e.pageY, s.cursorAt && this._adjustOffsetFromHelper(s.cursorAt), this._setContainment(), this._trigger("start", e) === !1 ? (this._clear(), !1) : (this._cacheHelperProportions(), t.ui.ddmanager && !s.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this._mouseDrag(e, !0), t.ui.ddmanager && t.ui.ddmanager.dragStart(this, e), !0)
    }, _mouseDrag: function (e, s) {
        if ("fixed" === this.offsetParentCssPosition && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(e), this.positionAbs = this._convertPositionTo("absolute"), !s) {
            var i = this._uiHash();
            if (this._trigger("drag", e, i) === !1)return this._mouseUp({}), !1;
            this.position = i.position
        }
        return this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), t.ui.ddmanager && t.ui.ddmanager.drag(this, e), !1
    }, _mouseStop: function (e) {
        var s = this, i = !1;
        return t.ui.ddmanager && !this.options.dropBehaviour && (i = t.ui.ddmanager.drop(this, e)), this.dropped && (i = this.dropped, this.dropped = !1), "original" !== this.options.helper || t.contains(this.element[0].ownerDocument, this.element[0]) ? ("invalid" === this.options.revert && !i || "valid" === this.options.revert && i || this.options.revert === !0 || t.isFunction(this.options.revert) && this.options.revert.call(this.element, i) ? t(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function () {
            s._trigger("stop", e) !== !1 && s._clear()
        }) : this._trigger("stop", e) !== !1 && this._clear(), !1) : !1
    }, _mouseUp: function (e) {
        return t("div.ui-draggable-iframeFix").each(function () {
            this.parentNode.removeChild(this)
        }), t.ui.ddmanager && t.ui.ddmanager.dragStop(this, e), t.ui.mouse.prototype._mouseUp.call(this, e)
    }, cancel: function () {
        return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
    }, _getHandle: function (e) {
        return this.options.handle ? !!t(e.target).closest(this.element.find(this.options.handle)).length : !0
    }, _createHelper: function (e) {
        var s = this.options, i = t.isFunction(s.helper) ? t(s.helper.apply(this.element[0], [e])) : "clone" === s.helper ? this.element.clone().removeAttr("id") : this.element;
        return i.parents("body").length || i.appendTo("parent" === s.appendTo ? this.element[0].parentNode : s.appendTo), i[0] === this.element[0] || /(fixed|absolute)/.test(i.css("position")) || i.css("position", "absolute"), i
    }, _adjustOffsetFromHelper: function (e) {
        "string" == typeof e && (e = e.split(" ")), t.isArray(e) && (e = {left: +e[0], top: +e[1] || 0}), "left"in e && (this.offset.click.left = e.left + this.margins.left), "right"in e && (this.offset.click.left = this.helperProportions.width - e.right + this.margins.left), "top"in e && (this.offset.click.top = e.top + this.margins.top), "bottom"in e && (this.offset.click.top = this.helperProportions.height - e.bottom + this.margins.top)
    }, _getParentOffset: function () {
        var e = this.offsetParent.offset();
        return"absolute" === this.cssPosition && this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === document.body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && t.ui.ie) && (e = {top: 0, left: 0}), {top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0), left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)}
    }, _getRelativeOffset: function () {
        if ("relative" === this.cssPosition) {
            var t = this.element.position();
            return{top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(), left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()}
        }
        return{top: 0, left: 0}
    }, _cacheMargins: function () {
        this.margins = {left: parseInt(this.element.css("marginLeft"), 10) || 0, top: parseInt(this.element.css("marginTop"), 10) || 0, right: parseInt(this.element.css("marginRight"), 10) || 0, bottom: parseInt(this.element.css("marginBottom"), 10) || 0}
    }, _cacheHelperProportions: function () {
        this.helperProportions = {width: this.helper.outerWidth(), height: this.helper.outerHeight()}
    }, _setContainment: function () {
        var e, s, i, o = this.options;
        return o.containment ? "window" === o.containment ? (this.containment = [t(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, t(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, t(window).scrollLeft() + t(window).width() - this.helperProportions.width - this.margins.left, t(window).scrollTop() + (t(window).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], undefined) : "document" === o.containment ? (this.containment = [0, 0, t(document).width() - this.helperProportions.width - this.margins.left, (t(document).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], undefined) : o.containment.constructor === Array ? (this.containment = o.containment, undefined) : ("parent" === o.containment && (o.containment = this.helper[0].parentNode), s = t(o.containment), i = s[0], i && (e = "hidden" !== s.css("overflow"), this.containment = [(parseInt(s.css("borderLeftWidth"), 10) || 0) + (parseInt(s.css("paddingLeft"), 10) || 0), (parseInt(s.css("borderTopWidth"), 10) || 0) + (parseInt(s.css("paddingTop"), 10) || 0), (e ? Math.max(i.scrollWidth, i.offsetWidth) : i.offsetWidth) - (parseInt(s.css("borderRightWidth"), 10) || 0) - (parseInt(s.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (e ? Math.max(i.scrollHeight, i.offsetHeight) : i.offsetHeight) - (parseInt(s.css("borderBottomWidth"), 10) || 0) - (parseInt(s.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relative_container = s), undefined) : (this.containment = null, undefined)
    }, _convertPositionTo: function (e, s) {
        s || (s = this.position);
        var i = "absolute" === e ? 1 : -1, o = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent;
        return this.offset.scroll || (this.offset.scroll = {top: o.scrollTop(), left: o.scrollLeft()}), {top: s.top + this.offset.relative.top * i + this.offset.parent.top * i - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : this.offset.scroll.top) * i, left: s.left + this.offset.relative.left * i + this.offset.parent.left * i - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : this.offset.scroll.left) * i}
    }, _generatePosition: function (e) {
        var s, i, o, n, r = this.options, a = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent, l = e.pageX, h = e.pageY;
        return this.offset.scroll || (this.offset.scroll = {top: a.scrollTop(), left: a.scrollLeft()}), this.originalPosition && (this.containment && (this.relative_container ? (i = this.relative_container.offset(), s = [this.containment[0] + i.left, this.containment[1] + i.top, this.containment[2] + i.left, this.containment[3] + i.top]) : s = this.containment, e.pageX - this.offset.click.left < s[0] && (l = s[0] + this.offset.click.left), e.pageY - this.offset.click.top < s[1] && (h = s[1] + this.offset.click.top), e.pageX - this.offset.click.left > s[2] && (l = s[2] + this.offset.click.left), e.pageY - this.offset.click.top > s[3] && (h = s[3] + this.offset.click.top)), r.grid && (o = r.grid[1] ? this.originalPageY + Math.round((h - this.originalPageY) / r.grid[1]) * r.grid[1] : this.originalPageY, h = s ? o - this.offset.click.top >= s[1] || o - this.offset.click.top > s[3] ? o : o - this.offset.click.top >= s[1] ? o - r.grid[1] : o + r.grid[1] : o, n = r.grid[0] ? this.originalPageX + Math.round((l - this.originalPageX) / r.grid[0]) * r.grid[0] : this.originalPageX, l = s ? n - this.offset.click.left >= s[0] || n - this.offset.click.left > s[2] ? n : n - this.offset.click.left >= s[0] ? n - r.grid[0] : n + r.grid[0] : n)), {top: h - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : this.offset.scroll.top), left: l - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : this.offset.scroll.left)}
    }, _clear: function () {
        this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1
    }, _trigger: function (e, s, i) {
        return i = i || this._uiHash(), t.ui.plugin.call(this, e, [s, i]), "drag" === e && (this.positionAbs = this._convertPositionTo("absolute")), t.Widget.prototype._trigger.call(this, e, s, i)
    }, plugins: {}, _uiHash: function () {
        return{helper: this.helper, position: this.position, originalPosition: this.originalPosition, offset: this.positionAbs}
    }}), t.ui.plugin.add("draggable", "connectToSortable", {start: function (e, s) {
        var i = t(this).data("ui-draggable"), o = i.options, n = t.extend({}, s, {item: i.element});
        i.sortables = [], t(o.connectToSortable).each(function () {
            var s = t.data(this, "ui-sortable");
            s && !s.options.disabled && (i.sortables.push({instance: s, shouldRevert: s.options.revert}), s.refreshPositions(), s._trigger("activate", e, n))
        })
    }, stop: function (e, s) {
        var i = t(this).data("ui-draggable"), o = t.extend({}, s, {item: i.element});
        t.each(i.sortables, function () {
            this.instance.isOver ? (this.instance.isOver = 0, i.cancelHelperRemoval = !0, this.instance.cancelHelperRemoval = !1, this.shouldRevert && (this.instance.options.revert = this.shouldRevert), this.instance._mouseStop(e), this.instance.options.helper = this.instance.options._helper, "original" === i.options.helper && this.instance.currentItem.css({top: "auto", left: "auto"})) : (this.instance.cancelHelperRemoval = !1, this.instance._trigger("deactivate", e, o))
        })
    }, drag: function (e, s) {
        var i = t(this).data("ui-draggable"), o = this;
        t.each(i.sortables, function () {
            var n = !1, r = this;
            this.instance.positionAbs = i.positionAbs, this.instance.helperProportions = i.helperProportions, this.instance.offset.click = i.offset.click, this.instance._intersectsWith(this.instance.containerCache) && (n = !0, t.each(i.sortables, function () {
                return this.instance.positionAbs = i.positionAbs, this.instance.helperProportions = i.helperProportions, this.instance.offset.click = i.offset.click, this !== r && this.instance._intersectsWith(this.instance.containerCache) && t.contains(r.instance.element[0], this.instance.element[0]) && (n = !1), n
            })), n ? (this.instance.isOver || (this.instance.isOver = 1, this.instance.currentItem = t(o).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item", !0), this.instance.options._helper = this.instance.options.helper, this.instance.options.helper = function () {
                return s.helper[0]
            }, e.target = this.instance.currentItem[0], this.instance._mouseCapture(e, !0), this.instance._mouseStart(e, !0, !0), this.instance.offset.click.top = i.offset.click.top, this.instance.offset.click.left = i.offset.click.left, this.instance.offset.parent.left -= i.offset.parent.left - this.instance.offset.parent.left, this.instance.offset.parent.top -= i.offset.parent.top - this.instance.offset.parent.top, i._trigger("toSortable", e), i.dropped = this.instance.element, i.currentItem = i.element, this.instance.fromOutside = i), this.instance.currentItem && this.instance._mouseDrag(e)) : this.instance.isOver && (this.instance.isOver = 0, this.instance.cancelHelperRemoval = !0, this.instance.options.revert = !1, this.instance._trigger("out", e, this.instance._uiHash(this.instance)), this.instance._mouseStop(e, !0), this.instance.options.helper = this.instance.options._helper, this.instance.currentItem.remove(), this.instance.placeholder && this.instance.placeholder.remove(), i._trigger("fromSortable", e), i.dropped = !1)
        })
    }}), t.ui.plugin.add("draggable", "cursor", {start: function () {
        var e = t("body"), s = t(this).data("ui-draggable").options;
        e.css("cursor") && (s._cursor = e.css("cursor")), e.css("cursor", s.cursor)
    }, stop: function () {
        var e = t(this).data("ui-draggable").options;
        e._cursor && t("body").css("cursor", e._cursor)
    }}), t.ui.plugin.add("draggable", "opacity", {start: function (e, s) {
        var i = t(s.helper), o = t(this).data("ui-draggable").options;
        i.css("opacity") && (o._opacity = i.css("opacity")), i.css("opacity", o.opacity)
    }, stop: function (e, s) {
        var i = t(this).data("ui-draggable").options;
        i._opacity && t(s.helper).css("opacity", i._opacity)
    }}), t.ui.plugin.add("draggable", "scroll", {start: function () {
        var e = t(this).data("ui-draggable");
        e.scrollParent[0] !== document && "HTML" !== e.scrollParent[0].tagName && (e.overflowOffset = e.scrollParent.offset())
    }, drag: function (e) {
        var s = t(this).data("ui-draggable"), i = s.options, o = !1;
        s.scrollParent[0] !== document && "HTML" !== s.scrollParent[0].tagName ? (i.axis && "x" === i.axis || (s.overflowOffset.top + s.scrollParent[0].offsetHeight - e.pageY < i.scrollSensitivity ? s.scrollParent[0].scrollTop = o = s.scrollParent[0].scrollTop + i.scrollSpeed : e.pageY - s.overflowOffset.top < i.scrollSensitivity && (s.scrollParent[0].scrollTop = o = s.scrollParent[0].scrollTop - i.scrollSpeed)), i.axis && "y" === i.axis || (s.overflowOffset.left + s.scrollParent[0].offsetWidth - e.pageX < i.scrollSensitivity ? s.scrollParent[0].scrollLeft = o = s.scrollParent[0].scrollLeft + i.scrollSpeed : e.pageX - s.overflowOffset.left < i.scrollSensitivity && (s.scrollParent[0].scrollLeft = o = s.scrollParent[0].scrollLeft - i.scrollSpeed))) : (i.axis && "x" === i.axis || (e.pageY - t(document).scrollTop() < i.scrollSensitivity ? o = t(document).scrollTop(t(document).scrollTop() - i.scrollSpeed) : t(window).height() - (e.pageY - t(document).scrollTop()) < i.scrollSensitivity && (o = t(document).scrollTop(t(document).scrollTop() + i.scrollSpeed))), i.axis && "y" === i.axis || (e.pageX - t(document).scrollLeft() < i.scrollSensitivity ? o = t(document).scrollLeft(t(document).scrollLeft() - i.scrollSpeed) : t(window).width() - (e.pageX - t(document).scrollLeft()) < i.scrollSensitivity && (o = t(document).scrollLeft(t(document).scrollLeft() + i.scrollSpeed)))), o !== !1 && t.ui.ddmanager && !i.dropBehaviour && t.ui.ddmanager.prepareOffsets(s, e)
    }}), t.ui.plugin.add("draggable", "snap", {start: function () {
        var e = t(this).data("ui-draggable"), s = e.options;
        e.snapElements = [], t(s.snap.constructor !== String ? s.snap.items || ":data(ui-draggable)" : s.snap).each(function () {
            var s = t(this), i = s.offset();
            this !== e.element[0] && e.snapElements.push({item: this, width: s.outerWidth(), height: s.outerHeight(), top: i.top, left: i.left})
        })
    }, drag: function (e, s) {
        var i, o, n, r, a, l, h, c, p, f, d = t(this).data("ui-draggable"), u = d.options, g = u.snapTolerance, m = s.offset.left, v = m + d.helperProportions.width, P = s.offset.top, b = P + d.helperProportions.height;
        for (p = d.snapElements.length - 1; p >= 0; p--)a = d.snapElements[p].left, l = a + d.snapElements[p].width, h = d.snapElements[p].top, c = h + d.snapElements[p].height, a - g > v || m > l + g || h - g > b || P > c + g || !t.contains(d.snapElements[p].item.ownerDocument, d.snapElements[p].item) ? (d.snapElements[p].snapping && d.options.snap.release && d.options.snap.release.call(d.element, e, t.extend(d._uiHash(), {snapItem: d.snapElements[p].item})), d.snapElements[p].snapping = !1) : ("inner" !== u.snapMode && (i = g >= Math.abs(h - b), o = g >= Math.abs(c - P), n = g >= Math.abs(a - v), r = g >= Math.abs(l - m), i && (s.position.top = d._convertPositionTo("relative", {top: h - d.helperProportions.height, left: 0}).top - d.margins.top), o && (s.position.top = d._convertPositionTo("relative", {top: c, left: 0}).top - d.margins.top), n && (s.position.left = d._convertPositionTo("relative", {top: 0, left: a - d.helperProportions.width}).left - d.margins.left), r && (s.position.left = d._convertPositionTo("relative", {top: 0, left: l}).left - d.margins.left)), f = i || o || n || r, "outer" !== u.snapMode && (i = g >= Math.abs(h - P), o = g >= Math.abs(c - b), n = g >= Math.abs(a - m), r = g >= Math.abs(l - v), i && (s.position.top = d._convertPositionTo("relative", {top: h, left: 0}).top - d.margins.top), o && (s.position.top = d._convertPositionTo("relative", {top: c - d.helperProportions.height, left: 0}).top - d.margins.top), n && (s.position.left = d._convertPositionTo("relative", {top: 0, left: a}).left - d.margins.left), r && (s.position.left = d._convertPositionTo("relative", {top: 0, left: l - d.helperProportions.width}).left - d.margins.left)), !d.snapElements[p].snapping && (i || o || n || r || f) && d.options.snap.snap && d.options.snap.snap.call(d.element, e, t.extend(d._uiHash(), {snapItem: d.snapElements[p].item})), d.snapElements[p].snapping = i || o || n || r || f)
    }}), t.ui.plugin.add("draggable", "stack", {start: function () {
        var e, s = this.data("ui-draggable").options, i = t.makeArray(t(s.stack)).sort(function (e, s) {
            return(parseInt(t(e).css("zIndex"), 10) || 0) - (parseInt(t(s).css("zIndex"), 10) || 0)
        });
        i.length && (e = parseInt(t(i[0]).css("zIndex"), 10) || 0, t(i).each(function (s) {
            t(this).css("zIndex", e + s)
        }), this.css("zIndex", e + i.length))
    }}), t.ui.plugin.add("draggable", "zIndex", {start: function (e, s) {
        var i = t(s.helper), o = t(this).data("ui-draggable").options;
        i.css("zIndex") && (o._zIndex = i.css("zIndex")), i.css("zIndex", o.zIndex)
    }, stop: function (e, s) {
        var i = t(this).data("ui-draggable").options;
        i._zIndex && t(s.helper).css("zIndex", i._zIndex)
    }})
})(jQuery);
(function (t) {
    function e(t) {
        return parseInt(t, 10) || 0
    }

    function i(t) {
        return!isNaN(parseInt(t, 10))
    }

    t.widget("ui.resizable", t.ui.mouse, {version: "1.10.3", widgetEventPrefix: "resize", options: {alsoResize: !1, animate: !1, animateDuration: "slow", animateEasing: "swing", aspectRatio: !1, autoHide: !1, containment: !1, ghost: !1, grid: !1, handles: "e,s,se", helper: !1, maxHeight: null, maxWidth: null, minHeight: 10, minWidth: 10, zIndex: 90, resize: null, start: null, stop: null}, _create: function () {
        var e, i, s, o, n, r = this, a = this.options;
        if (this.element.addClass("ui-resizable"), t.extend(this, {_aspectRatio: !!a.aspectRatio, aspectRatio: a.aspectRatio, originalElement: this.element, _proportionallyResizeElements: [], _helper: a.helper || a.ghost || a.animate ? a.helper || "ui-resizable-helper" : null}), this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i) && (this.element.wrap(t("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({position: this.element.css("position"), width: this.element.outerWidth(), height: this.element.outerHeight(), top: this.element.css("top"), left: this.element.css("left")})), this.element = this.element.parent().data("ui-resizable", this.element.data("ui-resizable")), this.elementIsWrapper = !0, this.element.css({marginLeft: this.originalElement.css("marginLeft"), marginTop: this.originalElement.css("marginTop"), marginRight: this.originalElement.css("marginRight"), marginBottom: this.originalElement.css("marginBottom")}), this.originalElement.css({marginLeft: 0, marginTop: 0, marginRight: 0, marginBottom: 0}), this.originalResizeStyle = this.originalElement.css("resize"), this.originalElement.css("resize", "none"), this._proportionallyResizeElements.push(this.originalElement.css({position: "static", zoom: 1, display: "block"})), this.originalElement.css({margin: this.originalElement.css("margin")}), this._proportionallyResize()), this.handles = a.handles || (t(".ui-resizable-handle", this.element).length ? {n: ".ui-resizable-n", e: ".ui-resizable-e", s: ".ui-resizable-s", w: ".ui-resizable-w", se: ".ui-resizable-se", sw: ".ui-resizable-sw", ne: ".ui-resizable-ne", nw: ".ui-resizable-nw"} : "e,s,se"), this.handles.constructor === String)for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), e = this.handles.split(","), this.handles = {}, i = 0; e.length > i; i++)s = t.trim(e[i]), n = "ui-resizable-" + s, o = t("<div class='ui-resizable-handle " + n + "'></div>"), o.css({zIndex: a.zIndex}), "se" === s && o.addClass("ui-icon ui-icon-gripsmall-diagonal-se"), this.handles[s] = ".ui-resizable-" + s, this.element.append(o);
        this._renderAxis = function (e) {
            var i, s, o, n;
            e = e || this.element;
            for (i in this.handles)this.handles[i].constructor === String && (this.handles[i] = t(this.handles[i], this.element).show()), this.elementIsWrapper && this.originalElement[0].nodeName.match(/textarea|input|select|button/i) && (s = t(this.handles[i], this.element), n = /sw|ne|nw|se|n|s/.test(i) ? s.outerHeight() : s.outerWidth(), o = ["padding", /ne|nw|n/.test(i) ? "Top" : /se|sw|s/.test(i) ? "Bottom" : /^e$/.test(i) ? "Right" : "Left"].join(""), e.css(o, n), this._proportionallyResize()), t(this.handles[i]).length
        }, this._renderAxis(this.element), this._handles = t(".ui-resizable-handle", this.element).disableSelection(), this._handles.mouseover(function () {
            r.resizing || (this.className && (o = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), r.axis = o && o[1] ? o[1] : "se")
        }), a.autoHide && (this._handles.hide(), t(this.element).addClass("ui-resizable-autohide").mouseenter(function () {
            a.disabled || (t(this).removeClass("ui-resizable-autohide"), r._handles.show())
        }).mouseleave(function () {
            a.disabled || r.resizing || (t(this).addClass("ui-resizable-autohide"), r._handles.hide())
        })), this._mouseInit()
    }, _destroy: function () {
        this._mouseDestroy();
        var e, i = function (e) {
            t(e).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()
        };
        return this.elementIsWrapper && (i(this.element), e = this.element, this.originalElement.css({position: e.css("position"), width: e.outerWidth(), height: e.outerHeight(), top: e.css("top"), left: e.css("left")}).insertAfter(e), e.remove()), this.originalElement.css("resize", this.originalResizeStyle), i(this.originalElement), this
    }, _mouseCapture: function (e) {
        var i, s, o = !1;
        for (i in this.handles)s = t(this.handles[i])[0], (s === e.target || t.contains(s, e.target)) && (o = !0);
        return!this.options.disabled && o
    }, _mouseStart: function (i) {
        var s, o, n, r = this.options, a = this.element.position(), h = this.element;
        return this.resizing = !0, /absolute/.test(h.css("position")) ? h.css({position: "absolute", top: h.css("top"), left: h.css("left")}) : h.is(".ui-draggable") && h.css({position: "absolute", top: a.top, left: a.left}), this._renderProxy(), s = e(this.helper.css("left")), o = e(this.helper.css("top")), r.containment && (s += t(r.containment).scrollLeft() || 0, o += t(r.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {left: s, top: o}, this.size = this._helper ? {width: h.outerWidth(), height: h.outerHeight()} : {width: h.width(), height: h.height()}, this.originalSize = this._helper ? {width: h.outerWidth(), height: h.outerHeight()} : {width: h.width(), height: h.height()}, this.originalPosition = {left: s, top: o}, this.sizeDiff = {width: h.outerWidth() - h.width(), height: h.outerHeight() - h.height()}, this.originalMousePosition = {left: i.pageX, top: i.pageY}, this.aspectRatio = "number" == typeof r.aspectRatio ? r.aspectRatio : this.originalSize.width / this.originalSize.height || 1, n = t(".ui-resizable-" + this.axis).css("cursor"), t("body").css("cursor", "auto" === n ? this.axis + "-resize" : n), h.addClass("ui-resizable-resizing"), this._propagate("start", i), !0
    }, _mouseDrag: function (e) {
        var i, s = this.helper, o = {}, n = this.originalMousePosition, r = this.axis, a = this.position.top, h = this.position.left, l = this.size.width, p = this.size.height, c = e.pageX - n.left || 0, d = e.pageY - n.top || 0, f = this._change[r];
        return f ? (i = f.apply(this, [e, c, d]), this._updateVirtualBoundaries(e.shiftKey), (this._aspectRatio || e.shiftKey) && (i = this._updateRatio(i, e)), i = this._respectSize(i, e), this._updateCache(i), this._propagate("resize", e), this.position.top !== a && (o.top = this.position.top + "px"), this.position.left !== h && (o.left = this.position.left + "px"), this.size.width !== l && (o.width = this.size.width + "px"), this.size.height !== p && (o.height = this.size.height + "px"), s.css(o), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), t.isEmptyObject(o) || this._trigger("resize", e, this.ui()), !1) : !1
    }, _mouseStop: function (e) {
        this.resizing = !1;
        var i, s, o, n, r, a, h, l = this.options, p = this;
        return this._helper && (i = this._proportionallyResizeElements, s = i.length && /textarea/i.test(i[0].nodeName), o = s && t.ui.hasScroll(i[0], "left") ? 0 : p.sizeDiff.height, n = s ? 0 : p.sizeDiff.width, r = {width: p.helper.width() - n, height: p.helper.height() - o}, a = parseInt(p.element.css("left"), 10) + (p.position.left - p.originalPosition.left) || null, h = parseInt(p.element.css("top"), 10) + (p.position.top - p.originalPosition.top) || null, l.animate || this.element.css(t.extend(r, {top: h, left: a})), p.helper.height(p.size.height), p.helper.width(p.size.width), this._helper && !l.animate && this._proportionallyResize()), t("body").css("cursor", "auto"), this.element.removeClass("ui-resizable-resizing"), this._propagate("stop", e), this._helper && this.helper.remove(), !1
    }, _updateVirtualBoundaries: function (t) {
        var e, s, o, n, r, a = this.options;
        r = {minWidth: i(a.minWidth) ? a.minWidth : 0, maxWidth: i(a.maxWidth) ? a.maxWidth : 1 / 0, minHeight: i(a.minHeight) ? a.minHeight : 0, maxHeight: i(a.maxHeight) ? a.maxHeight : 1 / 0}, (this._aspectRatio || t) && (e = r.minHeight * this.aspectRatio, o = r.minWidth / this.aspectRatio, s = r.maxHeight * this.aspectRatio, n = r.maxWidth / this.aspectRatio, e > r.minWidth && (r.minWidth = e), o > r.minHeight && (r.minHeight = o), r.maxWidth > s && (r.maxWidth = s), r.maxHeight > n && (r.maxHeight = n)), this._vBoundaries = r
    }, _updateCache: function (t) {
        this.offset = this.helper.offset(), i(t.left) && (this.position.left = t.left), i(t.top) && (this.position.top = t.top), i(t.height) && (this.size.height = t.height), i(t.width) && (this.size.width = t.width)
    }, _updateRatio: function (t) {
        var e = this.position, s = this.size, o = this.axis;
        return i(t.height) ? t.width = t.height * this.aspectRatio : i(t.width) && (t.height = t.width / this.aspectRatio), "sw" === o && (t.left = e.left + (s.width - t.width), t.top = null), "nw" === o && (t.top = e.top + (s.height - t.height), t.left = e.left + (s.width - t.width)), t
    }, _respectSize: function (t) {
        var e = this._vBoundaries, s = this.axis, o = i(t.width) && e.maxWidth && e.maxWidth < t.width, n = i(t.height) && e.maxHeight && e.maxHeight < t.height, r = i(t.width) && e.minWidth && e.minWidth > t.width, a = i(t.height) && e.minHeight && e.minHeight > t.height, h = this.originalPosition.left + this.originalSize.width, l = this.position.top + this.size.height, p = /sw|nw|w/.test(s), c = /nw|ne|n/.test(s);
        return r && (t.width = e.minWidth), a && (t.height = e.minHeight), o && (t.width = e.maxWidth), n && (t.height = e.maxHeight), r && p && (t.left = h - e.minWidth), o && p && (t.left = h - e.maxWidth), a && c && (t.top = l - e.minHeight), n && c && (t.top = l - e.maxHeight), t.width || t.height || t.left || !t.top ? t.width || t.height || t.top || !t.left || (t.left = null) : t.top = null, t
    }, _proportionallyResize: function () {
        if (this._proportionallyResizeElements.length) {
            var t, e, i, s, o, n = this.helper || this.element;
            for (t = 0; this._proportionallyResizeElements.length > t; t++) {
                if (o = this._proportionallyResizeElements[t], !this.borderDif)for (this.borderDif = [], i = [o.css("borderTopWidth"), o.css("borderRightWidth"), o.css("borderBottomWidth"), o.css("borderLeftWidth")], s = [o.css("paddingTop"), o.css("paddingRight"), o.css("paddingBottom"), o.css("paddingLeft")], e = 0; i.length > e; e++)this.borderDif[e] = (parseInt(i[e], 10) || 0) + (parseInt(s[e], 10) || 0);
                o.css({height: n.height() - this.borderDif[0] - this.borderDif[2] || 0, width: n.width() - this.borderDif[1] - this.borderDif[3] || 0})
            }
        }
    }, _renderProxy: function () {
        var e = this.element, i = this.options;
        this.elementOffset = e.offset(), this._helper ? (this.helper = this.helper || t("<div style='overflow:hidden;'></div>"), this.helper.addClass(this._helper).css({width: this.element.outerWidth() - 1, height: this.element.outerHeight() - 1, position: "absolute", left: this.elementOffset.left + "px", top: this.elementOffset.top + "px", zIndex: ++i.zIndex}), this.helper.appendTo("body").disableSelection()) : this.helper = this.element
    }, _change: {e: function (t, e) {
        return{width: this.originalSize.width + e}
    }, w: function (t, e) {
        var i = this.originalSize, s = this.originalPosition;
        return{left: s.left + e, width: i.width - e}
    }, n: function (t, e, i) {
        var s = this.originalSize, o = this.originalPosition;
        return{top: o.top + i, height: s.height - i}
    }, s: function (t, e, i) {
        return{height: this.originalSize.height + i}
    }, se: function (e, i, s) {
        return t.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [e, i, s]))
    }, sw: function (e, i, s) {
        return t.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [e, i, s]))
    }, ne: function (e, i, s) {
        return t.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [e, i, s]))
    }, nw: function (e, i, s) {
        return t.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [e, i, s]))
    }}, _propagate: function (e, i) {
        t.ui.plugin.call(this, e, [i, this.ui()]), "resize" !== e && this._trigger(e, i, this.ui())
    }, plugins: {}, ui: function () {
        return{originalElement: this.originalElement, element: this.element, helper: this.helper, position: this.position, size: this.size, originalSize: this.originalSize, originalPosition: this.originalPosition}
    }}), t.ui.plugin.add("resizable", "animate", {stop: function (e) {
        var i = t(this).data("ui-resizable"), s = i.options, o = i._proportionallyResizeElements, n = o.length && /textarea/i.test(o[0].nodeName), r = n && t.ui.hasScroll(o[0], "left") ? 0 : i.sizeDiff.height, a = n ? 0 : i.sizeDiff.width, h = {width: i.size.width - a, height: i.size.height - r}, l = parseInt(i.element.css("left"), 10) + (i.position.left - i.originalPosition.left) || null, p = parseInt(i.element.css("top"), 10) + (i.position.top - i.originalPosition.top) || null;
        i.element.animate(t.extend(h, p && l ? {top: p, left: l} : {}), {duration: s.animateDuration, easing: s.animateEasing, step: function () {
            var s = {width: parseInt(i.element.css("width"), 10), height: parseInt(i.element.css("height"), 10), top: parseInt(i.element.css("top"), 10), left: parseInt(i.element.css("left"), 10)};
            o && o.length && t(o[0]).css({width: s.width, height: s.height}), i._updateCache(s), i._propagate("resize", e)
        }})
    }}), t.ui.plugin.add("resizable", "containment", {start: function () {
        var i, s, o, n, r, a, h, l = t(this).data("ui-resizable"), p = l.options, c = l.element, d = p.containment, f = d instanceof t ? d.get(0) : /parent/.test(d) ? c.parent().get(0) : d;
        f && (l.containerElement = t(f), /document/.test(d) || d === document ? (l.containerOffset = {left: 0, top: 0}, l.containerPosition = {left: 0, top: 0}, l.parentData = {element: t(document), left: 0, top: 0, width: t(document).width(), height: t(document).height() || document.body.parentNode.scrollHeight}) : (i = t(f), s = [], t(["Top", "Right", "Left", "Bottom"]).each(function (t, o) {
            s[t] = e(i.css("padding" + o))
        }), l.containerOffset = i.offset(), l.containerPosition = i.position(), l.containerSize = {height: i.innerHeight() - s[3], width: i.innerWidth() - s[1]}, o = l.containerOffset, n = l.containerSize.height, r = l.containerSize.width, a = t.ui.hasScroll(f, "left") ? f.scrollWidth : r, h = t.ui.hasScroll(f) ? f.scrollHeight : n, l.parentData = {element: f, left: o.left, top: o.top, width: a, height: h}))
    }, resize: function (e) {
        var i, s, o, n, r = t(this).data("ui-resizable"), a = r.options, h = r.containerOffset, l = r.position, p = r._aspectRatio || e.shiftKey, c = {top: 0, left: 0}, d = r.containerElement;
        d[0] !== document && /static/.test(d.css("position")) && (c = h), l.left < (r._helper ? h.left : 0) && (r.size.width = r.size.width + (r._helper ? r.position.left - h.left : r.position.left - c.left), p && (r.size.height = r.size.width / r.aspectRatio), r.position.left = a.helper ? h.left : 0), l.top < (r._helper ? h.top : 0) && (r.size.height = r.size.height + (r._helper ? r.position.top - h.top : r.position.top), p && (r.size.width = r.size.height * r.aspectRatio), r.position.top = r._helper ? h.top : 0), r.offset.left = r.parentData.left + r.position.left, r.offset.top = r.parentData.top + r.position.top, i = Math.abs((r._helper ? r.offset.left - c.left : r.offset.left - c.left) + r.sizeDiff.width), s = Math.abs((r._helper ? r.offset.top - c.top : r.offset.top - h.top) + r.sizeDiff.height), o = r.containerElement.get(0) === r.element.parent().get(0), n = /relative|absolute/.test(r.containerElement.css("position")), o && n && (i -= r.parentData.left), i + r.size.width >= r.parentData.width && (r.size.width = r.parentData.width - i, p && (r.size.height = r.size.width / r.aspectRatio)), s + r.size.height >= r.parentData.height && (r.size.height = r.parentData.height - s, p && (r.size.width = r.size.height * r.aspectRatio))
    }, stop: function () {
        var e = t(this).data("ui-resizable"), i = e.options, s = e.containerOffset, o = e.containerPosition, n = e.containerElement, r = t(e.helper), a = r.offset(), h = r.outerWidth() - e.sizeDiff.width, l = r.outerHeight() - e.sizeDiff.height;
        e._helper && !i.animate && /relative/.test(n.css("position")) && t(this).css({left: a.left - o.left - s.left, width: h, height: l}), e._helper && !i.animate && /static/.test(n.css("position")) && t(this).css({left: a.left - o.left - s.left, width: h, height: l})
    }}), t.ui.plugin.add("resizable", "alsoResize", {start: function () {
        var e = t(this).data("ui-resizable"), i = e.options, s = function (e) {
            t(e).each(function () {
                var e = t(this);
                e.data("ui-resizable-alsoresize", {width: parseInt(e.width(), 10), height: parseInt(e.height(), 10), left: parseInt(e.css("left"), 10), top: parseInt(e.css("top"), 10)})
            })
        };
        "object" != typeof i.alsoResize || i.alsoResize.parentNode ? s(i.alsoResize) : i.alsoResize.length ? (i.alsoResize = i.alsoResize[0], s(i.alsoResize)) : t.each(i.alsoResize, function (t) {
            s(t)
        })
    }, resize: function (e, i) {
        var s = t(this).data("ui-resizable"), o = s.options, n = s.originalSize, r = s.originalPosition, a = {height: s.size.height - n.height || 0, width: s.size.width - n.width || 0, top: s.position.top - r.top || 0, left: s.position.left - r.left || 0}, h = function (e, s) {
            t(e).each(function () {
                var e = t(this), o = t(this).data("ui-resizable-alsoresize"), n = {}, r = s && s.length ? s : e.parents(i.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                t.each(r, function (t, e) {
                    var i = (o[e] || 0) + (a[e] || 0);
                    i && i >= 0 && (n[e] = i || null)
                }), e.css(n)
            })
        };
        "object" != typeof o.alsoResize || o.alsoResize.nodeType ? h(o.alsoResize) : t.each(o.alsoResize, function (t, e) {
            h(t, e)
        })
    }, stop: function () {
        t(this).removeData("resizable-alsoresize")
    }}), t.ui.plugin.add("resizable", "ghost", {start: function () {
        var e = t(this).data("ui-resizable"), i = e.options, s = e.size;
        e.ghost = e.originalElement.clone(), e.ghost.css({opacity: .25, display: "block", position: "relative", height: s.height, width: s.width, margin: 0, left: 0, top: 0}).addClass("ui-resizable-ghost").addClass("string" == typeof i.ghost ? i.ghost : ""), e.ghost.appendTo(e.helper)
    }, resize: function () {
        var e = t(this).data("ui-resizable");
        e.ghost && e.ghost.css({position: "relative", height: e.size.height, width: e.size.width})
    }, stop: function () {
        var e = t(this).data("ui-resizable");
        e.ghost && e.helper && e.helper.get(0).removeChild(e.ghost.get(0))
    }}), t.ui.plugin.add("resizable", "grid", {resize: function () {
        var e = t(this).data("ui-resizable"), i = e.options, s = e.size, o = e.originalSize, n = e.originalPosition, r = e.axis, a = "number" == typeof i.grid ? [i.grid, i.grid] : i.grid, h = a[0] || 1, l = a[1] || 1, p = Math.round((s.width - o.width) / h) * h, c = Math.round((s.height - o.height) / l) * l, d = o.width + p, f = o.height + c, u = i.maxWidth && d > i.maxWidth, g = i.maxHeight && f > i.maxHeight, m = i.minWidth && i.minWidth > d, v = i.minHeight && i.minHeight > f;
        i.grid = a, m && (d += h), v && (f += l), u && (d -= h), g && (f -= l), /^(se|s|e)$/.test(r) ? (e.size.width = d, e.size.height = f) : /^(ne)$/.test(r) ? (e.size.width = d, e.size.height = f, e.position.top = n.top - c) : /^(sw)$/.test(r) ? (e.size.width = d, e.size.height = f, e.position.left = n.left - p) : (e.size.width = d, e.size.height = f, e.position.top = n.top - c, e.position.left = n.left - p)
    }})
})(jQuery);
(function (t) {
    function e(t, e, i) {
        return t > e && e + i > t
    }

    function i(t) {
        return/left|right/.test(t.css("float")) || /inline|table-cell/.test(t.css("display"))
    }

    t.widget("ui.sortable", t.ui.mouse, {version: "1.10.3", widgetEventPrefix: "sort", ready: !1, options: {appendTo: "parent", axis: !1, connectWith: !1, containment: !1, cursor: "auto", cursorAt: !1, dropOnEmpty: !0, forcePlaceholderSize: !1, forceHelperSize: !1, grid: !1, handle: !1, helper: "original", items: "> *", opacity: !1, placeholder: !1, revert: !1, scroll: !0, scrollSensitivity: 20, scrollSpeed: 20, scope: "default", tolerance: "intersect", zIndex: 1e3, activate: null, beforeStop: null, change: null, deactivate: null, out: null, over: null, receive: null, remove: null, sort: null, start: null, stop: null, update: null}, _create: function () {
        var t = this.options;
        this.containerCache = {}, this.element.addClass("ui-sortable"), this.refresh(), this.floating = this.items.length ? "x" === t.axis || i(this.items[0].item) : !1, this.offset = this.element.offset(), this._mouseInit(), this.ready = !0
    }, _destroy: function () {
        this.element.removeClass("ui-sortable ui-sortable-disabled"), this._mouseDestroy();
        for (var t = this.items.length - 1; t >= 0; t--)this.items[t].item.removeData(this.widgetName + "-item");
        return this
    }, _setOption: function (e, i) {
        "disabled" === e ? (this.options[e] = i, this.widget().toggleClass("ui-sortable-disabled", !!i)) : t.Widget.prototype._setOption.apply(this, arguments)
    }, _mouseCapture: function (e, i) {
        var s = null, n = !1, o = this;
        return this.reverting ? !1 : this.options.disabled || "static" === this.options.type ? !1 : (this._refreshItems(e), t(e.target).parents().each(function () {
            return t.data(this, o.widgetName + "-item") === o ? (s = t(this), !1) : undefined
        }), t.data(e.target, o.widgetName + "-item") === o && (s = t(e.target)), s ? !this.options.handle || i || (t(this.options.handle, s).find("*").addBack().each(function () {
            this === e.target && (n = !0)
        }), n) ? (this.currentItem = s, this._removeCurrentsFromItems(), !0) : !1 : !1)
    }, _mouseStart: function (e, i, s) {
        var n, o, r = this.options;
        if (this.currentContainer = this, this.refreshPositions(), this.helper = this._createHelper(e), this._cacheHelperProportions(), this._cacheMargins(), this.scrollParent = this.helper.scrollParent(), this.offset = this.currentItem.offset(), this.offset = {top: this.offset.top - this.margins.top, left: this.offset.left - this.margins.left}, t.extend(this.offset, {click: {left: e.pageX - this.offset.left, top: e.pageY - this.offset.top}, parent: this._getParentOffset(), relative: this._getRelativeOffset()}), this.helper.css("position", "absolute"), this.cssPosition = this.helper.css("position"), this.originalPosition = this._generatePosition(e), this.originalPageX = e.pageX, this.originalPageY = e.pageY, r.cursorAt && this._adjustOffsetFromHelper(r.cursorAt), this.domPosition = {prev: this.currentItem.prev()[0], parent: this.currentItem.parent()[0]}, this.helper[0] !== this.currentItem[0] && this.currentItem.hide(), this._createPlaceholder(), r.containment && this._setContainment(), r.cursor && "auto" !== r.cursor && (o = this.document.find("body"), this.storedCursor = o.css("cursor"), o.css("cursor", r.cursor), this.storedStylesheet = t("<style>*{ cursor: " + r.cursor + " !important; }</style>").appendTo(o)), r.opacity && (this.helper.css("opacity") && (this._storedOpacity = this.helper.css("opacity")), this.helper.css("opacity", r.opacity)), r.zIndex && (this.helper.css("zIndex") && (this._storedZIndex = this.helper.css("zIndex")), this.helper.css("zIndex", r.zIndex)), this.scrollParent[0] !== document && "HTML" !== this.scrollParent[0].tagName && (this.overflowOffset = this.scrollParent.offset()), this._trigger("start", e, this._uiHash()), this._preserveHelperProportions || this._cacheHelperProportions(), !s)for (n = this.containers.length - 1; n >= 0; n--)this.containers[n]._trigger("activate", e, this._uiHash(this));
        return t.ui.ddmanager && (t.ui.ddmanager.current = this), t.ui.ddmanager && !r.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this.dragging = !0, this.helper.addClass("ui-sortable-helper"), this._mouseDrag(e), !0
    }, _mouseDrag: function (e) {
        var i, s, n, o, r = this.options, a = !1;
        for (this.position = this._generatePosition(e), this.positionAbs = this._convertPositionTo("absolute"), this.lastPositionAbs || (this.lastPositionAbs = this.positionAbs), this.options.scroll && (this.scrollParent[0] !== document && "HTML" !== this.scrollParent[0].tagName ? (this.overflowOffset.top + this.scrollParent[0].offsetHeight - e.pageY < r.scrollSensitivity ? this.scrollParent[0].scrollTop = a = this.scrollParent[0].scrollTop + r.scrollSpeed : e.pageY - this.overflowOffset.top < r.scrollSensitivity && (this.scrollParent[0].scrollTop = a = this.scrollParent[0].scrollTop - r.scrollSpeed), this.overflowOffset.left + this.scrollParent[0].offsetWidth - e.pageX < r.scrollSensitivity ? this.scrollParent[0].scrollLeft = a = this.scrollParent[0].scrollLeft + r.scrollSpeed : e.pageX - this.overflowOffset.left < r.scrollSensitivity && (this.scrollParent[0].scrollLeft = a = this.scrollParent[0].scrollLeft - r.scrollSpeed)) : (e.pageY - t(document).scrollTop() < r.scrollSensitivity ? a = t(document).scrollTop(t(document).scrollTop() - r.scrollSpeed) : t(window).height() - (e.pageY - t(document).scrollTop()) < r.scrollSensitivity && (a = t(document).scrollTop(t(document).scrollTop() + r.scrollSpeed)), e.pageX - t(document).scrollLeft() < r.scrollSensitivity ? a = t(document).scrollLeft(t(document).scrollLeft() - r.scrollSpeed) : t(window).width() - (e.pageX - t(document).scrollLeft()) < r.scrollSensitivity && (a = t(document).scrollLeft(t(document).scrollLeft() + r.scrollSpeed))), a !== !1 && t.ui.ddmanager && !r.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e)), this.positionAbs = this._convertPositionTo("absolute"), this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), i = this.items.length - 1; i >= 0; i--)if (s = this.items[i], n = s.item[0], o = this._intersectsWithPointer(s), o && s.instance === this.currentContainer && n !== this.currentItem[0] && this.placeholder[1 === o ? "next" : "prev"]()[0] !== n && !t.contains(this.placeholder[0], n) && ("semi-dynamic" === this.options.type ? !t.contains(this.element[0], n) : !0)) {
            if (this.direction = 1 === o ? "down" : "up", "pointer" !== this.options.tolerance && !this._intersectsWithSides(s))break;
            this._rearrange(e, s), this._trigger("change", e, this._uiHash());
            break
        }
        return this._contactContainers(e), t.ui.ddmanager && t.ui.ddmanager.drag(this, e), this._trigger("sort", e, this._uiHash()), this.lastPositionAbs = this.positionAbs, !1
    }, _mouseStop: function (e, i) {
        if (e) {
            if (t.ui.ddmanager && !this.options.dropBehaviour && t.ui.ddmanager.drop(this, e), this.options.revert) {
                var s = this, n = this.placeholder.offset(), o = this.options.axis, r = {};
                o && "x" !== o || (r.left = n.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollLeft)), o && "y" !== o || (r.top = n.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollTop)), this.reverting = !0, t(this.helper).animate(r, parseInt(this.options.revert, 10) || 500, function () {
                    s._clear(e)
                })
            } else this._clear(e, i);
            return!1
        }
    }, cancel: function () {
        if (this.dragging) {
            this._mouseUp({target: null}), "original" === this.options.helper ? this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper") : this.currentItem.show();
            for (var e = this.containers.length - 1; e >= 0; e--)this.containers[e]._trigger("deactivate", null, this._uiHash(this)), this.containers[e].containerCache.over && (this.containers[e]._trigger("out", null, this._uiHash(this)), this.containers[e].containerCache.over = 0)
        }
        return this.placeholder && (this.placeholder[0].parentNode && this.placeholder[0].parentNode.removeChild(this.placeholder[0]), "original" !== this.options.helper && this.helper && this.helper[0].parentNode && this.helper.remove(), t.extend(this, {helper: null, dragging: !1, reverting: !1, _noFinalSort: null}), this.domPosition.prev ? t(this.domPosition.prev).after(this.currentItem) : t(this.domPosition.parent).prepend(this.currentItem)), this
    }, serialize: function (e) {
        var i = this._getItemsAsjQuery(e && e.connected), s = [];
        return e = e || {}, t(i).each(function () {
            var i = (t(e.item || this).attr(e.attribute || "id") || "").match(e.expression || /(.+)[\-=_](.+)/);
            i && s.push((e.key || i[1] + "[]") + "=" + (e.key && e.expression ? i[1] : i[2]))
        }), !s.length && e.key && s.push(e.key + "="), s.join("&")
    }, toArray: function (e) {
        var i = this._getItemsAsjQuery(e && e.connected), s = [];
        return e = e || {}, i.each(function () {
            s.push(t(e.item || this).attr(e.attribute || "id") || "")
        }), s
    }, _intersectsWith: function (t) {
        var e = this.positionAbs.left, i = e + this.helperProportions.width, s = this.positionAbs.top, n = s + this.helperProportions.height, o = t.left, r = o + t.width, a = t.top, h = a + t.height, l = this.offset.click.top, c = this.offset.click.left, p = "x" === this.options.axis || s + l > a && h > s + l, u = "y" === this.options.axis || e + c > o && r > e + c, f = p && u;
        return"pointer" === this.options.tolerance || this.options.forcePointerForContainers || "pointer" !== this.options.tolerance && this.helperProportions[this.floating ? "width" : "height"] > t[this.floating ? "width" : "height"] ? f : e + this.helperProportions.width / 2 > o && r > i - this.helperProportions.width / 2 && s + this.helperProportions.height / 2 > a && h > n - this.helperProportions.height / 2
    }, _intersectsWithPointer: function (t) {
        var i = "x" === this.options.axis || e(this.positionAbs.top + this.offset.click.top, t.top, t.height), s = "y" === this.options.axis || e(this.positionAbs.left + this.offset.click.left, t.left, t.width), n = i && s, o = this._getDragVerticalDirection(), r = this._getDragHorizontalDirection();
        return n ? this.floating ? r && "right" === r || "down" === o ? 2 : 1 : o && ("down" === o ? 2 : 1) : !1
    }, _intersectsWithSides: function (t) {
        var i = e(this.positionAbs.top + this.offset.click.top, t.top + t.height / 2, t.height), s = e(this.positionAbs.left + this.offset.click.left, t.left + t.width / 2, t.width), n = this._getDragVerticalDirection(), o = this._getDragHorizontalDirection();
        return this.floating && o ? "right" === o && s || "left" === o && !s : n && ("down" === n && i || "up" === n && !i)
    }, _getDragVerticalDirection: function () {
        var t = this.positionAbs.top - this.lastPositionAbs.top;
        return 0 !== t && (t > 0 ? "down" : "up")
    }, _getDragHorizontalDirection: function () {
        var t = this.positionAbs.left - this.lastPositionAbs.left;
        return 0 !== t && (t > 0 ? "right" : "left")
    }, refresh: function (t) {
        return this._refreshItems(t), this.refreshPositions(), this
    }, _connectWith: function () {
        var t = this.options;
        return t.connectWith.constructor === String ? [t.connectWith] : t.connectWith
    }, _getItemsAsjQuery: function (e) {
        var i, s, n, o, r = [], a = [], h = this._connectWith();
        if (h && e)for (i = h.length - 1; i >= 0; i--)for (n = t(h[i]), s = n.length - 1; s >= 0; s--)o = t.data(n[s], this.widgetFullName), o && o !== this && !o.options.disabled && a.push([t.isFunction(o.options.items) ? o.options.items.call(o.element) : t(o.options.items, o.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), o]);
        for (a.push([t.isFunction(this.options.items) ? this.options.items.call(this.element, null, {options: this.options, item: this.currentItem}) : t(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]), i = a.length - 1; i >= 0; i--)a[i][0].each(function () {
            r.push(this)
        });
        return t(r)
    }, _removeCurrentsFromItems: function () {
        var e = this.currentItem.find(":data(" + this.widgetName + "-item)");
        this.items = t.grep(this.items, function (t) {
            for (var i = 0; e.length > i; i++)if (e[i] === t.item[0])return!1;
            return!0
        })
    }, _refreshItems: function (e) {
        this.items = [], this.containers = [this];
        var i, s, n, o, r, a, h, l, c = this.items, p = [
            [t.isFunction(this.options.items) ? this.options.items.call(this.element[0], e, {item: this.currentItem}) : t(this.options.items, this.element), this]
        ], u = this._connectWith();
        if (u && this.ready)for (i = u.length - 1; i >= 0; i--)for (n = t(u[i]), s = n.length - 1; s >= 0; s--)o = t.data(n[s], this.widgetFullName), o && o !== this && !o.options.disabled && (p.push([t.isFunction(o.options.items) ? o.options.items.call(o.element[0], e, {item: this.currentItem}) : t(o.options.items, o.element), o]), this.containers.push(o));
        for (i = p.length - 1; i >= 0; i--)for (r = p[i][1], a = p[i][0], s = 0, l = a.length; l > s; s++)h = t(a[s]), h.data(this.widgetName + "-item", r), c.push({item: h, instance: r, width: 0, height: 0, left: 0, top: 0})
    }, refreshPositions: function (e) {
        this.offsetParent && this.helper && (this.offset.parent = this._getParentOffset());
        var i, s, n, o;
        for (i = this.items.length - 1; i >= 0; i--)s = this.items[i], s.instance !== this.currentContainer && this.currentContainer && s.item[0] !== this.currentItem[0] || (n = this.options.toleranceElement ? t(this.options.toleranceElement, s.item) : s.item, e || (s.width = n.outerWidth(), s.height = n.outerHeight()), o = n.offset(), s.left = o.left, s.top = o.top);
        if (this.options.custom && this.options.custom.refreshContainers)this.options.custom.refreshContainers.call(this); else for (i = this.containers.length - 1; i >= 0; i--)o = this.containers[i].element.offset(), this.containers[i].containerCache.left = o.left, this.containers[i].containerCache.top = o.top, this.containers[i].containerCache.width = this.containers[i].element.outerWidth(), this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
        return this
    }, _createPlaceholder: function (e) {
        e = e || this;
        var i, s = e.options;
        s.placeholder && s.placeholder.constructor !== String || (i = s.placeholder, s.placeholder = {element: function () {
            var s = e.currentItem[0].nodeName.toLowerCase(), n = t("<" + s + ">", e.document[0]).addClass(i || e.currentItem[0].className + " ui-sortable-placeholder").removeClass("ui-sortable-helper");
            return"tr" === s ? e.currentItem.children().each(function () {
                t("<td>&#160;</td>", e.document[0]).attr("colspan", t(this).attr("colspan") || 1).appendTo(n)
            }) : "img" === s && n.attr("src", e.currentItem.attr("src")), i || n.css("visibility", "hidden"), n
        }, update: function (t, n) {
            (!i || s.forcePlaceholderSize) && (n.height() || n.height(e.currentItem.innerHeight() - parseInt(e.currentItem.css("paddingTop") || 0, 10) - parseInt(e.currentItem.css("paddingBottom") || 0, 10)), n.width() || n.width(e.currentItem.innerWidth() - parseInt(e.currentItem.css("paddingLeft") || 0, 10) - parseInt(e.currentItem.css("paddingRight") || 0, 10)))
        }}), e.placeholder = t(s.placeholder.element.call(e.element, e.currentItem)), e.currentItem.after(e.placeholder), s.placeholder.update(e, e.placeholder)
    }, _contactContainers: function (s) {
        var n, o, r, a, h, l, c, p, u, f, d = null, g = null;
        for (n = this.containers.length - 1; n >= 0; n--)if (!t.contains(this.currentItem[0], this.containers[n].element[0]))if (this._intersectsWith(this.containers[n].containerCache)) {
            if (d && t.contains(this.containers[n].element[0], d.element[0]))continue;
            d = this.containers[n], g = n
        } else this.containers[n].containerCache.over && (this.containers[n]._trigger("out", s, this._uiHash(this)), this.containers[n].containerCache.over = 0);
        if (d)if (1 === this.containers.length)this.containers[g].containerCache.over || (this.containers[g]._trigger("over", s, this._uiHash(this)), this.containers[g].containerCache.over = 1); else {
            for (r = 1e4, a = null, f = d.floating || i(this.currentItem), h = f ? "left" : "top", l = f ? "width" : "height", c = this.positionAbs[h] + this.offset.click[h], o = this.items.length - 1; o >= 0; o--)t.contains(this.containers[g].element[0], this.items[o].item[0]) && this.items[o].item[0] !== this.currentItem[0] && (!f || e(this.positionAbs.top + this.offset.click.top, this.items[o].top, this.items[o].height)) && (p = this.items[o].item.offset()[h], u = !1, Math.abs(p - c) > Math.abs(p + this.items[o][l] - c) && (u = !0, p += this.items[o][l]), r > Math.abs(p - c) && (r = Math.abs(p - c), a = this.items[o], this.direction = u ? "up" : "down"));
            if (!a && !this.options.dropOnEmpty)return;
            if (this.currentContainer === this.containers[g])return;
            a ? this._rearrange(s, a, null, !0) : this._rearrange(s, null, this.containers[g].element, !0), this._trigger("change", s, this._uiHash()), this.containers[g]._trigger("change", s, this._uiHash(this)), this.currentContainer = this.containers[g], this.options.placeholder.update(this.currentContainer, this.placeholder), this.containers[g]._trigger("over", s, this._uiHash(this)), this.containers[g].containerCache.over = 1
        }
    }, _createHelper: function (e) {
        var i = this.options, s = t.isFunction(i.helper) ? t(i.helper.apply(this.element[0], [e, this.currentItem])) : "clone" === i.helper ? this.currentItem.clone() : this.currentItem;
        return s.parents("body").length || t("parent" !== i.appendTo ? i.appendTo : this.currentItem[0].parentNode)[0].appendChild(s[0]), s[0] === this.currentItem[0] && (this._storedCSS = {width: this.currentItem[0].style.width, height: this.currentItem[0].style.height, position: this.currentItem.css("position"), top: this.currentItem.css("top"), left: this.currentItem.css("left")}), (!s[0].style.width || i.forceHelperSize) && s.width(this.currentItem.width()), (!s[0].style.height || i.forceHelperSize) && s.height(this.currentItem.height()), s
    }, _adjustOffsetFromHelper: function (e) {
        "string" == typeof e && (e = e.split(" ")), t.isArray(e) && (e = {left: +e[0], top: +e[1] || 0}), "left"in e && (this.offset.click.left = e.left + this.margins.left), "right"in e && (this.offset.click.left = this.helperProportions.width - e.right + this.margins.left), "top"in e && (this.offset.click.top = e.top + this.margins.top), "bottom"in e && (this.offset.click.top = this.helperProportions.height - e.bottom + this.margins.top)
    }, _getParentOffset: function () {
        this.offsetParent = this.helper.offsetParent();
        var e = this.offsetParent.offset();
        return"absolute" === this.cssPosition && this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === document.body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && t.ui.ie) && (e = {top: 0, left: 0}), {top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0), left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)}
    }, _getRelativeOffset: function () {
        if ("relative" === this.cssPosition) {
            var t = this.currentItem.position();
            return{top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(), left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()}
        }
        return{top: 0, left: 0}
    }, _cacheMargins: function () {
        this.margins = {left: parseInt(this.currentItem.css("marginLeft"), 10) || 0, top: parseInt(this.currentItem.css("marginTop"), 10) || 0}
    }, _cacheHelperProportions: function () {
        this.helperProportions = {width: this.helper.outerWidth(), height: this.helper.outerHeight()}
    }, _setContainment: function () {
        var e, i, s, n = this.options;
        "parent" === n.containment && (n.containment = this.helper[0].parentNode), ("document" === n.containment || "window" === n.containment) && (this.containment = [0 - this.offset.relative.left - this.offset.parent.left, 0 - this.offset.relative.top - this.offset.parent.top, t("document" === n.containment ? document : window).width() - this.helperProportions.width - this.margins.left, (t("document" === n.containment ? document : window).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]), /^(document|window|parent)$/.test(n.containment) || (e = t(n.containment)[0], i = t(n.containment).offset(), s = "hidden" !== t(e).css("overflow"), this.containment = [i.left + (parseInt(t(e).css("borderLeftWidth"), 10) || 0) + (parseInt(t(e).css("paddingLeft"), 10) || 0) - this.margins.left, i.top + (parseInt(t(e).css("borderTopWidth"), 10) || 0) + (parseInt(t(e).css("paddingTop"), 10) || 0) - this.margins.top, i.left + (s ? Math.max(e.scrollWidth, e.offsetWidth) : e.offsetWidth) - (parseInt(t(e).css("borderLeftWidth"), 10) || 0) - (parseInt(t(e).css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left, i.top + (s ? Math.max(e.scrollHeight, e.offsetHeight) : e.offsetHeight) - (parseInt(t(e).css("borderTopWidth"), 10) || 0) - (parseInt(t(e).css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top])
    }, _convertPositionTo: function (e, i) {
        i || (i = this.position);
        var s = "absolute" === e ? 1 : -1, n = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent, o = /(html|body)/i.test(n[0].tagName);
        return{top: i.top + this.offset.relative.top * s + this.offset.parent.top * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : o ? 0 : n.scrollTop()) * s, left: i.left + this.offset.relative.left * s + this.offset.parent.left * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : o ? 0 : n.scrollLeft()) * s}
    }, _generatePosition: function (e) {
        var i, s, n = this.options, o = e.pageX, r = e.pageY, a = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent, h = /(html|body)/i.test(a[0].tagName);
        return"relative" !== this.cssPosition || this.scrollParent[0] !== document && this.scrollParent[0] !== this.offsetParent[0] || (this.offset.relative = this._getRelativeOffset()), this.originalPosition && (this.containment && (e.pageX - this.offset.click.left < this.containment[0] && (o = this.containment[0] + this.offset.click.left), e.pageY - this.offset.click.top < this.containment[1] && (r = this.containment[1] + this.offset.click.top), e.pageX - this.offset.click.left > this.containment[2] && (o = this.containment[2] + this.offset.click.left), e.pageY - this.offset.click.top > this.containment[3] && (r = this.containment[3] + this.offset.click.top)), n.grid && (i = this.originalPageY + Math.round((r - this.originalPageY) / n.grid[1]) * n.grid[1], r = this.containment ? i - this.offset.click.top >= this.containment[1] && i - this.offset.click.top <= this.containment[3] ? i : i - this.offset.click.top >= this.containment[1] ? i - n.grid[1] : i + n.grid[1] : i, s = this.originalPageX + Math.round((o - this.originalPageX) / n.grid[0]) * n.grid[0], o = this.containment ? s - this.offset.click.left >= this.containment[0] && s - this.offset.click.left <= this.containment[2] ? s : s - this.offset.click.left >= this.containment[0] ? s - n.grid[0] : s + n.grid[0] : s)), {top: r - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : h ? 0 : a.scrollTop()), left: o - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : h ? 0 : a.scrollLeft())}
    }, _rearrange: function (t, e, i, s) {
        i ? i[0].appendChild(this.placeholder[0]) : e.item[0].parentNode.insertBefore(this.placeholder[0], "down" === this.direction ? e.item[0] : e.item[0].nextSibling), this.counter = this.counter ? ++this.counter : 1;
        var n = this.counter;
        this._delay(function () {
            n === this.counter && this.refreshPositions(!s)
        })
    }, _clear: function (t, e) {
        this.reverting = !1;
        var i, s = [];
        if (!this._noFinalSort && this.currentItem.parent().length && this.placeholder.before(this.currentItem), this._noFinalSort = null, this.helper[0] === this.currentItem[0]) {
            for (i in this._storedCSS)("auto" === this._storedCSS[i] || "static" === this._storedCSS[i]) && (this._storedCSS[i] = "");
            this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")
        } else this.currentItem.show();
        for (this.fromOutside && !e && s.push(function (t) {
            this._trigger("receive", t, this._uiHash(this.fromOutside))
        }), !this.fromOutside && this.domPosition.prev === this.currentItem.prev().not(".ui-sortable-helper")[0] && this.domPosition.parent === this.currentItem.parent()[0] || e || s.push(function (t) {
            this._trigger("update", t, this._uiHash())
        }), this !== this.currentContainer && (e || (s.push(function (t) {
            this._trigger("remove", t, this._uiHash())
        }), s.push(function (t) {
            return function (e) {
                t._trigger("receive", e, this._uiHash(this))
            }
        }.call(this, this.currentContainer)), s.push(function (t) {
            return function (e) {
                t._trigger("update", e, this._uiHash(this))
            }
        }.call(this, this.currentContainer)))), i = this.containers.length - 1; i >= 0; i--)e || s.push(function (t) {
            return function (e) {
                t._trigger("deactivate", e, this._uiHash(this))
            }
        }.call(this, this.containers[i])), this.containers[i].containerCache.over && (s.push(function (t) {
            return function (e) {
                t._trigger("out", e, this._uiHash(this))
            }
        }.call(this, this.containers[i])), this.containers[i].containerCache.over = 0);
        if (this.storedCursor && (this.document.find("body").css("cursor", this.storedCursor), this.storedStylesheet.remove()), this._storedOpacity && this.helper.css("opacity", this._storedOpacity), this._storedZIndex && this.helper.css("zIndex", "auto" === this._storedZIndex ? "" : this._storedZIndex), this.dragging = !1, this.cancelHelperRemoval) {
            if (!e) {
                for (this._trigger("beforeStop", t, this._uiHash()), i = 0; s.length > i; i++)s[i].call(this, t);
                this._trigger("stop", t, this._uiHash())
            }
            return this.fromOutside = !1, !1
        }
        if (e || this._trigger("beforeStop", t, this._uiHash()), this.placeholder[0].parentNode.removeChild(this.placeholder[0]), this.helper[0] !== this.currentItem[0] && this.helper.remove(), this.helper = null, !e) {
            for (i = 0; s.length > i; i++)s[i].call(this, t);
            this._trigger("stop", t, this._uiHash())
        }
        return this.fromOutside = !1, !0
    }, _trigger: function () {
        t.Widget.prototype._trigger.apply(this, arguments) === !1 && this.cancel()
    }, _uiHash: function (e) {
        var i = e || this;
        return{helper: i.helper, placeholder: i.placeholder || t([]), position: i.position, originalPosition: i.originalPosition, offset: i.positionAbs, item: i.currentItem, sender: e ? e.element : null}
    }})
})(jQuery);