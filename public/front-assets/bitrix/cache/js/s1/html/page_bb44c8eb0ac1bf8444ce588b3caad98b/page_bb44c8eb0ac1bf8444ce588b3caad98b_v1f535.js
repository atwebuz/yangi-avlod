
; /* Start:"a:4:{s:4:"full";s:81:"/local/templates/html/components-template/rent-legend/script.min.js?1638253277582";s:6:"source";s:67:"/local/templates/html/components-template/rent-legend/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(e){var i=!1;$(".rent-legend__item").click(function(){i=!0,$(".rent-legend__item").removeClass("active"),$(this).addClass("active"),setTimeout(function(){return i=!1},1e3)});var n="section0";$("[id^=section]").each(function(){var t=$(this);$(window).scroll(function(){var e;i||0<t[0].getBoundingClientRect().y&&t[0].getBoundingClientRect().y<window.innerHeight/2&&n!==t.attr("id")&&(e=t.attr("id"),$(".rent-legend__item").removeClass("active"),"section0"!==e&&$('[href="#'.concat(e,'"]')).addClass("active"),n=t.attr("id"))})})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:78:"/local/templates/html/components-template/rent-utp/script.min.js?1638253277220";s:6:"source";s:64:"/local/templates/html/components-template/rent-utp/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";new Waypoint({element:document.querySelector(".rent-utp"),handler:function(){var e=0;$(".rent-utp__utp").each(function(){var t=this;setTimeout(function(){$(t).addClass("active")},e),e+=250})},offset:"80%"});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:82:"/local/templates/html/components-template/rent-scheme/script.min.js?16382532771366";s:6:"source";s:67:"/local/templates/html/components-template/rent-scheme/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";$(".scheme-panel__item.general .scheme-panel__title").click(function(){$(".scheme-panel__item").removeClass("active"),$(".scheme-panel__content").slideUp(),$(this).closest(".scheme-panel__item").addClass("active"),$(".rent-scheme__right--scheme").fadeOut(0),$(".rent-scheme__right--plan").fadeIn()}),$(".scheme-panel__item:not(.general) .scheme-panel__title").click(function(){switch(new LazyLoad({elements_selector:".rent-scheme .lazy-img",threshold:0}).loadAll(),$(".rent-scheme__right--scheme").fadeIn(),$(".rent-scheme__right--plan").fadeOut(0),$(".scheme-panel__item").removeClass("active"),$(".rent-scheme__svg").removeClass("active"),$(this).closest(".scheme-panel__item").addClass("active"),$(".scheme-panel__content").slideUp(),$(this).closest(".scheme-panel__item").find(".scheme-panel__content").slideDown(),$(".rent-scheme__svg").removeClass("red"),$(".rent-scheme__svg").removeClass("blue"),$(".rent-scheme__svg").removeClass("green"),$(".rent-scheme__svg").removeClass("pink"),$(this).closest(".scheme-panel__item").attr("data-color")){case"red":$(".rent-scheme__svg").addClass("red");break;case"blue":$(".rent-scheme__svg").addClass("blue");break;case"green":$(".rent-scheme__svg").addClass("green");break;case"pink":$(".rent-scheme__svg").addClass("pink")}setTimeout(function(){$(".rent-scheme__svg--desktop").addClass("active")},400)});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:79:"/local/templates/html/components-template/rent-area/script.min.js?1638253277403";s:6:"source";s:65:"/local/templates/html/components-template/rent-area/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";$("path[data-tab]").click(function(){var a=$(this).attr("data-tab");$(".modal-tab").fadeOut(0),$(".modal-tab[data-tab=".concat(a,"]")).fadeIn(0)}),$(".js-modal-area-back").click(function(){$(".modal-tab").fadeOut(0),$('.modal-tab[data-tab="tab-main"]').fadeIn(0)}),$("#modal-area").on("hidden.bs.modal",function(){$(".modal-tab").fadeOut(0),$('.modal-tab[data-tab="tab-main"]').fadeIn(0)});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:79:"/local/templates/html/components-template/rent-form/script.min.js?1638253277197";s:6:"source";s:65:"/local/templates/html/components-template/rent-form/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(t){$(".btn--light:not([data-toggle])").click(function(){$("html,body").animate({scrollTop:$(".rent-form-section").offset().top},0,"linear")})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:58:"/bitrix/components/slam/easyform/script.js?160413794918081";s:6:"source";s:42:"/bitrix/components/slam/easyform/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/

if (!window.FormVendorLoader) {
	window.FormVendorLoader = function(args = {}) {

		if (!args.name) {
			console.warn('window.FormVendorLoader: You must pass the name!');
			return;
		}
		if (!args.path) {
			console.warn('window.FormVendorLoader: You must pass the path!');
			return;
		}

		!window.vendor && (window.vendor = {});


		if (window.vendor[args.name]) {
			if (window.vendor[args.name].load.status) {
				args.callback && args.callback();
			} else {
				$(document).on('load.'+args.name, function() {
					args.callback && args.callback();
				})
			}
		} else {
			window.vendor[args.name] = {};
			window.vendor[args.name].load = {};
			window.vendor[args.name].load.timeout;
			window.vendor[args.name].load.status = false;
			window.vendor[args.name].load.loading = function() {
				if (!window.vendor[args.name].load.status) {
					window.vendor[args.name].load.status = 'loading';
					clearTimeout(window.vendor[args.name].load.timeout);
					$(document).off('scroll.vendor-' + args.name);
					$(document).off('click.vendor-' + args.name);
					$(document).off('mouseover.vendor-' + args.name);
					$.getScript(args.path, function(data, textStatus, jqxhr) {
						window.vendor[args.name].load.status = true;
						args.callback && args.callback();
						$(document).trigger('load.'+args.name)
					})
				}
			};
			if (args.event) {
				if (args.event.scroll) {
					$(document).on('scroll.vendor-' + args.name, function(){
						window.vendor[args.name].load.loading();
					});
				}

				if (args.event.click) {
					$(document).on('click.vendor-' + args.name, function(){
						window.vendor[args.name].load.loading();
					});
				}

				if (args.event.mouseover) {
					$(document).on('mouseover.vendor-' + args.name, args.event.mouseover.trigger, function(){
						window.vendor[args.name].load.loading();
					});
				}
				if (args.event.timeout) {
					window.vendor[args.name].load.timeout = setTimeout(function() {
						window.vendor[args.name].load.loading();
					}, args.event.timeout || 3000)
				}
			}



		}

	}
}
if (typeof JCEasyForm !== 'undefined' && $.isFunction(JCEasyForm)) {

    console.log('reconnection attempt JCEasyForm');

} else {

    var JCEasyForm = function(arParams) {
    	var _this = this;

    	var start = function() {
		    if (typeof arParams === 'object') {
			    if(!window.jQuery) {
				    console.log('Form error: Connect jQuery');
				    return false;
			    }
			    _this.form = $('#' + arParams.FORM_ID);
			    if(arParams.SHOW_MODAL == 'Y'){
				    _this.modalSuccess = $('#frm-modal-' + arParams.FORM_ID);
			    }
			    _this.isModalSuccess = false;

			    _this.modalForm = $('#modal' + arParams.FORM_ID);
			    _this.isModalForm = false;
			    _this.params = arParams;
			    JCEasyForm.prototype.init(_this);
		    }
	    }

    	if ( arParams.USE_FORMVALIDATION_JS == 'Y') {
		    window.FormVendorLoader({
			    name: 'bootstrapValidator',
			    path: '/bitrix/components/slam/easyform/lib/js/bootstrapValidator.min.js',
			    event: {
				    scroll: true,
				    click: true,
				    mouseover: {
					    trigger: '#' + arParams.FORM_ID
				    }
			    },
			    callback: function() {
				    if (arParams.USE_FORMVALIDATION_JS == 'Y') {
					    window.FormVendorLoader({
						    name: 'inputmask',
						    path: '/bitrix/components/slam/easyform/lib/js/jquery.inputmask.min.js',
						    event: {
							    scroll: false,
							    click: false,
							    mouseover: false,
							    timeout: 1,
						    },
						    callback: function() {
							    start()
						    }
					    });
				    } else {
					    start()
				    }
			    }
		    });
	    } else {
		    start()
	    }


    };

    JCEasyForm.prototype.init = function (_this) {

        if (!_this.form.length) {
            console.log('Form error: ID form no search. Specify the form ID in the easyform.');
            return false;
        }

        if(!window.jQuery) {
            console.log('Form error: Connect jQuery');
            return false;
        }


        if (_this.params.SEND_AJAX && !window.jQuery.ajax) {
            console.log('Form error: Connect jQuery ajax');
            return false;
        }


        if(_this.params.SHOW_MODAL == 'Y' && _this.modalSuccess.length){
            if($.fn.modal){ //$.fn.modal
                _this.isModalSuccess = true;
            } else {
                console.log('1Form error: the bootstrap library is not connected. You can connect the bootstrap library in the easyform configuration.');
            }
        }

        if(_this.modalForm.length){
            if($.fn.modal){ //$.fn.modal
                _this.isModalForm = true;
            } else {
                console.log('22Form error: the bootstrap library is not connected. You can connect the bootstrap library in the easyform configuration.');
            }
        }

        if(_this.params.FORM_SUBMIT && _this.modalForm.length){
            if($.fn.modal){
                _this.modalForm.modal('show');
            }else {
                console.log('3Form error: the bootstrap library is not connected. You can connect the bootstrap library in the easyform configuration.');
            }
        }

        if(!_this.form.find('.alert-success').hasClass('hidden')) {
            setTimeout(function () {
                _this.form.find('.alert-success').addClass('hidden');
            }, 4000);
        }


        _this.switchSelect();

        if (_this.params.USE_CAPTCHA) {
            _this.captcha();
        }

        if (_this.params.USE_FORMVALIDATION_JS == 'Y') {


            if (_this.params.USE_FORM_MASK_JS == 'Y') {
                try {

                    Inputmask({
                        oncomplete: function () {
                            if($(this).attr('required')) {
                                _this.form.data('bootstrapValidator').updateStatus($(this).attr('name'), 'VALID', null);
                            }
                        }, onincomplete: function () {
                            if($(this).attr('required')) {
                                _this.form.data('bootstrapValidator').updateStatus($(this).attr('name'), 'INVALID', null);
                            }
                        }, onKeyValidation: function (key, result) {
                            if (result) {
                                if($(this).attr('required')) {
                                    _this.form.data('bootstrapValidator').updateStatus($(this).attr('name'), 'NOT_VALIDATED', null);
                                }
                            }
                        }
                    }).mask(document.querySelectorAll("input[type=tel]"));

                } catch (e) {
                    console.log('error inputmask');
                }
            }
        } else if (_this.params.USE_FORM_MASK_JS == 'Y') {

            try{
                Inputmask({clearIncomplete: true }).mask(document.querySelectorAll("input[type=tel]"));
            } catch(e) {
                console.log('error inputmask');
            }
        }

        if (_this.params.SEND_AJAX) {
            if (_this.params.USE_FORMVALIDATION_JS == 'Y') {

                _this.form.bootstrapValidator().on('success.form.bv', function (e) {

                    e.preventDefault();

                    if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                        if (!_this.form.data('bootstrapValidator').isValid()) {
                            return false;
                        }
                    }
                    try {

                        var dataParams = _this.form.serializeArray();
                        var oldParams = _this.params['OLD_PARAMS'];
                        for( var i in oldParams ) {
                            dataParams.push({name: 'arParams[' + i + ']', value: oldParams[i]});
                        }

                        _this.form.find('.submit-button').addClass('spinner');

                        $.ajax({
                            type: 'POST',
                            url: _this.params.TEMPLATE_FOLDER,
                            data: dataParams,
                            success: function (data) {
                                console.log(data);
                                data = JSON.parse(data);
                                if (data.result === 'ok') {

                                    try {
                                        var funcName = _this.params._CALLBACKS;
                                        if (funcName) {
                                            eval(funcName)(data);
                                        } else {
                                            _this._showMessage(true, data.message);
                                        }
                                    } catch (e) {
                                        _this._showMessage(true, data.message);
                                    }

                                    setTimeout(function () { _this.form.find('.alert').addClass('hidden'); }, 4000);

                                    _this._resetForm();
                                } else {
                                    _this._showMessage(false, data.message);
                                }
                                _this.form.find('.submit-button').removeClass('spinner');
                                _this.form.find('[disabled="disabled"]').removeAttr('disabled');

                            },
                            error: function () {
                                _this._showMessage(false);
                            }
                        });

                    } catch (e) {
                        console.log('error ajax');
                    }

                    return false;

                });
            } else {
                _this.form.on('submit', function (e) {
                    e.preventDefault();

                    if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                        if (!_this.form.data('bootstrapValidator').isValid()) {
                            return false;
                        }
                    }


                    try {

                        _this.form.find('.submit-button').addClass('spinner');

                        var dataParams = _this.form.serializeArray();
                        var oldParams = _this.params['OLD_PARAMS'];
                        for( var i in oldParams ) {
                            dataParams.push({name: 'arParams[' + i + ']', value: oldParams[i]});
                        }

                        $.ajax({
                            type: 'POST',
                            url: _this.params.TEMPLATE_FOLDER,
                            data: dataParams,
                            success: function (data) {
                                data = JSON.parse(data);
                                if (data.result === 'ok') {

                                    try {
                                        var funcName = _this.params._CALLBACKS;
                                        if (funcName) {
                                            eval(funcName)(data);
                                        } else {
                                            _this._showMessage(true, data.message);
                                        }
                                    } catch (e) {
                                        _this._showMessage(true, data.message);
                                    }


                                    _this._resetForm();
                                } else {
                                    _this._showMessage(false, data.message);
                                }
                                _this.form.find('.submit-button').removeClass('spinner');
                                _this.form.find('[disabled="disabled"]').removeAttr('disabled');

                            },
                            error: function () {
                                _this._showMessage(false);
                            }
                        });

                    } catch (e) {
                        console.log('error ajax');
                    }

                    return false;
                });
            }
        }  else {
            if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                _this.form.bootstrapValidator().on('success.form.bv', function (e) {
                    if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                        if (!_this.form.data('bootstrapValidator').isValid()) {
                            return false;
                        }
                    }
                });
            }
        }
    };

    JCEasyForm.prototype.captcha = function () {

        var _this = this;
        var captchaCallback = function (response) {

            if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                if (response !== undefined) {
                    $('input[name="captchaValidator"]').val(1);
                } else {
                    $('input[name="captchaValidator"]').val('');
                }

                _this.form.bootstrapValidator('updateStatus', "captchaValidator", 'NOT_VALIDATED').bootstrapValidator('validateField', "captchaValidator");
            }
        };
        try {

            setTimeout(function () {
                grecaptcha.render(_this.params.FORM_ID + '-captchaContainer', {
                    'sitekey': _this.params.CAPTCHA_KEY,
                    'callback': captchaCallback,
                    'expired-callback': captchaCallback
                });
            }, 500);

        } catch (e) {

        }

    };

    JCEasyForm.prototype._showMessage = function (status, message) {

        var alert,
            alertSuccess,
            alertDanger,
            serverMessage,
            modalTitle;

        alert = this.form.find('.alert');
        if (status === undefined || !alert.length) {
            return false;
        }
        alertSuccess = alert.filter('.alert-success');
        alertDanger = alert.filter('.alert-danger');

        if (status === true) {
            alert.addClass('hidden');
            if (this.isModalSuccess) {
                if(this.isModalForm)
                    this.modalForm.modal('hide');

                if(message){
                    this.modalSuccess.find('.ok-text').html(message);
                }

                if (!this.modalSuccess.hasClass('in'))
                    this.modalSuccess.addClass('in');
                this.modalSuccess.modal('show');
            } else {
                serverMessage = message || alertSuccess.data('message');
                alertSuccess.html(serverMessage);
                alertSuccess.removeClass('hidden');
            }
        } else if (status === false) {
            alert.addClass('hidden');
            serverMessage = message || alertDanger.data('message');

            alertDanger.html(serverMessage);
            alertDanger.removeClass('hidden');
        } else {
            alert.addClass('hidden');
        }

    };

    JCEasyForm.prototype._resetForm = function () {
        var _this = this;

        setTimeout(function () {
            if (_this.params.USE_FORMVALIDATION_JS == 'Y') {
                _this.form.data('bootstrapValidator').resetForm(true);
            }
            _this.form[0].reset();

            var switchSelects = _this.form.find('.switch-select');
            switchSelects.find('select').trigger('refresh');

            if (_this.params.USE_CAPTCHA) {
                try {
                    grecaptcha.reset();
                } catch (e) {

                }

            }
            var fileArea = _this.form.find('.file-extended');
            if (fileArea.length) {
                fileArea.find('.file-placeholder-tbody').html('');
                _this.form.find('.file-selectdialog-switcher').attr('style', '');
                fileArea.parent().find('input[type="hidden"]').remove();
            }
        }, 1000);

    };

    JCEasyForm.prototype.switchSelect = function () {
        // switch select
        var switchSelects = this.form.find('.switch-select');

        if (switchSelects.length) {

            var _this = this;
            switchSelects.each(function () {
                var self = $(this);
                var parent = self.find('.switch-parent');
                var child = self.find('.switch-child');
                var btnBack = self.find('.btn-switch-back');
                var select = self.find('select');
                if (select.length && btnBack.length && child.length && parent.length) {
                    select.on('change', function () {
                        var optionSelected = select.find('option:selected');
                        var dataSwitch = optionSelected.data('switch');
                        if (dataSwitch !== undefined) {
                            parent.addClass('hidden');
                            child.removeClass('hidden');
                        }
                    });
                    btnBack.on('click', function (e) {
                        e.preventDefault();
                        parent.removeClass('hidden');
                        child.addClass('hidden');
                        select.find('option').eq(0).prop('selected', true);
                        setTimeout(function () {
                            select.trigger('refresh');
                        }, 1);
                    });

                    _this.form.on('reset', function () {
                        parent.removeClass('hidden');
                        child.addClass('hidden');
                        select.find('option').eq(0).prop('selected', true);
                        setTimeout(function () {
                            select.trigger('refresh');
                        }, 1);
                    });
                }
            });
        }
    };

}

/* End */
;; /* /local/templates/html/components-template/rent-legend/script.min.js?1638253277582*/
; /* /local/templates/html/components-template/rent-utp/script.min.js?1638253277220*/
; /* /local/templates/html/components-template/rent-scheme/script.min.js?16382532771366*/
; /* /local/templates/html/components-template/rent-area/script.min.js?1638253277403*/
; /* /local/templates/html/components-template/rent-form/script.min.js?1638253277197*/
; /* /bitrix/components/slam/easyform/script.js?160413794918081*/
