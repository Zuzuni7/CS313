//console.log(process.argv);

var sum = 0;
process.argv.forEach((val) => {
    num = Number(val);
    //console.log(sum);
    if (Number.isNaN(num))
    {
       num = "";
    }
    else
    {
        sum += num;
    }
    
});
console.log(sum);