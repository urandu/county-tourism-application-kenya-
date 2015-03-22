/*
 * jquery.flot.tooltip
 * 
 * description: easy-to-use tooltips for Flot charts
 * version: 0.6.1
 * author: Krzysztof Urbas @krzysu [myviews.pl]
 * website: https://github.com/krzysu/flot.tooltip
 * 
 * build on 2013-07-10
 * released under MIT License, 2012
 */
(function (t) {
    var i = {tooltip: !1, tooltipOpts: {content: "%s | X: %x | Y: %y", xDateFormat: null, yDateFormat: null, shifts: {x: 10, y: 20}, defaultTheme: !0, onHover: function () {
    }}}, o = function (t) {
        this.tipPosition = {x: 0, y: 0}, this.init(t)
    };
    o.prototype.init = function (i) {
        var o = this;
        i.hooks.bindEvents.push(function (i, e) {
            if (o.plotOptions = i.getOptions(), o.plotOptions.tooltip !== !1 && void 0 !== o.plotOptions.tooltip) {
                o.tooltipOptions = o.plotOptions.tooltipOpts;
                var s = o.getDomElement();
                t(i.getPlaceholder()).bind("plothover", function (t, i, e) {
                    if (e) {
                        var n;
                        n = o.stringFormat(o.tooltipOptions.content, e), s.html(n), o.updateTooltipPosition({x: i.pageX, y: i.pageY}), s.css({left: o.tipPosition.x + o.tooltipOptions.shifts.x, top: o.tipPosition.y + o.tooltipOptions.shifts.y}).show(), "function" == typeof o.tooltipOptions.onHover && o.tooltipOptions.onHover(e, s)
                    } else s.hide().html("")
                }), e.mousemove(function (t) {
                    var i = {};
                    i.x = t.pageX, i.y = t.pageY, o.updateTooltipPosition(i)
                })
            }
        })
    }, o.prototype.getDomElement = function () {
        var i;
        return t("#flotTip").length > 0 ? i = t("#flotTip") : (i = t("<div />").attr("id", "flotTip"), i.appendTo("body").hide().css({position: "absolute"}), this.tooltipOptions.defaultTheme && i.css({background: "#fff", "z-index": "100", padding: "0.4em 0.6em", "border-radius": "0.5em", "font-size": "0.8em", border: "1px solid #111", display: "inline-block", "white-space": "nowrap"})), i
    }, o.prototype.updateTooltipPosition = function (i) {
        var o = t("#flotTip").outerWidth() + this.tooltipOptions.shifts.x, e = t("#flotTip").outerHeight() + this.tooltipOptions.shifts.y;
        i.x - t(window).scrollLeft() > t(window).innerWidth() - o && (i.x -= o), i.y - t(window).scrollTop() > t(window).innerHeight() - e && (i.y -= e), this.tipPosition.x = i.x, this.tipPosition.y = i.y
    }, o.prototype.stringFormat = function (t, i) {
        var o = /%p\.{0,1}(\d{0,})/, e = /%s/, s = /%x\.{0,1}(?:\d{0,})/, n = /%y\.{0,1}(?:\d{0,})/;
        return"function" == typeof t && (t = t(i.series.label, i.series.data[i.dataIndex][0], i.series.data[i.dataIndex][1])), i.series.percent !== void 0 && (t = this.adjustValPrecision(o, t, i.series.percent)), i.series.label !== void 0 && (t = t.replace(e, i.series.label)), this.isTimeMode("xaxis", i) && this.isXDateFormat(i) && (t = t.replace(s, this.timestampToDate(i.series.data[i.dataIndex][0], this.tooltipOptions.xDateFormat))), this.isTimeMode("yaxis", i) && this.isYDateFormat(i) && (t = t.replace(n, this.timestampToDate(i.series.data[i.dataIndex][1], this.tooltipOptions.yDateFormat))), "number" == typeof i.series.data[i.dataIndex][0] && (t = this.adjustValPrecision(s, t, i.series.data[i.dataIndex][0])), "number" == typeof i.series.data[i.dataIndex][1] && (t = this.adjustValPrecision(n, t, i.series.data[i.dataIndex][1])), i.series.xaxis.tickFormatter !== void 0 && (t = t.replace(s, i.series.xaxis.tickFormatter(i.series.data[i.dataIndex][0], i.series.xaxis))), i.series.yaxis.tickFormatter !== void 0 && (t = t.replace(n, i.series.yaxis.tickFormatter(i.series.data[i.dataIndex][1], i.series.yaxis))), t
    }, o.prototype.isTimeMode = function (t, i) {
        return i.series[t].options.mode !== void 0 && "time" === i.series[t].options.mode
    }, o.prototype.isXDateFormat = function () {
        return this.tooltipOptions.xDateFormat !== void 0 && null !== this.tooltipOptions.xDateFormat
    }, o.prototype.isYDateFormat = function () {
        return this.tooltipOptions.yDateFormat !== void 0 && null !== this.tooltipOptions.yDateFormat
    }, o.prototype.timestampToDate = function (i, o) {
        var e = new Date(i);
        return t.plot.formatDate(e, o)
    }, o.prototype.adjustValPrecision = function (t, i, o) {
        var e, s = i.match(t);
        return null !== s && "" !== RegExp.$1 && (e = RegExp.$1, o = o.toFixed(e), i = i.replace(t, o)), i
    };
    var e = function (t) {
        new o(t)
    };
    t.plot.plugins.push({init: e, options: i, name: "tooltip", version: "0.6.1"})
})(jQuery);