$(window).bind('load', function() {
	$('body').delegate('form','submit.generic',form_submit_generic);
	$('body').delegate('form.ajax','submit.ajax',form_post_submit_ajax);
	$('body').delegate('button[mode=cancel]','click.generic',button_cancel_click_generic);
});
function button_cancel_click_generic (e) {
	window.history.back();
}
function form_post_submit_ajax(e) {
	e.preventDefault();
	var form = this;
	var $submit = $('input[type="submit"],button[type="submit"]');
	var url = $(form).prop('action') + '/1/';
	var _data = {};
	var inputs = $(form).find(':input:not(:disabled)');
	inputs.each(function(index,element) {
		_data[element.name] = element.value.trim();
	});
	$.ajax({
		'type'		: 'POST',
		'url'		: url,
		'data'		: _data,
		'beforeSend': function (jqXHR, settings) {
			$submit.prop('disabled',true);
		},
		'complete'	: function (jqXHR, textStatus) {
			$submit.prop('disabled',false);
		},
		'success'	: function (data,textStatus, jqXHR) {
			try {
				var jData = JSON.parse(data);
				if (jData.errno) {
					console.log(jData.error);
					return;
				}
				if (form.success) {
					form.success(data, textStatus, jqXHR);
				} else {
					window.history.back();
				}
			} catch (ex) {
				console.log(ex.message + "\n" + data);
			}
		}
	});
	return false;
}
function form_submit_generic (e) {
	var allow_submit = true;
	$('input[required]:not(:disabled):not([novalidate])',this).each(function (index, element) {
		if (element.value == "") {
			$(element).addClass('val-error');
			console.log('Required input not filled');
			allow_submit = false;
		} else {
			$(element).removeClass('val-error');
		}
	});
	$('input[pattern]:not(:disabled):not([novalidate])',this).each(function (index, element) {
		var format = $(element).attr('pattern');
		var regexp = new RegExp(format,'');
		if (!regexp.test(element.value)) {
			$(element).addClass('val-error');
			console.log('Pattern in input does not match');
			allow_submit = false;
		} else {
			$(element).removeClass('val-error');
		}
	});
	$('select[required]:not(:disabled):not([novalidate])',this).each(function (index, element) {
		if (element.value == "") {
			$(element).addClass('val-error');
			console.log('Required select not properly selected');
			allow_submit = false;
		} else {
			$(element).removeClass('val-error');
		}
	});
	$('select[exclude]:not(:disabled):not([novalidate])',this).each(function (index, element) {
		var exclude = false;
		var excludes = $(element).attr('exclude').split(';');
		for (var i = 0; i < excludes.length; i++) {
			if (element.value == excludes[i]) {
				allow_submit = false;
				exclude = true;
			}
		}
		if (exclude) {
			$(element).addClass('val-error');
			console.log('Required select has selected invalid excluded values');
		} else {
			$(element).removeClass('val-error');
		}
	});
	var valErrors = $('input.val-error');
	if (valErrors.length > 0) {
		// allow_submit = false;
		console.log('Custom validation error found');
	}
	if (!allow_submit) {
		$(this).find('.val-error').first().focus();
	}
	return allow_submit;
}
var browserHelper = {
	"supportsInput"	: function (type) {
		var i = document.createElement("input");
		i.setAttribute("type",type);
		return i.type !== "text";
	}
}