
var uaredirect = (function() {
	function setCookie(name, value) {
		document.cookie = name + "=" + escape(value) + ";expires=0"
	};

	function getCookie(name) {
		var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
		if (arr = document.cookie.match(reg)) return unescape(arr[2]);
		else return null
	};

	function getQueryString(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) {
			return unescape(r[2])
		};
		return null
	};

	function uaredirect(f) {
		try {
			if (document.getElementById("bdmark") != null) {
				return
			};
			var b = false;
			if (arguments[1]) {
				var e = window.location.host;
				var a = window.location.href;
				if (isSubdomain(arguments[1], e) == 1) {
					f = f + "/#m/" + a;
					b = true
				} else {
					if (isSubdomain(arguments[1], e) == 2) {
						f = f + "/#m/" + a;
						b = true
					} else {
						f = a;
						b = false
					}
				}
			} else {
				b = true
			};
			if (b) {
				var c = window.location.hash;
				if (!c.match("mobile")) {
					if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && "yes" != getCookie("from_mobile")) {
						location.replace(f)
					}
				} else {
					setCookie("from_mobile", "yes")
				}
			}
		} catch (d) {}
	};

	function isSubdomain(c, d) {
		this.getdomain = function(f) {
			var e = f.indexOf("://");
			if (e > 0) {
				var h = f.substr(e + 3)
			} else {
				var h = f
			};
			var g = /^www\./;
			if (g.test(h)) {
				h = h.substr(4)
			};
			return h
		};
		if (c == d) {
			return 1
		} else {
			var c = this.getdomain(c);
			var b = this.getdomain(d);
			if (c == b) {
				return 1
			} else {
				c = c.replace(".", "\\.");
				var a = new RegExp("\\." + c + "$");
				if (b.match(a)) {
					return 2
				} else {
					return 0
				}
			}
		}
	};
	return {
		init: function(url) {
			var s = getQueryString("site");
			if (s) {
				uaredirect(url)
			} else {
				uaredirect(url)
			}
		}
	}
})();

var a = window.location.href; 
a = a.substr(37);
var b = a.replace("\/","");



















