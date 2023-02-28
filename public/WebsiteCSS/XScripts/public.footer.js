

$(document).ready(function () {
    //alert('Hello word');
    var location = window.location.href;
    if (location.indexOf("?sspupdate") != -1) {
        ssplogin();
    }

    if (typeof (FB) == 'undefined') {
        var div = document.createElement('div');
        div.id = "fb-root";
        document.body.appendChild(div);

        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
            '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);

        window.fbAsyncInit = function () {
            FB.init({
                appId: '205231062833880',
                session: null, // don't refetch the session when PHP already has it
                status: true, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true // parse XFBML
            });
        }
        //FB.init({appId: '205231062833880', status: true, cookie: true, xfbml: true});
    }
});

function GATrackPlayTrailerHomePage(movie_name) {
    _gaq.push(['_setAccount', 'UA-559390-2']);
    _gaq.push(['_trackEvent', 'Homepage:Poster', 'play', movie_name]);
    _gaq.push(['_setAccount', 'UA-559390-1']);
    _gaq.push(['_trackEvent', 'Homepage:Poster', 'play', movie_name]);
    return true;
}

function GATrackPlayTrailerMovieDetail(movie_name) {
    _gaq.push(['_setAccount', 'UA-559390-2']);
    _gaq.push(['_trackEvent', 'MovieDetail:Trailer', 'play', movie_name]);
    _gaq.push(['_setAccount', 'UA-559390-1']);
    _gaq.push(['_trackEvent', 'MovieDetail:Trailer', 'play', movie_name]);
    return true;
}

function openid_request(s) {
    window.location.href = 'https://www.megastar.vn/openid.aspx?visLang=1&openid=' + s + '&r=' + urlencode(window.location.href);
    return false;
}

function fb_connect() {
    FB.login(
        function (response) {
            console.log(response);
            if (response.authResponse) {
                if (response.authResponse.userID) {
                    window.location.href = 'https://www.megastar.vn/openid.aspx?visLang=1&access_token=' + response.authResponse.accessToken + '&uid=' + response.authResponse.userID + '&r=' + urlencode(window.location.href);
                    return false;
                } else {
                    window.location.reload();
                    return false;
                }
            } else {
                window.location.reload();
                return false;
            }
        }, {
            scope: 'email,user_birthday,status_update,publish_stream',
            autologoutlink: 'true',
            api_key: '205231062833880'
        }
    );

    return false;
}

