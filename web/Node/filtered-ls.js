var fs = require("fs");
var path = require("path");

 module.exports = function (dir, extension, callback) {
     var array = [];
    fs.readdir(dir,function(err,files){
        if(error){
            callback(error);
        }else{
            files.forEach(function(fileName){
                if(path.extname(fileName) === "."+extension){
                    array.push(fileName);
                }
            });
            callback(null,array);
        }
    })     
 }  