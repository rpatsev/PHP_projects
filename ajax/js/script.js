'use strict';

var block = document.getElementById('news');
var update = document.getElementById('update');

function updateData(){

	var x = new XMLHttpRequest;
	x.open('GET', '../ajax/news.php');
	x.addEventListener('loadend', function(){
		block.textContent = x.response;
		update.addEventListener('click', updateData);
	});
	block.innerHTML += '<br>loading...</br>';
	x.send();
	update.removeEventListener('click',updateData);

	
}

let a = [1,2,3,4];

let b = a.map(
	(item) => {
		return item * item;
	}
);

console.log(b);


let [i,j,k] = [1,2,3];

console.log(i,j,k);
