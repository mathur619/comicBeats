

function userlogin(argument) {
	var f = document.createElement("form");
f.setAttribute('method',"post");
f.setAttribute('action',"submit.php");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"username");
i.setAttribute('label',"Username");

var b1 = document.createElement("br");

var p = document.createElement("input"); //input element, Submit button
p.setAttribute('type',"text");
p.setAttribute('name',"password");
p.setAttribute('label',"Password");

var b2 = document.createElement("br");

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('name',"submit");
s.setAttribute('value',"submit");


f.appendChild(i);
f.appendChild(p);
f.appendChild(s);

//and some more input elements here
//and dont forget to add a submit button

document.getElementById('content').appendChild(f);

	// document.getElementById('content').innerHTML=f;
}
document.getElementById('login').onclick=function (){userlogin()};