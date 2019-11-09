var mymodule = require('./mymodule');

mymodule(process.argv[2],process.argv[3],function(err,files){
    if (err) {
        console.err(err);
    }
    else {
        files.forEach(function(filename){
            console.log(filename);
        })
    }
})