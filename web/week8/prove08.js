
const http = require('http');
const fs = require('fs');

const hostname = process.argv[1];
const port = process.argv[2];
const filepath = process.argv[3];
//const json = process.argv[4];


const server = http.createServer(onRequest);
server.listen(port);

//console.log(str);

//callback function
function onRequest(req,response) {
    console.log(`Got a request for ${req.url}`);
    if (filepath == "./home/test.html")
    {
        response.writeHead(200,{'Content-Type': 'text/html'});
        response.write(filename);
        response.end();
    }
    else if (filepath == "./getData/text.json")
    {
        let str = JSON.parse(fs.readFileSync(filepath));
        //let data = fs.readFileSync("test.json");
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write(str);
        response.end();
    }
}


console.log("Listening...");

/**************************************************************
*                                                             *
**************************************************************/
