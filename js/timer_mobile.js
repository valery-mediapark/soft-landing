(function () {
	var _id = "e9a17f19ea408ffda42e2edaebffe531";
	while (document.getElementById("timer" + _id))_id = _id + "0";
	document.write("<div class='mobile_timers' id='timer" + _id + "'></div>");
	var _t = document.createElement("script");
	_t.src = "http://megatimer.ru/timer/timer.min.js";
	var _f = function (_k) {
		var l = new MegaTimer(_id, {
			"view": [1, 1, 1, 1],
			"type": {
				"currentType": "2",
				"params": {"startByFirst": true, "days": "30", "hours": "0", "minutes": "0", "utc": 0}
			},
			"design": {
				"type": "plate",
				"params": {
					"round": "0",
					"background": "opacity",
					"effect": "slide",
					"space": "0",
					"separator-margin": "3",
					"number-font-family": {
						"family": "Helvetica-Bold",
						"link": "<link rel='stylesheet' href='css/fonts.css'>"
					},
					"separator-on": true,
					"separator-text": ":"
				}
			}
		});
		if (_k != null)l.run();
	};
	_t.onload = _f;
	_t.onreadystatechange = function () {
			if (_t.readyState == "loaded")_f(1);
	};
	var _h = document.head || document.getElementsByTagName("head")[0];
	_h.appendChild(_t);
}).call(this);
