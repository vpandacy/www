// JavaScript Document
function request(jjurl) {
    var cs = jjurl.indexOf("?");
    if (cs != -1) {
        var srcjj = jjurl.substring(cs + 1);
        var patt = new RegExp('sid=[0-9]*');

        var sid = patt.exec(srcjj);
		
        if (sid) {
            sid = sid.toString();
            var referers = sid;
        }
    }

    return referers;
}
var htmlurlcs = document.URL;
var dangurl = document.location.href;
var a = htmlurlcs.indexOf("sid");
var b = dangurl.indexOf("sid");
if (b == -1) {
    var sid = request(htmlurlcs);
} else {
    var sid = request(dangurl);
}

if (sid && sid!="sid=") {
    change();
}
function change() {
    var links = [];
    links = document.getElementsByTagName('a');
    for (var i = 0; i < links.length; i++) {
        var tmp = links[i].getAttribute('href');
		if(tmp != null){
				var aurl = tmp.indexOf("tel:");
				var message = tmp.indexOf("#message");
				//alert(aurl);
				if(message != 0  && aurl != 0){
						var url = tmp.indexOf("?");
						if (tmp && tmp != "#") {
							if (url != -1) {
								links[i].setAttribute('href', tmp + '&' + sid);
							} else {
								links[i].setAttribute('href', tmp + '?' + sid);
							}
						   // document.write(i + "&nbsp;&nbsp;&nbsp;" + links[i] + "<br/>");
						}
				}
		}
    }
}