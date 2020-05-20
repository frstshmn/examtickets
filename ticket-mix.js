$('#give_tickets').click(function(event) {
	let list = $('#persons').val().split('\n');

	let ticket_numbers = [];

	let l = list.length;
	while(ticket_numbers.length < l){
		//alert(ticket_numbers.length + '' + l);
		let r = getRndInteger(1, l)
		if(ticket_numbers.indexOf(r) === -1) 
			ticket_numbers.push(r);
	}

	$('.list-item').remove();
	$.each(list, function(index, value) {
		
		$('#result').append('<p class="list-item"><b>'+ ticket_numbers[index] +'</b> - '+ value +'<p>')
	});
});

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}