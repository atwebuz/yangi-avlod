
; /* Start:"a:4:{s:4:"full";s:79:"/local/templates/html/components-template/accordion/script.min.js?1607604074226";s:6:"source";s:65:"/local/templates/html/components-template/accordion/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(e){window.vendorLoader({name:"collapse",path:"/local/templates/html/js/vendor/collapse.min.js",event:{scroll:!0,click:!0,mouseover:{trigger:'[data-toggle="collapse"]'}}})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:77:"/local/templates/html/components-template/content/script.min.js?1608539889324";s:6:"source";s:63:"/local/templates/html/components-template/content/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(e){window.reinit.slider.article=function(){$(".js-article-slider").each(function(e,i){$(".article-slider-img-wrap").length;window.slam_slider({el:i,args:{autoHeight:!0,lazy:!0,loop:!1,slidesPerView:1,spaceBetween:0,watchOverflow:!0}})})},window.reinit.slider.article()});
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
;
; /* Start:"a:4:{s:4:"full";s:87:"/local/templates/html/components/bitrix/main.file.input/ffile/script.js?160673119214114";s:6:"source";s:71:"/local/templates/html/components/bitrix/main.file.input/ffile/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
;(function(){

	var BX = window.BX;
	if (BX["MFInput"])
		return;
	var repo = {},
		uploader = (function(){
		var d = function(params) {
			try {
				this.params = params;
				this.controller = BX("mfi-" + params.controlId);
				this.button = BX("mfi-" + params.controlId + "-button");
				this.editor = null;
				if(BX("mfi-" + params.controlId + "-editor")) {
					this.editor = new BX.AvatarEditor({enableCamera : params.enableCamera});
					BX.addCustomEvent(this.editor, "onApply", BX.delegate(this.addFile, this));
					BX.bind(BX("mfi-" + params.controlId + "-editor"), "click", BX.delegate(this.editor.click, this.editor));
				}
				this.init(params);
				repo[params.controlId] = this;
				this.template = BX.message('MFI_THUMB2').replace("#input_name#", this.params.inputName);
				window["FILE_INPUT_" + params.controlId] = this; // for compatibility. Do not use
				this.INPUT = BX("file_input_" + params['controlId']); // for compatibility. Do not use

			}
			catch (e) {
				BX.debug(e);
			}
		};
		d.prototype = {
			init : function(params) {
				this.agent = BX.Uploader.getInstance({
					id : params['controlId'],
					CID : params['controlUid'],
					streams : 1,
					uploadFormData : "N",
					uploadMethod : "immediate",
					uploadFileUrl : params["urlUpload"], //'/bitrix/tools/upload.php?lang=' + BX.message("LANGUAGE_ID"),
					allowUpload : params["allowUpload"],
					allowUploadExt : params["allowUploadExt"],
					uploadMaxFilesize : params["uploadMaxFilesize"],
					showImage : false,
					sortItems : false,
					input : BX("file_input_" + params['controlId']),
					dropZone : this.controller.parentNode,
					placeHolder : this.controller,
					fields : {
						thumb : {
							tagName : "",
							template : BX.message("MFI_THUMB")
						}
					}
				});

				this.fileEvents = {
					onFileIsAttached : BX.delegate(this.onFileIsAttached, this),
					onFileIsAppended : BX.delegate(this.onFileIsAppended, this),
					onFileIsBound : BX.delegate(this.onFileIsBound, this),
					onFileIsReadyToFrame : BX.delegate(this.onFileIsReadyToFrame, this),

					onUploadStart : BX.delegate(this.onUploadStart, this),
					onUploadProgress : BX.delegate(this.onUploadProgress, this),
					onUploadDone : BX.delegate(this.onUploadDone, this),
					onUploadError : BX.delegate(this.onUploadError, this),
					onUploadRestore : BX.delegate(this.onUploadRestore, this)
				};

				BX.addCustomEvent(this.agent, "onAttachFiles", BX.delegate(this.onAttachFiles, this));
				BX.addCustomEvent(this.agent, "onQueueIsChanged", BX.delegate(this.onQueueIsChanged, this));
				BX.addCustomEvent(this.agent, "onFileIsInited", BX.delegate(this.onFileIsInited, this));
				BX.addCustomEvent(this.agent, "onPackageIsInitialized", BX.delegate(function(pack) {
					var t = {
						mfi_mode : "upload",
						cid : this.agent.CID,
						moduleId : this.params["moduleId"],
						forceMd5 : this.params["forceMd5"],
						allowUpload : this.agent.limits["allowUpload"],
						allowUploadExt : this.agent.limits["allowUploadExt"],
						uploadMaxFilesize : this.agent.limits["uploadMaxFilesize"],
						mfi_sign : this.params["controlSign"]
					}, i;
					for (i in t)
					{
						if (t.hasOwnProperty(i) && t[i])
						{
							pack.post.data[i] = t[i];
							pack.post.size += ((i + "").length + (t[i] + "").length)
						}
					}
				}, this));
                
				var ar1 = [], ar2 = [], name, id,
					values = BX.findChildren(this.controller, {tagName : "LI"});
				for (var ii = 0; ii < values.length; ii++)
				{
					name = BX.findChild(values[ii], {attribute : {"data-bx-role" : "file-name"}}, true);
					id = BX.findChild(values[ii], {attribute : {"data-bx-role" : "file-id"}}, true);
					if (name && id)
					{
						ar1.push({ name : name.innerHTML,  file_id : id.value});
						ar2.push(values[ii]);
					}
				}
				this.agent.onAttach(ar1, ar2);
				this.inited = true;
				this.checkUploadControl();

			},
			checkUploadControl : function() {
				if (BX(this.button))
				{

					if (!(this.params["maxCount"] > 0 && this.params["maxCount"] <= this.agent.getItems().length))
					{
						this.button.removeAttribute("disable");
					}
					else if (this.params["maxCount"] == 1)
					{
						// TODO smth
					}
					else //  && this.params["maxCount"] >= this.agent.getItems().length
					{
						this.button.setAttribute("disable", "Y");
					}
				}
			},
			onQueueIsChanged : function() {

				if (this.params['maxCount'] > 0)
				{
					this.checkUploadControl();
				}
			},
			onAttachFiles : function(files) {
				var error = false, n;

				if (files && this.inited === true && this.params['maxCount'] > 0)
				{
					if (this.params['maxCount'] == 1 && files.length > 0)
					{
						while (this.agent.getItems().length > 0)
						{
							this.deleteFile(this.agent.getItems().getFirst(), false);
						}

						while (files.length > 1)
							files.pop();
					}
					var acceptableL = this.params['maxCount'] - this.agent.getItems().length;
					acceptableL = (acceptableL > 0 ? acceptableL : 0);
					while (files.length > acceptableL)
					{
						files.pop();
						error = true;
					}
				}
				if (error)
				{
					this.onError("Too much files.");

				}
				BX.onCustomEvent(this, 'onFileUploaderChange', [files, this]);
				return files;
			},
			onFileIsInited : function(id, file) {

				for (var ii in this['fileEvents'])
				{
					if (this['fileEvents'].hasOwnProperty(ii))
						BX.addCustomEvent(file, ii, this['fileEvents'][ii]);
				}

			},
			onFileIsAppended : function(id, item) {
				// append canvas
				var node = this.agent.getItem(id);
				this.bindEventsHandlers(node.node, item);
			},
			onFileIsBound : function(id, item) {
				var node = this.agent.getItem(id);
				this.bindEventsHandlers(node.node, item);
			},
			bindEventsHandlers : function(node, item) {
				var n = BX.findChild(node, {attribute : {"data-bx-role" : "file-delete"}}, true), n1;
				if (n)
					BX.bind(n, "click", BX.proxy(function(){
						this.deleteFile(item);
				}, this));

				n = BX.findChild(node, {attribute : {"data-bx-role" : "file-preview"}}, true);
				if (n)
				{
					n.removeAttribute("data-bx-role");
					if (item.file.parentCanvas)
					{
						var
							props = BX.UploaderUtils.scaleImage(item.file.parentCanvas, { width : 100, height : 100}, "exact"),
							c = BX.create("CANVAS", {props : {width : 100, height : 100}});
						n.appendChild(c);
						c.getContext("2d").drawImage(item.file.parentCanvas, props.source.x, props.source.y, props.source.width, props.source.height, 0, 0, props.destin.width, props.destin.height);
						item.canvas = c;
					}
				}
				item.file.parentCanvas = null;
				n = BX.findChild(node, {tagName : "A", attribute : {"data-bx-role" : "file-name"}}, true);
				if (n)
				{
					if (this.editor && ((n1 = BX.findChild(node, {tagName : "CANVAS"}, true)) && n1 || (n1 = BX.findChild(node, {tagName : "IMG"}, true)) && n1))
					{

						BX.bind(n, "click", BX.proxy(function(e) {
							BX.PreventDefault(e);
							this.editor.showFile({name : n.innerHTML, tmp_url : n.href});
							return false;}, this));
					}
					else if (n.getAttribute("href") === "#")
					{

						BX.bind(n, "click", BX.proxy(function(e) {
							BX.PreventDefault(e);
							return false;}, this));
					}
				}
			},
			addFile : function(file, canvas) {
				file.name = (file["name"] || 'image.png');
				file.parentCanvas = canvas;
				this.agent.onAttach([file]);
			},
			deleteFile : function(item) {
				var pointer = (item ? this.agent.getItem(item.id) : false);
				if (!pointer)
					return;
				item = pointer.item;

				var node = pointer.node;
				var newInput;
				if (item.file["justUploaded"] === true && item.file["file_id"] > 0)
				{
					var data = {
						fileID : item.file["file_id"],
						sessid : BX.bitrix_sessid(),
						cid : this.agent.CID,
						mfi_mode : "delete"
					};
					BX.ajax.post(this.agent.uploadFileUrl, data);
				}
				else
				{

					var parentNode = node.parentNode.parentNode,
						n = BX.findChild(node, {tagName : "INPUT", attribute : { "data-bx-role" : "file-id"} }, true );
					if (n)
					{
						var name = n.name,
							v = n.value,
							nDelNameCompat = name + '_del',
							nDelName = this.agent.id + '_deleted[]';

						if (name.indexOf('[') > 0)
						{
							nDelNameCompat = name.substr(0, name.indexOf('[')) + '_del' + name.substr(name.indexOf('['));
						}

						newInput = BX.create("INPUT", { props : {
							name : name,
							type : "hidden",
							value : v}});
						parentNode.appendChild(newInput);
						var node1 = BX.create("INPUT", { props : {
							name : nDelNameCompat,
							type : "hidden",
							value : v}});
						parentNode.appendChild(node1);
						node1 = BX.create("INPUT", { props : {
							name : nDelName,
							type : "hidden",
							value : v}});
						parentNode.appendChild(node1);
					}
				}

				for (var ii in this['fileEvents'])
				{
					if (this['fileEvents'].hasOwnProperty(ii))
						BX.addCustomEvent(item, ii, this['fileEvents'][ii]);
				}

				BX.unbindAll(node);
				var fileId = (item.file ? item.file["file_id"] : null);
				delete item.hash;
				item.deleteFile('deleteFile');
				if (fileId)
				{
					BX.onCustomEvent(this, 'onDeleteFile', [fileId, item, this]);  // for compatibility
					BX.onCustomEvent(this, 'onFileUploaderChange', [[fileId], this]);  // for compatibility. Do not use
					if(!!newInput)
					{
						BX.fireEvent(newInput, 'change');
					}
				}
			},
			_deleteFile : function() { // for compatibility. Do not Use

			},
			clear : function() {
				while (this.agent.getItems().length > 0)
				{
					this.deleteFile(this.agent.getItems().getFirst(), false);
				}
			},
			onUploadStart : function(item) {

				var node = this.agent.getItem(item.id).node;
				if (node)
					BX.addClass(node, "uploading");
			},
			onUploadProgress : function(item, progress) {
				progress = Math.min(progress, 98);
				var id = item.id;
				if (!item.__progressBarWidth)
					item.__progressBarWidth = 5;
				if (progress > item.__progressBarWidth)
				{
					item.__progressBarWidth = Math.ceil(progress);
					item.__progressBarWidth = (item.__progressBarWidth > 100 ? 100 : item.__progressBarWidth);
					if (BX('wdu' + id + 'Progressbar'))
						BX.adjust(BX('wdu' + id + 'Progressbar'), { style : { width : item.__progressBarWidth + '%' } } );
					if (BX('wdu' + id + 'ProgressbarText'))
						BX.adjust(BX('wdu' + id + 'ProgressbarText'), { text : item.__progressBarWidth + '%' } );
				}
			},
			onUploadDone : function(item, result) {
                console.log("###");
				var node = this.agent.getItem(item.id).node,
					file = result["file"];
				if (BX(node))
				{
					BX.removeClass(node, "uploading");
					BX.addClass(node, "saved");

					var html = this.template, value;
					file["ext"] = item.ext;
					file["preview_url"] = (item.canvas ? item.canvas.toDataURL("image/png") : "/bitrix/images/1.gif");
					item.canvas = null;
					delete item.canvas;
					for (var ii in file)
					{
						if (file.hasOwnProperty(ii))
						{
							value = file[ii];
							if (ii.toLowerCase() === 'size')
								value = BX.UploaderUtils.getFormattedSize(value, 0);
							else if (ii.toLowerCase() === 'name')
								value = file["originalName"];
							html = html.replace(new RegExp("#" + ii.toLowerCase() + "#", "gi"), BX.util.htmlspecialchars(value)).replace(new RegExp("#" + ii.toUpperCase() + "#", "gi"), BX.util.htmlspecialchars(value));
						}
					}
					item.file.file_id = file["file_id"];
					item.file.justUploaded = true;
					item.name = file["originalName"];
					node.innerHTML = html;
					this.bindEventsHandlers(node, item);
					if (this.params.inputName.indexOf('[') < 0)
					{
						BX.remove(BX.findChild(node.parentNode.parentNode, {tagName : "INPUT", attr : {name : (this.params.inputName)}}, false));
						BX.remove(BX.findChild(node.parentNode.parentNode, {tagName : "INPUT", attr : {name : (this.params.inputName + '_del')}}, false));
					}
					BX.onCustomEvent(this, 'onAddFile', [file["file_id"], this, file, node]); // for compatibility
					BX.onCustomEvent(this, 'onUploadDone', [result["file"], item, this]);
					BX.fireEvent(BX('file-' + file["file_id"]), 'change');
				}
				else
				{
					this.onUploadError(item, result, this.agent);

				}
			},
			onUploadError : function(item, params, specify) {

				// TODO show Error
				var node = this.agent.getItem(item.id).node,
					error = BX.message("MFI_UPLOADING_ERROR");
				if (params && params.error)
					error = params.error;
				BX.removeClass(node, "uploading");
				BX.addClass(node, "error");
				node.appendChild(BX.create('DIV', {attrs : { className : "upload-file-error" }, html : error}));
				BX.onCustomEvent(this, 'onErrorFile', [item["file"], this]); // for compatibility
			},
			onError : function(stream, pIndex, data) {

				var defaultErrorText = 'Uploading error.',
					errorText = defaultErrorText, item, id;
				if (data)
				{
					if (data["error"] && typeof data["error"] == "string")
						errorText = data["error"];
					else if (data["message"] && typeof data["message"] == "string")
						errorText = data["message"];
					else if (BX.type.isArray(data["errors"]) && data["errors"].length > 0)
					{
						errorText = [];
						for (var ii = 0; ii < data["errors"].length; ii++)
						{
							if (typeof data["errors"][ii] == "object" && data["errors"][ii]["message"])
								errorText.push(data["errors"][ii]["message"]);
						}
						if (errorText.length <= 0)
							errorText.push('Uploading error.');
						errorText = errorText.join(' ');
					}
				}
				stream.files = (stream.files || {});

				for (id in stream.files)
				{
					if (stream.files.hasOwnProperty(id))
					{

						item = this.agent.queue.items.getItem(id);
						this.onUploadError(item, {error : errorText}, (errorText != defaultErrorText));
					}
				}
			}
		};
		return d;
	})();

	BX.MFInput = {
		init : function(params) {
			return new uploader(params);
		},
		get : function(controlId) {
			return (repo[controlId] || null);
		}
	}
})();

/* End */
;; /* /local/templates/html/components-template/accordion/script.min.js?1607604074226*/
; /* /local/templates/html/components-template/content/script.min.js?1608539889324*/
; /* /bitrix/components/slam/easyform/script.js?160413794918081*/
; /* /local/templates/html/components/bitrix/main.file.input/ffile/script.js?160673119214114*/
