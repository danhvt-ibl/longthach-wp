jQuery(function($){function add_quantity_buttons(){$('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />')}
add_quantity_buttons();$(document).ajaxComplete(function(){add_quantity_buttons();change_quntity_input_type();$('.mk-modal').find('.plus, .minus').off('click').on('click',function(){handle_quantity_buttons($(this))})});$(document).on('click','.plus, .minus',function(){handle_quantity_buttons($(this))});$(document).ready(function(){change_quntity_input_type()});function change_quntity_input_type(){$('.woocommerce-page, .woocommerce').find('.quantity .qty').attr("type","text")}
function handle_quantity_buttons($elem){var $qty=$elem.closest('.quantity').find('.qty'),currentVal=parseFloat($qty.val()),max=parseFloat($qty.attr('max')),min=parseFloat($qty.attr('min')),step=$qty.attr('step');if(!currentVal||currentVal===''||currentVal==='NaN')currentVal=0;if(max===''||max==='NaN')max='';if(min===''||min==='NaN')min=0;if(step==='any'||step===''||step===undefined||parseFloat(step)==='NaN')step=1;if($elem.is('.plus')){if(max&&(max==currentVal||currentVal>max)){$qty.val(max)}else{$qty.val(currentVal+parseFloat(step))}}else{if(min&&(min==currentVal||currentVal<min)){$qty.val(min)}else if(currentVal>0){$qty.val(currentVal-parseFloat(step))}}
$qty.trigger('change')}});