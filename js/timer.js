(function () {
    var _id = "timer_block";
    while (document.getElementById("timer" + _id))_id = _id + "0";
    document.write("<div id='timer" + _id + "' style='min-width:407px;height:60px;'></div>");
    var _t = document.createElement("script");
    _t.src = "http://megatimer.ru/timer/timer.min.js";
    var _f = function (_k) {
        var l = new MegaTimer(_id, {
            "view": [1, 1, 1, 1],
            "type": {"currentType": "1", "params": {"usertime": true, "tz": "3", "utc": 1472688000000}},
            "design": {
                "type": "plate",
                "params": {
                    "round": "0",
                    "background": "opacity",
                    "effect": "slide",
                    "space": "0",
                    "separator-margin": "15",
                    "number-font-family": {
                        "family": "Helvetica-Bold",
                        "link": "<link rel='stylesheet' href='css/fonts.css'>"
                    },
                    "number-font-size": "50",
                    "number-font-color": "#284573",
                    "padding": "4",
                    "separator-on": true,
                    "separator-text": ":",
                    "text-on": false,
                    "text-font-family": {"family": "Arial"},
                    "text-font-size": "12",
                    "text-font-color": "red"
                }
            },
            "designId": 4,
            "theme": "white",
            "width": 407,
            "height": 60
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
