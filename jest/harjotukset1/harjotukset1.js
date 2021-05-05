//ikä homma

const ageTest = (age) => {
    console.log(age);
   if(age === undefined || age === null) {
       throw new Error('ala-ikäinen tai ei parametrejä lisätty');
   }
   if (age >= 18) {
       return true;
   } else {
       return false;
   } 
}


// jako homma

const numberDivision =  (a, b) => {
    let numA = Number(a);
    let numB = Number(b);
    console.log("result:" + numA + " / " + numB)
    if (a === undefined || a === null || b === undefined || b === null) {
        throw new Error('no numbers inserted');
    }
    if (Number.isNaN(numA) || Number.isNaN(numB)) {
        throw new Error('insert numbers');
    }
    return numA / numB;
}


// bussi homma

const busPrices = (passangerAge) => {
    console.log(passangerAge)
    if (passangerAge === undefined || passangerAge === null) {
        throw new Error('no age was inserted')
    }
    if (passangerAge < 7) {
        return 0;
    } else if (passangerAge < 16) {
        return 1;
    } else if (passangerAge < 25 || passangerAge === 16 || passangerAge === 25) {
        return 1.5;
    } else if (passangerAge > 25 || passangerAge === 65) {
        return 3;
    } else if (passangerAge > 65) {
        return 1.5;
    }
}
const surfaceArea = (r) => {
    let radius = Number(r)
    if (radius === undefined || radius === null) {
        throw new Error('insert radius')
    }
    let radius2 = Math.PI * (radius * radius);
    let finalRadius = Math.round(radius2*100)/100
    return finalRadius;
    
}

module.exports = {ageTest, numberDivision, busPrices, surfaceArea};