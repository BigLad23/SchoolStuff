//ikä homma

const ageTest = (age) => {
    console.log(age);
   if(age === undefined || age === null) {
       throw new Error('No age was inserted');
   }
   if (age < 0 ) {
         throw new Error('No negative numbers');
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
        throw new Error('No numbers inserted');
    }
    if (Number.isNaN(numA) || Number.isNaN(numB)) {
        throw new Error('Insert numbers');
    }

    if (numB === 0) {
        throw new Error('Cant divide with 0');
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
    } else if (passangerAge < 65) {
        return 3;
    } else {
        return 1.5;
    }
}

// pinta-ala homma

const surfaceArea = (r) => {
    let radius = Number(r)
    console.log(radius)
    if (radius === undefined || radius === null) {
        throw new Error('Nothing was inserted')
    }
    if (Number.isNaN(radius)) {
        throw new Error('Please insert numbers')
    }
    
    if (radius < 0) {
        throw new Error('No negative numbers')
    } else {
        radius = (Math.PI * radius * radius) * 100;
        return (Math.round(radius) / 100);
    }

}

// hinta/ALV homma

const itemPrice = (price, alv, customer) => {
    var customer = false
    var price = Number(price)
    var alv = Number(alv)
    var tax = (alv / 100) +1;
    console.log(price, alv, customer)

    if (Number.isNaN(price)) {
        throw new Error('No price inserted')
    }
    if (Number.isNaN(alv)) {
        throw new Error('No ALV inserted')
    }
    if (price < 0 || alv < 0) {
        throw new Error('No negative numbers')
    }
    if (customer = true) {
        if (price >= 50 && price < 150) {
            var withoutAlv = price * 0.975 ;
        }
        if (price >= 150 && price < 250) {
            var withoutAlv = price * 0.95 ;
        }
        if (price >= 250) {
            var withoutAlv = price * 0.9 ;
        } else {
            var withoutAlv = price;
        }

        var totalPrice = (withoutAlv * tax) * 100;

        return (Math.round(totalPrice) / 100);

    } else {

        var totalPrice = (price * tax) * 100;
        return (Math.round(totalPrice) / 100);


    }




}


module.exports = {ageTest, numberDivision, busPrices, surfaceArea, itemPrice};