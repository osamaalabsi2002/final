! function(t) {
    "use strict";
    t.fn.counterUp = function(e) {
        var n = t.extend({
            time: 400,
            delay: 10
        }, e);
        return this.each(function() {
            var e = t(this),
                r = n,
                o = function() {
                    var t = [],
                        n = r.time / r.delay,
                        o = e.text(),
                        i = /[0-9]+,[0-9]+/.test(o);
                    o = o.replace(/,/g, "");
                    for (var l = (/^[0-9]+$/.test(o), /^[0-9]+\.[0-9]+$/.test(o)), u = l ? (o.split(".")[1] || []).length : 0, s = n; s >= 1; s--) {
                        var a = parseInt(o / n * s);
                        if (l && (a = parseFloat(o / n * s).toFixed(u)), i)
                            for (;
                                /(\d+)(\d{3})/.test(a.toString());) a = a.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                        t.unshift(a)
                    }
                    e.data("counterup-nums", t), e.text("0");
                    var c = function() {
                        e.text(e.data("counterup-nums").shift()), e.data("counterup-nums").length ? setTimeout(e.data("counterup-func"), r.delay) : (delete e.data("counterup-nums"), e.data("counterup-nums", null), e.data("counterup-func", null))
                    };
                    e.data("counterup-func", c), setTimeout(e.data("counterup-func"), r.delay)
                };
            e.waypoint(o, {
                offset: "100%",
                triggerOnce: !0
            })
        })
    }
}(jQuery),
function() {
    var t = [].indexOf || function(t) {
            for (var e = 0, n = this.length; n > e; e++)
                if (e in this && this[e] === t) return e;
            return -1
        },
        e = [].slice;
    ! function(t, e) {
        return "function" == typeof define && define.amd ? define("waypoints", ["jquery"], function(n) {
            return e(n, t)
        }) : e(t.jQuery, t)
    }(this, function(n, r) {
        var o, i, l, u, s, a, c, f, d, h, p, v, y, g, m, w;
        return o = n(r), f = t.call(r, "ontouchstart") >= 0, u = {
            horizontal: {},
            vertical: {}
        }, s = 1, c = {}, a = "waypoints-context-id", p = "resize.waypoints", v = "scroll.waypoints", y = 1, g = "waypoints-waypoint-ids", m = "waypoint", w = "waypoints", i = function() {
            function t(t) {
                var e = this;
                this.$element = t, this.element = t[0], this.didResize = !1, this.didScroll = !1, this.id = "context" + s++, this.oldScroll = {
                    x: t.scrollLeft(),
                    y: t.scrollTop()
                }, this.waypoints = {
                    horizontal: {},
                    vertical: {}
                }, t.data(a, this.id), c[this.id] = this, t.bind(v, function() {
                    var t;
                    return e.didScroll || f ? void 0 : (e.didScroll = !0, t = function() {
                        return e.doScroll(), e.didScroll = !1
                    }, r.setTimeout(t, n[w].settings.scrollThrottle))
                }), t.bind(p, function() {
                    var t;
                    return e.didResize ? void 0 : (e.didResize = !0, t = function() {
                        return n[w]("refresh"), e.didResize = !1
                    }, r.setTimeout(t, n[w].settings.resizeThrottle))
                })
            }
            return t.prototype.doScroll = function() {
                var t, e = this;
                return t = {
                    horizontal: {
                        newScroll: this.$element.scrollLeft(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left"
                    },
                    vertical: {
                        newScroll: this.$element.scrollTop(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up"
                    }
                }, !f || t.vertical.oldScroll && t.vertical.newScroll || n[w]("refresh"), n.each(t, function(t, r) {
                    var o, i, l;
                    return l = [], i = r.newScroll > r.oldScroll, o = i ? r.forward : r.backward, n.each(e.waypoints[t], function(t, e) {
                        var n, o;
                        return r.oldScroll < (n = e.offset) && n <= r.newScroll ? l.push(e) : r.newScroll < (o = e.offset) && o <= r.oldScroll ? l.push(e) : void 0
                    }), l.sort(function(t, e) {
                        return t.offset - e.offset
                    }), i || l.reverse(), n.each(l, function(t, e) {
                        return e.options.continuous || t === l.length - 1 ? e.trigger([o]) : void 0
                    })
                }), this.oldScroll = {
                    x: t.horizontal.newScroll,
                    y: t.vertical.newScroll
                }
            }, t.prototype.refresh = function() {
                var t, e, r, o = this;
                return r = n.isWindow(this.element), e = this.$element.offset(), this.doScroll(), t = {
                    horizontal: {
                        contextOffset: r ? 0 : e.left,
                        contextScroll: r ? 0 : this.oldScroll.x,
                        contextDimension: this.$element.width(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                        offsetProp: "left"
                    },
                    vertical: {
                        contextOffset: r ? 0 : e.top,
                        contextScroll: r ? 0 : this.oldScroll.y,
                        contextDimension: r ? n[w]("viewportHeight") : this.$element.height(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                        offsetProp: "top"
                    }
                }, n.each(t, function(t, e) {
                    return n.each(o.waypoints[t], function(t, r) {
                        var o, i, l, u, s;
                        return o = r.options.offset, l = r.offset, i = n.isWindow(r.element) ? 0 : r.$element.offset()[e.offsetProp], n.isFunction(o) ? o = o.apply(r.element) : "string" == typeof o && (o = parseFloat(o), r.options.offset.indexOf("%") > -1 && (o = Math.ceil(e.contextDimension * o / 100))), r.offset = i - e.contextOffset + e.contextScroll - o, r.options.onlyOnScroll && null != l || !r.enabled ? void 0 : null !== l && l < (u = e.oldScroll) && u <= r.offset ? r.trigger([e.backward]) : null !== l && l > (s = e.oldScroll) && s >= r.offset ? r.trigger([e.forward]) : null === l && e.oldScroll >= r.offset ? r.trigger([e.forward]) : void 0
                    })
                })
            }, t.prototype.checkEmpty = function() {
                return n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical) ? (this.$element.unbind([p, v].join(" ")), delete c[this.id]) : void 0
            }, t
        }(), l = function() {
            function t(t, e, r) {
                var o, i;
                r = n.extend({}, n.fn[m].defaults, r), "bottom-in-view" === r.offset && (r.offset = function() {
                    var t;
                    return t = n[w]("viewportHeight"), n.isWindow(e.element) || (t = e.$element.height()), t - n(this).outerHeight()
                }), this.$element = t, this.element = t[0], this.axis = r.horizontal ? "horizontal" : "vertical", this.callback = r.handler, this.context = e, this.enabled = r.enabled, this.id = "waypoints" + y++, this.offset = null, this.options = r, e.waypoints[this.axis][this.id] = this, u[this.axis][this.id] = this, o = null != (i = t.data(g)) ? i : [], o.push(this.id), t.data(g, o)
            }
            return t.prototype.trigger = function(t) {
                return this.enabled ? (null != this.callback && this.callback.apply(this.element, t), this.options.triggerOnce ? this.destroy() : void 0) : void 0
            }, t.prototype.disable = function() {
                return this.enabled = !1
            }, t.prototype.enable = function() {
                return this.context.refresh(), this.enabled = !0
            }, t.prototype.destroy = function() {
                return delete u[this.axis][this.id], delete this.context.waypoints[this.axis][this.id], this.context.checkEmpty()
            }, t.getWaypointsByElement = function(t) {
                var e, r;
                return (r = n(t).data(g)) ? (e = n.extend({}, u.horizontal, u.vertical), n.map(r, function(t) {
                    return e[t]
                })) : []
            }, t
        }(), h = {
            init: function(t, e) {
                var r;
                return null == e && (e = {}), null == (r = e.handler) && (e.handler = t), this.each(function() {
                    var t, r, o, u;
                    return t = n(this), o = null != (u = e.context) ? u : n.fn[m].defaults.context, n.isWindow(o) || (o = t.closest(o)), o = n(o), r = c[o.data(a)], r || (r = new i(o)), new l(t, r, e)
                }), n[w]("refresh"), this
            },
            disable: function() {
                return h._invoke(this, "disable")
            },
            enable: function() {
                return h._invoke(this, "enable")
            },
            destroy: function() {
                return h._invoke(this, "destroy")
            },
            prev: function(t, e) {
                return h._traverse.call(this, t, e, function(t, e, n) {
                    return e > 0 ? t.push(n[e - 1]) : void 0
                })
            },
            next: function(t, e) {
                return h._traverse.call(this, t, e, function(t, e, n) {
                    return e < n.length - 1 ? t.push(n[e + 1]) : void 0
                })
            },
            _traverse: function(t, e, o) {
                var i, l;
                return null == t && (t = "vertical"), null == e && (e = r), l = d.aggregate(e), i = [], this.each(function() {
                    var e;
                    return e = n.inArray(this, l[t]), o(i, e, l[t])
                }), this.pushStack(i)
            },
            _invoke: function(t, e) {
                return t.each(function() {
                    var t;
                    return t = l.getWaypointsByElement(this), n.each(t, function(t, n) {
                        return n[e](), !0
                    })
                }), this
            }
        }, n.fn[m] = function() {
            var t, r;
            return r = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [], h[r] ? h[r].apply(this, t) : n.isFunction(r) ? h.init.apply(this, arguments) : n.isPlainObject(r) ? h.init.apply(this, [null, r]) : n.error(r ? "The " + r + " method does not exist in jQuery Waypoints." : "jQuery Waypoints needs a callback function or handler option.")
        }, n.fn[m].defaults = {
            context: r,
            continuous: !0,
            enabled: !0,
            horizontal: !1,
            offset: 0,
            triggerOnce: !1
        }, d = {
            refresh: function() {
                return n.each(c, function(t, e) {
                    return e.refresh()
                })
            },
            viewportHeight: function() {
                var t;
                return null != (t = r.innerHeight) ? t : o.height()
            },
            aggregate: function(t) {
                var e, r, o;
                return e = u, t && (e = null != (o = c[n(t).data(a)]) ? o.waypoints : void 0), e ? (r = {
                    horizontal: [],
                    vertical: []
                }, n.each(r, function(t, o) {
                    return n.each(e[t], function(t, e) {
                        return o.push(e)
                    }), o.sort(function(t, e) {
                        return t.offset - e.offset
                    }), r[t] = n.map(o, function(t) {
                        return t.element
                    }), r[t] = n.unique(r[t])
                }), r) : []
            },
            above: function(t) {
                return null == t && (t = r), d._filter(t, "vertical", function(t, e) {
                    return e.offset <= t.oldScroll.y
                })
            },
            below: function(t) {
                return null == t && (t = r), d._filter(t, "vertical", function(t, e) {
                    return e.offset > t.oldScroll.y
                })
            },
            left: function(t) {
                return null == t && (t = r), d._filter(t, "horizontal", function(t, e) {
                    return e.offset <= t.oldScroll.x
                })
            },
            right: function(t) {
                return null == t && (t = r), d._filter(t, "horizontal", function(t, e) {
                    return e.offset > t.oldScroll.x
                })
            },
            enable: function() {
                return d._invoke("enable")
            },
            disable: function() {
                return d._invoke("disable")
            },
            destroy: function() {
                return d._invoke("destroy")
            },
            extendFn: function(t, e) {
                return h[t] = e
            },
            _invoke: function(t) {
                var e;
                return e = n.extend({}, u.vertical, u.horizontal), n.each(e, function(e, n) {
                    return n[t](), !0
                })
            },
            _filter: function(t, e, r) {
                var o, i;
                return (o = c[n(t).data(a)]) ? (i = [], n.each(o.waypoints[e], function(t, e) {
                    return r(o, e) ? i.push(e) : void 0
                }), i.sort(function(t, e) {
                    return t.offset - e.offset
                }), n.map(i, function(t) {
                    return t.element
                })) : []
            }
        }, n[w] = function() {
            var t, n;
            return n = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [], d[n] ? d[n].apply(null, t) : d.aggregate.call(null, n)
        }, n[w].settings = {
            resizeThrottle: 100,
            scrollThrottle: 30
        }, o.load(function() {
            return n[w]("refresh")
        })
    })
}.call(this),
    function(t) {
        "use strict";
        t.fn.counterUp = function(e) {
            var n = t.extend({
                time: 400,
                delay: 10
            }, e);
            return this.each(function() {
                var e = t(this),
                    r = n,
                    o = function() {
                        var t = [],
                            n = r.time / r.delay,
                            o = e.text(),
                            i = /[0-9]+,[0-9]+/.test(o);
                        o = o.replace(/,/g, "");
                        for (var l = (/^[0-9]+$/.test(o), /^[0-9]+\.[0-9]+$/.test(o)), u = l ? (o.split(".")[1] || []).length : 0, s = n; s >= 1; s--) {
                            var a = parseInt(o / n * s);
                            if (l && (a = parseFloat(o / n * s).toFixed(u)), i)
                                for (;
                                    /(\d+)(\d{3})/.test(a.toString());) a = a.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                            t.unshift(a)
                        }
                        e.data("counterup-nums", t), e.text("0");
                        var c = function() {
                            e.text(e.data("counterup-nums").shift()), e.data("counterup-nums").length ? setTimeout(e.data("counterup-func"), r.delay) : (delete e.data("counterup-nums"), e.data("counterup-nums", null), e.data("counterup-func", null))
                        };
                        e.data("counterup-func", c), setTimeout(e.data("counterup-func"), r.delay)
                    };
                e.waypoint(o, {
                    offset: "100%",
                    triggerOnce: !0
                })
            })
        }
    }(jQuery);;;