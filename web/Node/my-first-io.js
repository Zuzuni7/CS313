const fs = require('fs');

buffer = fs.readFileSync(process.argv[2]);

const string = buffer.toString();
number = string.split("\n").length;

console.log(number - 1);
