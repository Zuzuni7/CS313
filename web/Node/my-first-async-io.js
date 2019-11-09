const fs = require('fs');

fs.readFile(process.argv[2], "utf8", (err, data)=>{
    if (err)
    {
        return console.log(err);
    }
    total = data.split("\n").length;
    console.log(total - 1);
}); 

//function callback (err, data) {};

