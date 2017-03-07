$('li.a').css('color','red').css('font-weight','800');
$('li').css('text-decoration','underline');

$('.toggle').on('click', ()=> {$('ul').toggle(600);})

function getData(){
	$.ajax({
		url: 'text.html',
		dataType: 'jsonp',
		success: (data) => {
			$('.content').text(data);
		}
	});
}
$('.ajax').on('click', getData);

//$('.ajax').on('click', ()=> $('.content').load('/text.html'));