const sum = (a, b=0) =>{
    if(a === undefined || a === null){
        throw new Error('ei parametreja');
    }
    let numA = Number(a);
    let numB = Number(b);
    if(Number.isNaN(numA) || Number.isNaN(numB)) {
        throw new Error("anna parametreja");
    }
   
    return numA + numB;
}
module.exports = sum;