
const express = require('express');

gameEngine = require('./gameEngine.js');

var app = express();

//use different pieces of code and inject them into different places
app.set('port', process.env.PORT || 5000)
    .use(express.static(__dirname + '/public'))
    .set('views', __dirname + '/views')
    .set('view engine', 'ejs')
    .get('/', function(req,res){
        res.sendFile('form.html', {root: __dirname + "/public"});
    })
    .get('/game', gameEngine.playGame)
    .listen(app.get('port'), function(){
        console.log('Listening on Port: ' + app.get('port'));
    });
