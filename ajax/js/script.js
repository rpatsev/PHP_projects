'use strict';

var block = document.getElementById('news');
var update = document.getElementById('update');

var x;

update.addEventListener('click', f1);
function f1(){
	block.textContent +=  '!';

	x = new XMLHttpRequest;
	x.open('GET', '../ajax/news.php');
	x.addEventListener('loadend', function(){
		console.log(x);
	});
	x.send();
	
}