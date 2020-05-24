$('#give_tickets').click(function(event) {
	alert('Технічне обслуговування, вибачте за незручності');
	let list = $('#persons').val().split('\n');
	let ticket_numbers = [];
	
	alert($('#tickets_count').val());
	let l = list.length;

	if ($('#tickets_count').val() === 4){
		let l = $('#tickets_count').val();
	}
	
	let lucky_ticket = getRndInteger(1, l);

	while(ticket_numbers.length < l){
		let r = getRndInteger(1, l);
		if(ticket_numbers.indexOf(r) === -1) 
			ticket_numbers.push(r);
	}

	$('.list-item').remove();
	$.each(list, function(index, value) {
		if (ticket_numbers[index] == lucky_ticket){
			$('#result').append('<p class="list-item"><b>'+ ticket_numbers[index] +'</b><i class="fas fa-star text-warning"></i> - '+ value +'<p>');
		}
		else {
			$('#result').append('<p class="list-item"><b>'+ ticket_numbers[index] +'</b> - '+ value +'<p>');
		}
	});
});

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}