/**
 * jQuery Grid-A-Licious(tm) v3.01
 *
 * Terms of Use - jQuery Grid-A-Licious(tm)
 * under the MIT (http://www.opensource.org/licenses/mit-license.php) License.
 *
 * Copyright 2008-2012 Andreas Pihlström (Suprb). All rights reserved.
 * (http://suprb.com/apps/gridalicious/)
 *
 */

// Debouncing function from John Hann
// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
// Copy pasted from http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
(function (a, b) {
    var c = function (a, b, c) {
        var d;
        return function () {
            function h() {
                if (!c)a.apply(f, g);
                d = null
            }

            var f = this, g = arguments;
            if (d)clearTimeout(d); else if (c)a.apply(f, g);
            d = setTimeout(h, b || 150)
        }
    };
    jQuery.fn[b] = function (a) {
        return a ? this.bind("resize", c(a)) : this.trigger(b)
    }
})(jQuery, "smartresize");
(function (a) {
    a.Gal = function (b, c) {
        this.element = a(c);
        this._init(b)
    };
    a.Gal.settings = {selector: ".item", width: 225, gutter: 20, animate: false, animationOptions: {speed: 200, duration: 300, effect: "fadeInOnAppear", queue: true, complete: function () {
    }}};
    a.Gal.prototype = {_init: function (b) {
        var c = this;
        this.name = this._setName(5);
        this.gridArr = [];
        this.gridArrAppend = [];
        this.gridArrPrepend = [];
        this.setArr = false;
        this.setGrid = false;
        this.setOptions;
        this.cols = 0;
        this.itemCount = 0;
        this.prependCount = 0;
        this.isPrepending = false;
        this.appendCount = 0;
        this.resetCount = true;
        this.ifCallback = true;
        this.box = this.element;
        this.options = a.extend(true, {}, a.Gal.settings, b);
        this.gridArr = a.makeArray(this.box.find(this.options.selector));
        this.isResizing = false;
        this.w = 0;
        this.boxArr = [];
        this._setCols();
        this._renderGrid("append");
        a(this.box).addClass("gridalicious");
        a(window).smartresize(function () {
            c.resize()
        })
    }, _setName: function (a, b) {
        b = b ? b : "";
        return a ? this._setName(--a, "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz".charAt(Math.floor(Math.random() * 60)) + b) : b
    }, _setCols: function () {
        this.cols = Math.floor(this.box.width() / this.options.width);
        diff = (this.box.width() - this.cols * this.options.width - this.options.gutter) / this.cols;
        w = (this.options.width + diff) / this.box.width() * 100;
        this.w = w;
        for (var b = 0; b < this.cols; b++) {
            var c = a("<div></div>").addClass("galcolumn").attr("id", "item" + b + this.name).css({width: w + "%", paddingLeft: this.options.gutter, paddingBottom: this.options.gutter, "float": "left", "-webkit-box-sizing": "border-box", "-moz-box-sizing": "border-box", "-o-box-sizing": "border-box", "box-sizing": "border-box"});
            this.box.append(c)
        }
        this.box.find(a("#clear" + this.name)).remove();
        var d = a("<div></div>").css({clear: "both", height: "0", width: "0", display: "block"}).attr("id", "clear" + this.name);
        this.box.append(d)
    }, _renderGrid: function (b, c, d, e) {
        var f = [];
        var g = [];
        var h = [];
        var i = 0;
        var j = this.prependCount;
        var k = this.appendCount;
        var l = this.options.gutter;
        var m = this.cols;
        var n = this.name;
        var o = 0;
        var p = a(".galcolumn").width();
        if (c) {
            g = c;
            if (b == "append") {
                k += d;
                i = this.appendCount
            }
            if (b == "prepend") {
                this.isPrepending = true;
                i = Math.round(d % m);
                if (i <= 0)i = m
            }
            if (b == "renderAfterPrepend") {
                k += d;
                i = d
            }
        } else {
            g = this.gridArr;
            k = a(this.gridArr).size()
        }
        a.each(g, function (c, d) {
            var e = a(d);
            var g = "100%";
            if (e.hasClass("not-responsive")) {
                g = "auto"
            }
            e.css({marginBottom: l, zoom: "1", filter: "alpha(opacity=0)", opacity: "0"}).find("img, object, embed, iframe").css({width: g, height: "auto", display: "block", "margin-left": "auto", "margin-right": "auto"});
            if (b == "prepend") {
                i--;
                a("#item" + i + n).prepend(e);
                f.push(e);
                if (i == 0)i = m
            } else {
                a("#item" + i + n).append(e);
                f.push(e);
                i++;
                if (i >= m)i = 0;
                if (k >= m)k = k - m
            }
        });
        this.appendCount = k;
        this.itemCount = i;
        if (b == "append" || b == "prepend") {
            if (b == "prepend") {
                this._updateAfterPrepend(this.gridArr, g)
            }
            this._renderItem(f);
            this.isPrepending = false
        } else {
            this._renderItem(this.gridArr)
        }
    }, _collectItems: function () {
        var b = [];
        a(this.box).find(this.options.selector).each(function (c) {
            b.push(a(this))
        });
        return b
    }, _renderItem: function (b) {
        var c = this.options.animationOptions.speed;
        var d = this.options.animationOptions.effect;
        var e = this.options.animationOptions.duration;
        var f = this.options.animationOptions.queue;
        var g = this.options.animate;
        var h = this.options.animationOptions.complete;
        var i = 0;
        var j = 0;
        if (g === true && !this.isResizing) {
            if (f === true && d == "fadeInOnAppear") {
                if (this.isPrepending)b.reverse();
                a.each(b, function (d, f) {
                    setTimeout(function () {
                        a(f).animate({opacity: "1.0"}, e);
                        j++;
                        if (j == b.length) {
                            h.call(undefined, b)
                        }
                    }, i * c);
                    i++
                })
            } else if (f === false && d == "fadeInOnAppear") {
                if (this.isPrepending)b.reverse();
                a.each(b, function (c, d) {
                    a(d).animate({opacity: "1.0"}, e);
                    j++;
                    if (j == b.length) {
                        if (this.ifCallback) {
                            h.call(undefined, b)
                        }
                    }
                })
            }
            if (f === true && !d) {
                a.each(b, function (c, d) {
                    a(d).css({opacity: "1", filter: "alpha(opacity=1)"});
                    j++;
                    if (j == b.length) {
                        if (this.ifCallback) {
                            h.call(undefined, b)
                        }
                    }
                })
            }
        } else {
            a.each(b, function (b, c) {
                a(c).css({opacity: "1", filter: "alpha(opacity=1)"})
            });
            if (this.ifCallback) {
                h.call(b)
            }
        }
    }, _updateAfterPrepend: function (b, c) {
        var d = this.gridArr;
        a.each(c, function (a, b) {
            d.unshift(b)
        });
        this.gridArr = d
    }, resize: function () {
        this.box.find(a(".galcolumn")).remove();
        this._setCols();
        this.ifCallback = false;
        this.isResizing = true;
        this._renderGrid("append");
        this.ifCallback = true;
        this.isResizing = false
    }, append: function (b) {
        var c = this.gridArr;
        var d = this.gridArrPrepend;
        a.each(b, function (a, b) {
            c.push(b);
            d.push(b)
        });
        this._renderGrid("append", b, a(b).size())
    }, prepend: function (b) {
        this.ifCallback = false;
        this._renderGrid("prepend", b, a(b).size());
        this.ifCallback = true
    }};
    a.fn.gridalicious = function (b, c) {
        if (typeof b === "string") {
            this.each(function () {
                var d = a.data(this, "gridalicious");
                d[b].apply(d, [c])
            })
        } else {
            this.each(function () {
                a.data(this, "gridalicious", new a.Gal(b, this))
            })
        }
        return this
    }
})(jQuery)