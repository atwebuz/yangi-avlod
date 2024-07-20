
; /* Start:"a:4:{s:4:"full";s:84:"/local/templates/html/components-template/advatages-list/script.min.js?1607604075244";s:6:"source";s:70:"/local/templates/html/components-template/advatages-list/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(t){$(".advatages-list__nav .nav-link").on("click",function(t){t.preventDefault();t=$(this).attr("href"),t="#"===t?0:$(t).offset().top-70;$("html, body").stop().animate({scrollTop:t},600)})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:77:"/local/templates/html/components-template/map-tab/script.min.js?1607604085376";s:6:"source";s:63:"/local/templates/html/components-template/map-tab/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(a){var t=$(".map-tab"),i=t.find(".map-tab__link"),c=t.find(".map-tab__pic img");i.on("click",function(){var a=null;window.matchMedia("(max-width: 767px)").matches?(a=$(this).data("pic-mob"),t.find("source").attr("srcset",a)):a=$(this).data("pic-desc"),i.removeClass("active"),$(this).addClass("active"),c.attr("src",a)})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:75:"/local/templates/html//components-template/tabs/script.min.js?1673342871269";s:6:"source";s:61:"/local/templates/html//components-template/tabs/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";
window.addEventListener("load", function (e) {
    window.vendorLoader({
        name: "tab",
        path: "/local/templates/html/js/vendor/tab.min.js",
        event: {scroll: !0, click: !0, mouseover: {trigger: '[data-toggle="tab"]'}}
    })
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:81:"/local/templates/html/components-template/calculator/script.min.js?16970901173793";s:6:"source";s:66:"/local/templates/html/components-template/calculator/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("alpine:init",function(t){Alpine.data("calculator",function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return{percentOfStaffSalaryTax:t.percentOfStaffSalaryTax,percentOfParkDividendsTax:t.percentOfParkDividendsTax,percentOfDividendsTax:t.percentOfDividendsTax,percentOfParkIncomeTax:t.percentOfParkIncomeTax,percentOfParkProfitTax:t.percentOfParkProfitTax,percentOfIncomeTax:t.percentOfIncomeTax,selectOptions:t.selectOptions,taxesSystem:"",inputsData:{plannedRevenue:"",staffCount:"",averageSalary:"",returnOnSales:""},monthSaving:0,yearSaving:0,parkTaxes:{socialContributions:0,incomeTax:0,profitTax:0,taxesSum:0},notParkTaxes:{socialContributions:0,incomeTax:0,profitTax:0,taxesSum:0},isCalculated:!1,isFormValid:!1,selectLabel:"Система налогообложения",isSelectOpen:!1,selectedOption:"",init:function(){this.setDefaultValue(),this.formInputsWatcher()},convertValuesToNumbers:function(){var t,a=this;for(t in a.inputsData)a.inputsData[t]=Number(a.inputsData[t])},setDefaultValue:function(){this.selectedOption=this.selectOptions[0].value,this.taxesSystem=this.selectOptions[0].value},formInputsWatcher:function(){var e=this;this.$watch("inputsData",function(){var t,a=!0;for(t in e.inputsData)e.inputsData[t]||(a=!1);e.isFormValid=a})},toggleSelect:function(){this.isSelectOpen?this.isSelectOpen=!1:this.isSelectOpen=!0},closeSelect:function(){this.isSelectOpen=!1},setSelectedOption:function(t){var a=this;a.selectedOption=t,a.taxesSystem=t,a.closeSelect()},getFormData:function(){this.calculateTaxes()},showResults:function(){this.isCalculated=!0},showCalculator:function(){this.isCalculated=!1},calculateTaxes:function(){var t=this,a=t.parkTaxes,e=t.notParkTaxes,n=(t.convertValuesToNumbers(),1800<=t.inputsData.averageSalary?1800:t.inputsData.averageSalary);e.socialContributions=Math.round(t.inputsData.staffCount*t.inputsData.averageSalary*(t.percentOfStaffSalaryTax/100)),a.socialContributions=Math.round(n*t.inputsData.staffCount*(t.percentOfStaffSalaryTax/100)),e.incomeTax=Math.round(t.inputsData.staffCount*t.inputsData.averageSalary*(t.percentOfIncomeTax/100)),a.incomeTax=Math.round(t.inputsData.staffCount*t.inputsData.averageSalary*(t.percentOfParkIncomeTax/100)),"УСН(6%)"===t.taxesSystem?e.profitTax=0:e.profitTax=Math.round(t.inputsData.plannedRevenue*(t.inputsData.returnOnSales/100)*(t.percentOfParkProfitTax/100)),a.profitTax=0,e.taxesSum=e.socialContributions+e.incomeTax+e.profitTax,a.taxesSum=a.socialContributions+a.incomeTax+a.profitTax,t.monthSaving=e.taxesSum-a.taxesSum,t.yearSaving=12*t.monthSaving,t.showResults()}}})}),window.addEventListener("load",function(){for(var u=document.getElementById("canvas_calculator"),f=u.getContext("2d"),p=(u.width=window.innerWidth,u.height=window.innerHeight+180,[]),h=100,x={x:0,y:0},t=0;t<130;t++)p.push({x:Math.random()*u.width,y:Math.random()*u.height,radius:+Math.random()+1,vx:Math.floor(50*Math.random())-25,vy:Math.floor(50*Math.random())-25});function d(t,a){var e=0,n=0,e=a.x-t.x;return e*=e,n=a.y-t.y,n*=n,Math.sqrt(e+n)}u.addEventListener("mousemove",function(t){x.x=t.clientX,x.y=t.clientY}),function t(){f.clearRect(0,0,u.width,u.height),f.globalCompositeOperation="lighter";for(var a=0,e=p.length;a<e;a++){var n=p[a];f.fillStyle="#00a9e5",f.beginPath(),f.arc(n.x,n.y,n.radius,0,2*Math.PI),f.fill(),f.fillStyle="black",f.stroke()}for(f.beginPath(),a=0,e=p.length;a<e;a++){var i=p[a];f.moveTo(i.x,i.y),d(x,i)<150&&f.lineTo(x.x,x.y);for(var r=0,e=p.length;r<e;r++){var o=p[r];d(i,o)<150&&f.lineTo(o.x,o.y)}}f.lineWidth=.05,f.strokeStyle="#00a9e5",f.stroke();for(var s=0,l=p.length;s<l;s++){var c=p[s];c.x+=c.vx/h,c.y+=c.vy/h,(c.x<0||c.x>u.width)&&(c.vx=-c.vx),(c.y<0||c.y>u.height)&&(c.vy=-c.vy)}requestAnimationFrame(t)}()});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:94:"/local/templates/html/components-template/calculator-feedback-form/script.min.js?1696580295203";s:6:"source";s:80:"/local/templates/html/components-template/calculator-feedback-form/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(t){$(".btn--light:not([data-toggle])").click(function(){$("html,body").animate({scrollTop:$(".calculator-form-section").offset().top},0,"linear")})});
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
;; /* /local/templates/html/components-template/advatages-list/script.min.js?1607604075244*/
; /* /local/templates/html/components-template/map-tab/script.min.js?1607604085376*/
; /* /local/templates/html//components-template/tabs/script.min.js?1673342871269*/
; /* /local/templates/html/components-template/calculator/script.min.js?16970901173793*/
; /* /local/templates/html/components-template/calculator-feedback-form/script.min.js?1696580295203*/
; /* /bitrix/components/slam/easyform/script.js?160413794918081*/
