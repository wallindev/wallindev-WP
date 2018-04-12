<?php header("Content-Type: text/html; charset=utf-8"); ?>
window.attachEvent ? window.attachEvent("onload", go) : window.addEventListener("load", go, false);

function go() {
	f_d("nojs");

	t = f_c("div");
	f_a(document.body, t);

	a = f_c("id", "wrapper");
	f_s(t, a);

	t2 = f_c("Välkommen till JavaScript Include Test!");
	f_a(t, t2);
}

function f_c(k, v) {
	try {
		if (v != undefined) {
			tmp = document.createAttribute(k);
			tmp.value = v;
		} else {
			try {
				tmp = document.createElement(k);
			} catch(e) {
				tmp = document.createTextNode(k);
			}
		}
		return tmp;
	} catch(e) {
		f_err(e);
	}
}

function f_a(p, t) {
	p.appendChild(t);
}

function f_s(p, a) {
	p.setAttributeNode(a);
}

function f_d(id) {
	o = document.getElementById(id);
	o.style.visibility = "hidden";
	o.style.display = "none";
	try {
		arr = new array(2)
		document.write(arr[3]);
		o.remove();
	} catch(e) {
		f_err(e);
		try {
			document.body.removeChild(o);
		} catch(e) {
			f_err(e);
			try {
				o.parentNode.removeChild(o);
			} catch(e) {
				f_err(e);
			}
		}
	}
}

function f_err(e) {
	var msg = "An error occured in file '" + e.fileName + "' on line " + e.lineNumber + ", column " + e.columnNumber + ".\n\n";
	msg += "The error was of type <b>" + e.name + "</b> and the message was:\n\n" + e.message + "\n\n";
	msg += "Stack trace: \n" + e.stack;
	alert(msg);
}

