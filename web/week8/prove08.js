
const http = require('http');
const fs = require('fs');
const path = require('path')
const url = require('url')

//const hostname = process.argv[1];
const port = process.argv[2];
const filepath = process.argv[3];
//const json = process.argv[4];

const server = http.createServer(onRequest);
server.listen(port);

function onRequest(req,response) {
    console.log(`Got a request for ${req.url}`);
    
    if (req.url == "/getData")
    {
        readFile = fs.readFileSync(filepath);
        let str = JSON.parse(readFile);
        console.log(str);
        
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write(readFile);
        response.end();
    }
    else if (req.url == "/home")
    {
        response.writeHead(404,{'Content-Type': 'text/html'});
        error = fs.readFileSync('./error.html');
        response.write(error);
        response.end();
    }
    else
    {
        console.log("else case")
        response.writeHead(404,{'Content-Type': 'text/html'});
        error = fs.readFileSync('./error.html');
        response.write(error);
        response.end();
    }
    console.log("End response.")
    response.end();
}

console.log("Listening...");

/**************************************************************
* Other Solution I tried...                                                            *
**************************************************************/
//making a paths object with the values for each type of input
//let paths = JSON.parse(fs.readFileSync('./paths.json'));
//
//paths[filepath] = doSomething(filepath);
//callback function
// function onRequest(req,response) {
//     console.log(`Got a request for ${req.url}`);
//     if(req.url = '/getData')
//     {
//         try {
//             let path = paths[req.url];
//             response.writeHead(path.resCode,{"Content-Type" : path.contentType})
//             let content = fs.readFileSync(path.filepath);
//             response.write(content);
//         }
//         catch (err) {
//             //console.log(err);
//             response.writeHead(404, {"Content-Type" : "text/html"});
//             let errorMessage = "<h1>Error 404: Page not found!</h1>";
//             response.write(errorMessage);
//         }
//     }
//     response.end()
// }

// function doSomething(path) {
//     return {
//         responseCode: 200,
//         contentType: "text/html",
//         filepath: `.${path}`
//     }
// }