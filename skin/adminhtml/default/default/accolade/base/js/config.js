document.observe("dom:loaded", function(){
	$$('select.magefi').each(function(e){
		var chosen = e.readAttribute('data-selected');
		e.getElementsBySelector('option').each(function(o){
			o.selected = o.readAttribute('value') == chosen;
		});
	});

	$$('#advanced_modules_disable_output select').each(function(e){
		e.writeAttribute('data-prev-value', e.getValue()).writeAttribute('data-default-value', e.getValue());
		e.up().up().addClassName('selected-' + e.getValue());

		$(e).observe('change', function(event){
			var el = event.target;
			var prev = el.readAttribute('data-prev-value');
			el.writeAttribute('data-prev-value', e.getValue());
			el.up().up().removeClassName('selected-' + prev).addClassName('selected-' + e.getValue());

			if(el.getValue() !== el.readAttribute('data-default-value')) el.up().up().addClassName('selected-changed');
			else el.up().up().removeClassName('selected-changed');
		});
	});

});