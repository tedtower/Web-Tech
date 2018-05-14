//Import events module
var eventsModule = require('events');

//Create an EventEmitter object
var eventEmitter = new eventsModule.EventEmitter();

//Create an event handler as follows
var connectHandler = function connected(){
    console.log('connection successful!');
    
    //fire the data_received event
    eventEmitter.emit('data_received');
}

//Bind the connection event with the handler
eventEmitter.on('connection', connectHandler);

//bind the data_revceived event with the anonymous function
eventEmitter.on('data_received', function(){
    console.log('data received successfully!');
});

//fire the connection event
eventEmitter.emit('connection');

console.log('Program ended');