function urlencode(url) {
    if (!url || !url.length) return "";
    url = url.replace(/[\!]/g, "%21");
    url = url.replace(/[\*]/g, "%2A");
    url = url.replace(/[\']/g, "%27");
    url = url.replace(/[\(]/g, "%28");
    url = url.replace(/[\)]/g, "%29");
    url = url.replace(/[\;]/g, "%3B");
    url = url.replace(/[\:]/g, "%3A");
    url = url.replace(/[\@]/g, "%40");
    url = url.replace(/[\&]/g, "%26");
    url = url.replace(/[\=]/g, "%3D");
    //url = url.replace(/[\+]/g,"%2B");
    url = url.replace(/[\$]/g, "%24");
    url = url.replace(/[\,]/g, "%2C");
    url = url.replace(/[\/]/g, "%2F");
    url = url.replace(/[\?]/g, "%3F");
    //url = url.replace(/[\%]/g,"%25");
    url = url.replace(/[\#]/g, "%23");

    return url;
}

function change_lang(lang) {
    if (!lang) return;
    var current_location = window.location.href;
    if (current_location.indexOf("megastar.vn/picks") != -1) {
        current_location = current_location.replace("megastar.vn/picks", "megastar.vn/vn/picks");
    } else if (current_location.indexOf("megastar.vn/starclub") != -1) {
        current_location = current_location.replace("megastar.vn/starclub", "megastar.vn/visLtyHome.aspx?visLang=2");
    } else if (current_location.indexOf("megastar.vn/atmos") != -1) {
        current_location = current_location.replace("megastar.vn/atmos/", "megastar.vn/vn/atmos/");
        current_location = current_location.replace("megastar.vn/atmos", "megastar.vn/vn/atmos/");
    }

    if (current_location.indexOf("?v=") != -1) {
        if (current_location.indexOf("/1/") != -1) {
            current_location = current_location.replace("/1/", "/2/");
        } else {
            current_location = current_location.replace("/2/", "/1/");
        }
    }
    else if (current_location.indexOf(".aspx") != -1 && current_location.indexOf("visLang=") == -1) {
        if (current_location.indexOf("?") != -1) {
            current_location = current_location + "&visLang=2";
        } else {
            current_location = current_location + "?visLang=2";
        }
    } else if (current_location.indexOf("visLang=1") != -1) {
        current_location = current_location.replace("visLang=1", "visLang=2");
    } else if (current_location.indexOf("visLang=2") != -1) {
        current_location = current_location.replace("visLang=2", "visLang=1");
    } else if (current_location.indexOf("/vn") == -1 && current_location.indexOf("/en") == -1) {
        current_location += (lang + "/");
    } else {
        current_location = current_location.replace((lang == "vn" ? "/en" : "/vn"), ("/" + lang));
    }

    window.location.href = current_location;
    return false;
}

function shareURLSite(share_type) {
    if (!share_type) return;

    var url = "/msShareSite.aspx?shareby=" + share_type + "&&location_url=" + urlencode(window.location.href) + "&&visLang=1";

    window.open(url);
}

function openPopupFeedback(visLang) {
    jQuery.ajax({
        type: "GET",
        url: "/msFeedback.aspx?visLang=" + visLang,
        data: "",
        dataType: "html",
        success: function (html) {
            $.prompt(html, { submit: addFeedback, buttons: { OK: true } });
            $("#jqi").css("width", "620px");
        }
    });
}

function openPopupSharePaymentPage(visLang) {
    jQuery.ajax({
        type: "GET",
        url: "/msSharePaymentPage.aspx?visLang=" + visLang,
        data: "",
        dataType: "html",
        success: function (html) {

            $.prompt(html, {
                submit: sharePaymentPage, buttons: { OK: true }, loaded: function () {
                    $("#jqi").css("width", "550px");
                }
            });
        }
    });
}

function openPopupSharePage(visLang) {
    jQuery.ajax({
        type: "GET",
        url: "/msSharePage.aspx?visLang=" + visLang,
        data: "",
        dataType: "html",
        success: function (html) {

            $.prompt(html, {
                submit: sharePage, buttons: { OK: true }, loaded: function () {
                    $("#jqi").css("width", "550px");
                }
            });
        }
    });
}

function login_byopenid() {
    var html_form = '<div style="position:absolute;top:15px;left:360px"><img src="/images/starclub_logo.gif"/></div><table cellpadding="4" cellspacing="0" width="100%">';
    html_form += '<tr><td><h2>Đăng nhập băng OpenID</h2></td></tr>';
    html_form += '<tr><td>&nbsp;</td></tr>';
    html_form += '<tr><td>Bạn có thể dễ dàng đăng nhập bằng các tài khoản OpenID. Click chọn một trong các tài khoản OpenID bên dưới.</td></tr>';
    html_form += '<tr><td>&nbsp;</td></tr>';
    html_form += '<tr><td>';
    html_form += '<a href="javascript:void(0);" onclick="return openid_request(\'google\');" class="icon_google">&nbsp;</a>';
    html_form += '<a href="javascript:void(0);" onclick="return openid_request(\'yahoo\');" class="icon_yahoo">&nbsp;</a>';
    html_form += '<a href="javascript:void(0);" onclick="return openid_request(\'twitter\');" class="icon_myopenid">&nbsp;</a>';
    html_form += '<a href="javascript:void(0);" onclick="return openid_request(\'aol\');" class="icon_aol">&nbsp;</a>';
    html_form += '<a href="javascript:void(0);" onclick="return fb_connect();" class="fb_connect">&nbsp;</a>';
    html_form += '</td></tr>';
    html_form += '</table>';
    $.prompt(html_form, {
        buttons: { OK: true }, loaded: function () {
            $("#jqi").css("top", "40%");
            $(".jqidefaultbutton").hide();
        }
    });
    return false;
}

function payment_cancel(message_text) {
    var html_form = '<div style="position:absolute;top:15px;left:360px"><img src="/images/starclub_logo.gif"/></div><table cellpadding="4" cellspacing="0" width="100%">';
    html_form += '<tr><td><h2>Th&#244;ng b&#225;o</h2></td></tr>';
    html_form += '<tr><td>&nbsp;</td></tr>';
    html_form += '<tr><td>' + message_text + '</td></tr>';
    html_form += '<tr><td>&nbsp;</td></tr>';
    html_form += '<tr><td>&nbsp;</td></tr>';
    html_form += '</table>';
    $.prompt(html_form, {
        buttons: { OK: true }, loaded: function () {
            $("#jqi").css("top", "40%");
        }
    });
}

function payment_login(callback) {
    var html = '<div id="lg_box">';
    html += '<div class="lg-box PNGfix">';
    html += '	<div class="or"><img src="/images/or_vn.jpg" alt="" /></div>';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '		<div align="center"><h2>Vui l&#242;ng &#273;&#259;ng nh&#7853;p</h2></div>';
    html += '		<div class="lg-subtext">';
    if (hasmsg) {
        html += '		&#8226;	&#272;&#7875; d&#249;ng ch&#7913;c n&#259;ng n&#224;y, b&#7841;n ph&#7843;i l&#224; th&#224;nh vi&#234;n c&#7911;a StarClub!';
    }
    html += '		</div>';
    html += '		<div class="lg-212"><span class="lg-box-titles">&#272;&#259;ng nh&#7853;p</span>';

    /*
    html += '				<div class="openid_txt_form"><div class="openid_txt_label">Email</div><input type="text" id="txtquick_emal" /></div><div class="clear"></div>';
    html += '				<div class="openid_txt_form"><div class="openid_txt_label">M&#7853;t Kh&#7849;u</div><input type="password" id="txtquick_password"/></div><div class="clear"></div>';
    html += '				<div style="width: 75px; float:left">';
    html += '					<a href="javascript:void(0);" onclick="QuickLoginProcess();"><img src="/images/lg-button_vn.jpg" alt="" border="0" /></a>';
    html += '				</div>';
    html += '				<div style="line-height: 10px;float:left;width: 130px; padding-left:20px">';
    html += '					<a class="forgot" href="https://www.megastar.vn/vn/forgotpassword/">Qu&#234;n m&#7853;t kh&#7849;u</a><br>';
    html += '					<a class="forgot" style="padding-top: 5px; display: block" href="https://www.megastar.vn/vn/resend-active/">Ch&#432;a k&#237;ch ho&#7841;t t&#224;i kho&#7843;n? G&#7917;i l&#7841;i email k&#237;ch ho&#7841;t</a>';
    html += '				</div><div class="clear"></div>';
    */

    html += '				<iframe id="login_form" allowtransparency="true" src="https://www.megastar.vn/login_form.aspx?visLang=1&callback=' + (callback ? urlencode(callback) : urlencode(window.location.href)) + '" frameborder="0" scrolling="no" height="110" width="230"></iframe>';


    html += '		</div>	';
    html += '		<div class="lg-212-v2">';
    html += '			<span class="lg-box-titles">&#272;&#259;ng k&#253;</span>';
    html += '			<span style="line-height: 12px;">Tham gia StarCLUB ngay &#273;&#7875; t&#7853;n h&#432;&#7903;ng qu&#224; t&#7863;ng, &#432;u &#273;&#227;i &#273;&#7863;c bi&#7879;t, &#273;&#7863;t v&#233; online v&#224; h&#417;n th&#7871; n&#7919;a ...</span><br><br><br>';
    html += '			<a href="https://www.megastar.vn/vn/login/"><img src="/images/reg-button_vn.jpg" alt="" border="0" /></a>';
    html += '		</div>';
    html += '		<div style="clear: both"></div>';
    html += '		<div class="openid_login">';
    html += '			<div class="openid_desc">Bạn có thể dễ dàng đăng nhập bằng các tài khoản OpenID. Click chọn một trong các tài khoản OpenID kế bên:</div>';
    html += '			<div class="openid_btn">';
    html += '				<a href="javascript:void(0);" onclick="return openid_request(\'google\');" class="icon_google">&nbsp;</a>';
    html += '				<a href="javascript:void(0);" onclick="return openid_request(\'yahoo\');" class="icon_yahoo">&nbsp;</a>';
    html += '				<a href="javascript:void(0);" onclick="return openid_request(\'twitter\');" class="icon_myopenid">&nbsp;</a>';
    html += '				<a href="javascript:void(0);" onclick="return openid_request(\'aol\');" class="icon_aol">&nbsp;</a>';
    html += '				<a href="javascript:void(0);" onclick="return fb_connect();" class="icon_facebook">&nbsp;</a>';
    html += '		<div style="clear: both"></div></div>';
    html += '	</div>';
    html += '</div>';
    html += '<a target="_blank" href="https://www.megastar.vn/vn/login/"><img style="padding-left: 23px;" src="/images/popup-x-mas-vn.jpg" alt="" /></a>';
    html += '<input type="hidden" value="' + (callback ? callback : "") + '" id="callback" />';

    $.modal(html, {
        containerCss: { height: 523, width: 534 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}

function quicklogin_payment(callback) {

    if (callback != "") {
        window.location.href = callback;
        return false;
    }


}

function quicklogin(callback, hasmsg) {
    if (typeof (hasmsg) == 'undefined')
        hasmsg = true;

    var html = '<div id="lg_box">';
    html += '<div class="lg-box PNGfix">';
    html += '	<div class="or"><img src="/images/or_vn.jpg" alt="" /></div>';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '		<div align="center"><h2>Vui l&#242;ng &#273;&#259;ng nh&#7853;p</h2></div>';
    html += '		<div class="lg-subtext">';
    if (hasmsg) {
        html += '		&#8226;	&#272;&#7875; d&#249;ng ch&#7913;c n&#259;ng n&#224;y, b&#7841;n ph&#7843;i l&#224; th&#224;nh vi&#234;n c&#7911;a StarClub!';
    }
    html += '		</div>';
    html += '		<div class="lg-212"><span class="lg-box-titles">&#272;&#259;ng nh&#7853;p</span>';

    /*
    html += '				<div class="openid_txt_form"><div class="openid_txt_label">Email</div><input type="text" id="txtquick_emal" /></div><div class="clear"></div>';
    html += '				<div class="openid_txt_form"><div class="openid_txt_label">M&#7853;t Kh&#7849;u</div><input type="password" id="txtquick_password"/></div><div class="clear"></div>';
    html += '				<div style="width: 75px; float:left">';
    html += '					<a href="javascript:void(0);" onclick="QuickLoginProcess();"><img src="/images/lg-button_vn.jpg" alt="" border="0" /></a>';
    html += '				</div>';
    html += '				<div style="line-height: 10px;float:left;width: 130px; padding-left:20px">';
    html += '					<a class="forgot" href="https://www.megastar.vn/vn/forgotpassword/">Qu&#234;n m&#7853;t kh&#7849;u</a><br>';
    html += '					<a class="forgot" style="padding-top: 5px; display: block" href="https://www.megastar.vn/vn/resend-active/">Ch&#432;a k&#237;ch ho&#7841;t t&#224;i kho&#7843;n? G&#7917;i l&#7841;i email k&#237;ch ho&#7841;t</a>';
    html += '				</div><div class="clear"></div>';
    */

    html += '				<iframe id="login_form" allowtransparency="true" src="/login_form.aspx?visLang=1&callback=' + (callback ? urlencode(callback) : urlencode(window.location.href)) + '" frameborder="0" scrolling="no" height="110" width="230"></iframe>';


    html += '		</div>	';
    html += '		<div class="lg-212-v2">';

    html += '         <div class="starclub-message">';
    html += '              <p style="padding-top: 12px;">Thế giới giải trí với các ưu đãi hấp dẫn như vé xem phim, bắp rang và nước uống MIỄN PHÍ đang chờ đón bạn tại MegaStar Cineplex!</p>';
    html += '         </div><!-- starclub-message -->';

    html += '		</div>';
    html += '		<div style="clear: both"></div>';

    html += '	</div>';
    html += '</div>';
    html += '<a target="_blank" href="https://www.megastar.vn/vn/login/"><img style="padding-left: 23px;" src="/images/popup-x-mas-vn.jpg" alt="" /></a>';
    html += '<input type="hidden" value="' + (callback ? callback : "") + '" id="callback" />';

    $.modal(html, {
        containerCss: { height: 523, width: 534 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}

function QuickLoginProcess(act) {
    if (typeof (act) == 'undefined')
        act = "Login";

    if ($("#txtquick_emal").val() == "") {
        alert("Vui lòng nhập địa chỉ email!");
        $("#txtquick_emal").focus();
        return false;
    } else if ($("#txtquick_password").val() == "") {
        alert("Vui lòng nhập mật khẩu!");
        $("#txtquick_password").focus();
        return false;
    }
    else {
        $.ajax({
            type: "POST",
            url: "/msQuickLogin.aspx",
            data: 'Action=' + act + '&&email=' + $("#txtquick_emal").val() + '&&password=' + $("#txtquick_password").val() + '&&visLang=1',
            dataType: "html",
            success: function (html_response) {
                urchinTracker("SCLUB_EnterQuickLogin");
                if (html_response.indexOf("ReturnCode=-1") != -1) {
                    alert("Sai email/mật khẩu");
                } else if (html_response.indexOf("ReturnCode=0") != -1) {
                    alert("Vui lòng kích hoạt tài khoản của bạn");
                }
                else if (html_response.indexOf("ReturnCode=2") != -1) {
                    window.location.href = "/vn/editprofile/";
                }
                else {
                    $.prompt.close();
                    var callback = $("#callback").val();
                    if (callback != "") {
                        window.location.href = callback.replace("http:", "https:");
                    }
                    else {
                        window.location.href = window.location.href.replace("http:", "https:");
                    }
                }
            }
        });
        return false;
    }
}

function ssplogin() {
    var html = '<div id="lg_box">';
    html += '<div class="lg-box-ssp PNGfix">';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '		<div style="padding-top: 50px;">';
    html += '		<div align="center"><h2>Vui l&#242;ng &#272;&#259;ng Nh&#7853;p &#273;&#7875; c&#7853;p nh&#7853;t MegaStar Saigon Paragon v&#224;o h&#7891; s&#417; c&#7911;a b&#7841;n</h2></div>';
    //html += '		<div class="lg-subtext">';
    //html += '		&#8226;	&#272;&#7875; d&#249;ng ch&#7913;c n&#259;ng n&#224;y, b&#7841;n ph&#7843;i l&#224; th&#224;nh vi&#234;n c&#7911;a StarClub!';
    //html += '		</div>';
    html += '		<div class="lg-212">';
    html += '		<table width="100%" border="0" cellpadding="0" cellspacing="0">';
    html += '			<tr>';
    html += '				<td colspan="2">Email :<br /><input style="width: 250px" type="text" id="txtquick_emal" /></td>';
    html += '			</tr>';
    html += '			<tr>';
    html += '				<td colspan="2">M&#7853;t Kh&#7849;u :<br /><input style="width: 250px" type="password" id="txtquick_password"/></td>';
    html += '			</tr>';
    html += '			<tr>';
    html += '				<td align="center" colspan="2" valign="top" style="padding-top: 3px;">';
    html += '					<a href="javascript:void(0);" onclick="QuickLoginProcess(\'LoginSPP\');"><img src="/images/lg-button-2-vn.png" alt="" style="padding-top:4px;" border="0" /></a>';
    html += '				</td>';
    html += '			</tr>';
    html += '			<tr>';
    html += '				<td colspan="2" valign="bottom" style="line-height: 1em;padding-top: 3px;">';
    html += '					<a class="forgot" href="https://www.megastar.vn/vn/forgotpassword/">Qu&#234;n m&#7853;t kh&#7849;u</a><br>';
    html += '					<a class="forgot" style="padding-top: 5px; display: block" href="https://www.megastar.vn/vn/resend-active/">Ch&#432;a k&#237;ch ho&#7841;t t&#224;i kho&#7843;n? G&#7917;i l&#7841;i email k&#237;ch ho&#7841;t</a>';
    html += '				</td>';
    html += '			</tr>';
    html += '		</table>';
    html += '		</div>	';
    html += '		<div style="clear: both"></div>';
    html += '	</div>';
    html += '	</div>';
    html += '</div><input type="hidden" value="/vn/starclub/" id="callback" />';

    $.modal(html, {
        containerCss: { height: 400, width: 520 }, onShow: function () {
            $("a.modalCloseImg").hide();
            //DD_belatedPNG.fix(".PNGfix");
        }
    });
}

function forgot_password() {
    var html = '<div id="lyt_box">';
    html += '<div class="lyt-box PNGfix">';
    //html += '	<div class="or"><img src="/images/or_vn.jpg" alt="" /></div>';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '<div class="header">';
    html += 'Thành viên';
    html += '</div>';
    html += '		<div align="center">';
    html += '				<iframe id="Iframe1" allowtransparency="true" src="/visLtyForgotDetails.aspx?visLang=1&visMode=Password" frameborder="0" scrolling="no" height="240" width="230"></iframe>';
    html += '		</div>	';
    html += '	</div>';
    html += '</div>';

    $.modal(html, {
        containerCss: { height: 350, width: 380 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}

function resend_activate_link() {
    var html = '<div id="lyt_box">';
    html += '<div class="lyt-box PNGfix">';
    //html += '	<div class="or"><img src="/images/or_vn.jpg" alt="" /></div>';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '<div class="header">';
    html += 'Thành viên';
    html += '</div>';
    html += '		<div align="center">';
    html += '				<iframe id="Iframe2" allowtransparency="true" src="/visLtyForgotDetails.aspx?visLang=1&visMode=Activation" frameborder="0" scrolling="no" height="200" width="250"></iframe>';
    html += '		</div>	';
    html += '	</div>';
    html += '</div>';

    $.modal(html, {
        containerCss: { height: 350, width: 380 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}

function show_message_update_profile() {
    var html = '<div id="lyt_box">';
    html += '<div class="lyt-box PNGfix">';
    //html += '	<div class="or"><img src="/images/or_vn.jpg" alt="" /></div>';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '<div class="header">';
    html += 'Thành viên';
    html += '</div>';
    html += '		<div align="center">';
    html += '		    <a href="/visLtyCreateUser.aspx?visLang=1" style="position: absolute; display: block; z-index: 999; top: -20px; height: 320px; width: 360px; cursor: auto;"></a>';

    html += '			<br/><br/><br/>Để tận hưởng trọn vẹn các ưu đãi dành cho thành viên StarCLUB, bạn vui lòng cập nhật đầy đủ thông tin của bạn theo mẫu sau.<br /><br />';
    html += '			Click <a href="/visLtyCreateUser.aspx?visLang=1">vào đây</a> để cập nhật thông tin.';

    html += '		</div>	';
    html += '	</div>';
    html += '</div>';

    $.modal(html, {
        containerCss: { height: 350, width: 380 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}

function show_message_update_profile_need_validate() {
    var html = '<div id="Div1">';
    html += '<div class="lyt-box PNGfix">';
    html += '		<a href="javascript:void(0);" onclick="$.modal.close();" class="jqmClose" style="float: right">[&#272;&#243;ng]</a>';
    html += '<div class="header">';
    html += 'Thành viên';
    html += '</div>';
    html += '		<div align="center">';

    html += '			<br/><br/><br/>Cám ơn bạn đã cập nhật thông tin tài khoản. Vui lòng kiểm tra email và kích hoạt tài khoản để bắt đầu khám phá các ưu đãi dành cho thành viên StarCLUB!<br /><br />';
    html += '			Hoặc click <a href="/visLtyCreateUser.aspx?visLang=1">vào đây</a> để cập nhập lại thông tin của bạn.';

    html += '		</div>	';
    html += '	</div>';
    html += '</div>';

    $.modal(html, {
        containerCss: { height: 350, width: 380 }, onShow: function () {
            $("a.modalCloseImg").hide();
        }
    });
}