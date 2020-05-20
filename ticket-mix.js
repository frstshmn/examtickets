$('#give_tickets').click(function(event) {
	let ticket_numbers = [];
	$('.list-item').remove();

	$.each($('#persons').val(), function(index, value) {
		$('#result').append('<p class="list-item">'+value+'<p>')
	});
});

function randomInt(min, max) {
	return min + Math.floor((max - min) * Math.random());
}

function randomFloat(min, max) {
    return min + (max - min) * Math.random();
}