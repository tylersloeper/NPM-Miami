if (typeof jQuery == 'undefined') {
  document.write('<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><\/script>');        
  } 
  else{
jQuery(document).ready(function(){var b=document.createElement("link");b.href="https://fonts.googleapis.com/css?family=Open+Sans";b.rel="stylesheet";document.getElementsByTagName("head")[0].appendChild(b)});setTimeout(nagish(),3E3);

function nagish() {
    jQuery(function() {
        var elem = document.getElementById('acc-toolbarWrap');
        if (elem) {
            //console.log('123' + elem);
            elem.parentNode.removeChild(elem)
        }
        if (getCookie('originalSize')) {
            //console.log(getCookie('originalSize'));
            jQuery('body').css("font-size", getCookie('newSize'))
        }
        if (getCookie('underLine')) {
            jQuery('a').css("text-decoration", getCookie('underLine'))
        }
        if (getCookie('negative')) {
            if (getCookie('negative') == '1') {
                jQuery('html').css("background-color", "#000000");
                jQuery('html').css("filter", "contrast(200%) brightness(150%)");
                jQuery('html').css("-webkit-filter", "contrast(200%) brightness(150%)");
                jQuery('html').css("-moz-filter", "contrast(200%) brightness(150%)")
            } else {
                jQuery('html').css("background-color", "#000000");
                jQuery('html').css("filter", "invert(0%)");
                jQuery('html').css("-webkit-filter", "invert(0%)");
                jQuery('html').css("-moz-filter", "invert(0%)")
            }
        }
		
		
        if (getCookie('negativewhite')) {
            if (getCookie('negativewhite') == '1') {
                jQuery('html, body *:not(img)').addClass("negativewhite");
				//jQuery('html, body *:not(img)').css("color", "#000000");
				console.log('1');
                //setCookie('negativewhite', '0', 1)
            } else {
                jQuery('html, body *:not(img)').removeClass("negativewhite");
				//jQuery('html, body *:not(img)').css("color", "#FFFFFF");
				console.log('2');
                //setCookie('negativewhite', '1', 1) 
            }
        }
        if (getCookie('gray')) {
            if (getCookie('gray') == '1') {
                jQuery('html').css("-webkit-filter", "grayscale(1)");
                jQuery('html').css("-webkit-filter", "grayscale(100%)");
                jQuery('html').css("filter", "gray");
                jQuery('html').css("filter", "grayscale(100%)")
            } else {
                jQuery('html').css("-webkit-filter", "grayscale(1)");
                jQuery('html').css("-webkit-filter", "grayscale(0%)");
                jQuery('html').css("filter", "");
                jQuery('html').css("filter", "grayscale(0%)")
            }
        }
        jQuery("#resetFont").bind("click", function() {
            //console.log('resetFont');
            jQuery('body').css("zoom", getCookie('originalSize'));
            jQuery('a').css("textDecoration", '');
            setCookie('originalSize', getCookie('originalSize'), -1);
            setCookie('underLine', getCookie('underLine'), -1)
        });
        jQuery("#resetColor").bind("click", function() {
            //console.log('resetColor');
            jQuery('html').css("background-color", "#ffffff");
            jQuery('html').css("filter", "invert(0%)");
            jQuery('html').css("-webkit-filter", "invert(0%)");
            jQuery('html').css("-moz-filter", "invert(0%)");
            jQuery('html').css("-webkit-filter", "grayscale(1)");
            jQuery('html').css("-webkit-filter", "grayscale(0%)");
            jQuery('html').css("filter", "");
            jQuery('html').css("filter", "grayscale(0%)");
            setCookie('negative', getCookie('negative'), -1);
            setCookie('gray', getCookie('gray'), -1)
        });
        jQuery("#reset").bind("click", function() {
            //console.log('reset');
            jQuery('html').css("background-color", "#ffffff");
            jQuery('html').css("filter", "invert(0%)");
            jQuery('html').css("-webkit-filter", "invert(0%)");
            jQuery('html').css("-moz-filter", "invert(0%)");
			jQuery('html, body *:not(img)').removeClass("negativewhite");
            jQuery('html').css("-webkit-filter", "grayscale(1)");
            jQuery('html').css("-webkit-filter", "grayscale(0%)");
            jQuery('html').css("filter", "");
            jQuery('html').css("filter", "grayscale(0%)");
            jQuery('body').css("zoom", getCookie('originalSize'));
            jQuery('a').css("text-decoration", '');
            setCookie('originalSize', getCookie('originalSize'), -1);
            setCookie('underLine', getCookie('underLine'), -1);
            setCookie('negative', getCookie('negative'), -1);
            setCookie('gray', getCookie('gray'), -1);
            setCookie('negativeclasswhite', getCookie('negativeclasswhite'), -1);
			//console.log('asd');
        });
        jQuery("#plus").bind("click", function() {
            var size = parseFloat(jQuery('body').css("zoom"));
            if (!getCookie('originalSize')) {
                setCookie('originalSize', size, 1)
            }
            var sizere = getCookie('originalSize');
            var maxsize = (sizere / 100) * 300;
            if (jQuery(this)) {
                if (size < maxsize) {
                    size = size + 0.1
                }
            }
            jQuery('body').css("zoom", size);
            setCookie('newSize', size, 1);
            //console.log(sizere);
            //console.log(size)
        });
        jQuery("#minus").bind("click", function() {
            var size = parseFloat(jQuery('body').css("zoom"));
            if (!getCookie('originalSize')) {
                setCookie('originalSize', size, 1)
            }
            var sizere = getCookie('originalSize');
            var maxsize = (sizere / 100) * 300;
            if (jQuery(this)) {
                if (size < maxsize) {
                    size = size - 0.1
                }
            }
            jQuery('body').css("zoom", size);
            setCookie('newSize', size, 1);
            //console.log(sizere);
            //console.log(size)
        });
        jQuery("#underline").click(function() {
            var trea = jQuery('#underline');
            if (jQuery(trea).css('text-decoration-line') === 'underline') {
                jQuery('a').css('text-decoration', 'none');
                setCookie('underLine', 'none', 1)
            } else {
                jQuery('a').css('text-decoration', 'underline');
                setCookie('underLine', 'underline', 1)
            }
        });
        jQuery('#negativeclass').bind("click", function() {
            var back = jQuery('html').css("background-color");
            if (back === 'rgba(0, 0, 0, 0)' || back === 'rgb(255, 255, 255)') {
                jQuery('html').css("-webkit-filter", "grayscale(1)");
                jQuery('html').css("-webkit-filter", "grayscale(0%)");
                jQuery('html').css("filter", "");
                jQuery('html').css("filter", "grayscale(0%)");
                jQuery('html').css("background-color", "#000000");
                jQuery('html').css("filter", "invert(100%)");
                jQuery('html').css("-webkit-filter", "invert(100%)");
                jQuery('html').css("-moz-filter", "invert(100%)");
                setCookie('negative', '1', 1)
            } else {
                jQuery('html').css("background-color", "#ffffff");
                jQuery('html').css("filter", "invert(0%)");
                jQuery('html').css("-webkit-filter", "invert(0%)");
                jQuery('html').css("-moz-filter", "invert(0%)");
                setCookie('negative', '0', 1)
            }
        });
		jQuery('#negativeclasswhite').bind("click", function() {
			//console.log('123');
			
			
            var back = jQuery('html').hasClass("negativewhite");
			console.log(back);
            if (back == false) {
                
				jQuery('html, body *:not(img)').addClass("negativewhite");
				//jQuery('html, body *:not(img)').css("color", "#000000");
				console.log('3');
                setCookie('negativewhite', '1', 1)
				
            } else if (back == true) { 
                
				jQuery('html, body *:not(img)').removeClass("negativewhite");
				//jQuery('html, body *:not(img)').css("color", "");
				console.log('4');
                setCookie('negativewhite', '0', 1)
            }
        });
        jQuery('#grayclass').bind("click", function() {
            var back = jQuery('html').css("filter");
            //console.log(back);
            if (back === 'none' || back === 'grayscale(0)' || back === 'invert(1)') {
                jQuery('html').css("background-color", "#ffffff");
                jQuery('html').css("filter", "invert(0%)");
                jQuery('html').css("-webkit-filter", "invert(0%)");
                jQuery('html').css("-moz-filter", "invert(0%)");
                jQuery('html').css("-webkit-filter", "grayscale(1)");
                jQuery('html').css("-webkit-filter", "grayscale(100%)");
                jQuery('html').css("filter", "gray");
                jQuery('html').css("filter", "grayscale(100%)");
                setCookie('gray', '1', 1)
            } else {
                jQuery('html').css("-webkit-filter", "grayscale(1)");
                jQuery('html').css("-webkit-filter", "grayscale(0%)");
                jQuery('html').css("filter", "");
                jQuery('html').css("filter", "grayscale(0%)");
                setCookie('gray', '0', 1)
            }
        })
    }) 
}
 
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length)
        }
    }
    return ""
}
//document.write('<button class="accordion"></button><div class="panelShay"><div class="nagishrow"><div class="nagishrow3"><span>לינקים</span><ul class="ullinagish"><li class="und8"><a id="underline" href="javascript:void(0)">קו מתחת ללינקים</a></li><li class="und9"><a id="reset" href="javascript:void(0)">שחזר הכל</a></li></ul></div><div class="nagishrow3"><span>צבעוניות</span>	<ul class="ullinagish"><li class="und6"><a id="negativeclass" href="javascript:void(0)">הפוך צבעים</a></li><li class="und5"><a id="grayclass" href="javascript:void(0)">שחור לבן</a></li><li class="und9"><a id="resetColor" href="javascript:void(0)">שחזר צבעים</a></li></ul></div>	<div class="nagishrow3"><span>גודל הגופן</span><ul class="ullinagish"><li class="und2"><a id="plus" href="javascript:void(0)">הגדל טקסט</a></li><li class="und1"><a id="minus" href="javascript:void(0)">הקטן טקסט</a></li><li class="und9"><a id="resetFont" href="javascript:void(0)">שחזר את גודל הגופן</a></li></ul></div></div><a href="javascript:void(0)" style="float:right;" onclick="f1()">X סגור</a></div>');
//document.writeln('<script> function f1() { var crl = document.getElementsByClassName("active"); jQuery(".panelShay").css("max-height","0px"); } var acc = document.getElementsByClassName("accordion"); var i; acc[0].onclick = function() { 	this.classList.toggle("active"); var panelShay = this.nextElementSibling; if (panelShay.style.maxHeight){ panelShay.style.maxHeight = null; acc[0].style.marginRight = null; } else { panelShay.style.maxHeight = panelShay.scrollHeight + "px";   acc[0].style.marginRight  = panelShay.scrollHeight  + "px"; } }  </script>');
  }


