$('h3')
	.click(
		function()
		{
			var srcf=$(this).find('span').text();
			$('#frame')
				.hide()
				.attr('src',srcf)
				.fadeIn('slow');
		}
	);

$('.list tr:even')
	.css('background-color','#9BAFCB');

$('.tdform:even')
	.css('background-color','#9BAFCB');
	
$('.tdform + td')
	.css('background-color','#9BAFCB');
	

$('.rightdiv')
	.find('.invoice tr:first')
	.css('background-color','#9b9b9d')
	.end()
	.find('.invoice tr:eq(3)')
	.css('background-color','#9b9b9d')
	.end()
	.find('.invoice tr:eq(4)')
	.css('background-color','#9BAFCB');
	
	
	
	
// $('.rightdiv')	
	// .find('.invoice tr:eq(3)')
	// .css('background-color','#9b9b9d');
	
	
