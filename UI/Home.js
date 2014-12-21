// JavaScript Document
function clickCreate()
{
	var node = '';
	var inner = "hello world";
	var form = '';
	var button = document.createElement('input');
	button.type = 'submit';
	
	localDoc = document;
	node = locaDoc.getElementById('Display');
	form = document.createElement('form');
	form.action = "";
	form.method = "GET";
	 node.appendChild(form);
}
