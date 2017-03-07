let a = Promise.resolve(5)

a.then(
	data => data + 2
).then(
	data => data * data
).then(
	data => console.log(data)
);

x = [1,2,3];

function f1(...x){
console.log('hello');
y = x*x;
return y;
}

f1(x);

