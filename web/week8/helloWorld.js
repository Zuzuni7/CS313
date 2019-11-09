const http = require('http');


http.createServer(function (req, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World!');
}).listen(8080);

//console.log("Now listening on port 8080");

onRequest();

