var module = require('http');

var expressModule = require('express');

var server = module.createServer();
var host = 'localhost';
var port = 8000;
server.on('request', requestHandler);
server.listen(port, host, ()=> {
	console.log('The server is running!');
}
);
function requestHandler(request, response){
	console.log('You have responded to the request');
}
