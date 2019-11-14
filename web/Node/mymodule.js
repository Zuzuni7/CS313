'use strict'
const fs = require('fs');
const path = require('path');

module.exports = function(directory,extension,callback)
{
    var fileList = [];
    fs.readdir(directory, function(err, list)
    {
        if (err)
        {
            callback(err);
        }
        else {
            list.forEach(function(item) {

                if(path.extname(item) === "."+extension)
                {
                    fileList.push(item);
                }
            });
            callback(null,fileList);
        }
    })
}

