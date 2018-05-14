var eventModule = require('events');
var eventEmitter = new eventModule.EventEmitter();

//listener #1
var listener1 = function listner1(){
    console.log('listner1 executed');
}

//listener #2
var listener2 = function listner2(){
    console.log('listner2 executed');
}

//Bind the connection event with the listner1 function
eventEmitter.addListener('connection',listener1);

//Bind the connection event with the listner1 function
eventEmitter.on('connection', listener2);

var eventListeners = require('events').EventEmitter.listenerCount(eventEmitter, 'connection');
console.log(eventListeners+ "Listener(s) listening to connection event");

//fire the connection event
eventEmitter.emit('connection');

//Remove the binding of listener1 function
eventEmitter.removeListener('connection', listener1);
console.log('Listner1 will not listen now');

//fire the connection event again
eventEmitter.emit('connection');

eventListeners = require('events').EventEmitter.listenerCount(eventEmitter, 'connection');
console.log(eventListeners + " Listner(s) listening to connection event");

console.log("Program ended");