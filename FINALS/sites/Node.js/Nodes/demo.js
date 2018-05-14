var module = require('fs');

module.readFile('file.txt', funtion (err, data, haha) {
        if(err){
            return console.error(err);
        } 
        console.log(data.toString());
        });
console.log("Ending Program!!!");