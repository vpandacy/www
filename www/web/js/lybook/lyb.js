
$(function (){
	
	var textaera = $('#lyb .lybRight .textarea textarea');
	var textBox = $('#lyb .lybRight .textarea .textBox');
	var Input = $('#lyb .lybRight dl dd div input');

	
	textaera.on('focus',function (){
		if($(this).val()==''){
			$(this).parent().addClass('lyb_avtive');
			if($(this).parent().find('.error').is(':visible')){
				$(this).parent().find('.error').show();
			}else{
				$(this).parent().find('.error').hide();
			}
			
		}
		textBox.show();
	});
	
	textaera.on('blur',function (){
		if($(this).val()==''){
			$(this).parent().find('.error').fadeIn().animate({
				'top' : '-10px'
			});
			$(this).parent().addClass('lyb_avtive');
			return false;
		}else{
			$(this).parent().find('.error').hide();
			$(this).parent().removeClass('lyb_avtive');
		}

	});
	
	
	
	textBox.find('em').on('click',function (){
		textBox.hide();
	});
	textBox.find('li').on('click',function (){
		textaera.val(textaera.val()+$(this).text()+'\n');
	});
	
	
	
	Input.on('focus',function (){
		if($(this).val()==''){
			$(this).parent().addClass('lyb_avtive');
			
			if($(this).parent().find('.error').is(':visible')){
				$(this).parent().find('.error').show();
			}else{
				$(this).parent().find('.error').hide();
			}			
		}
	});
	
	
	Input.on('blur',function (){
		if($(this).val()==''){
			$(this).parent().find('.error').fadeIn().animate({
				'top' : '-10px'
			});
			$(this).parent().addClass('lyb_avtive');
			return false;
		}else{
			$(this).parent().find('.error').hide();
			$(this).parent().removeClass('lyb_avtive');
		}
	});	
	

	
})





