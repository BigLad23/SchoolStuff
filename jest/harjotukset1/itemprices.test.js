const {itemPrice} = require('./harjotukset1')

test ('No negative numbers', () => {
    expect(() => {itemPrice(-2,-2,false)}).toThrow('No negative numbers');
});

test ('Price is 30, ALV is 24% and is a loyal customer', () => { 
    expect(itemPrice(30, 24, true)).toBe(37.2);
});

test ('Price is 50, ALV is 24% and isnt a loyal customer', () => {
    expect(itemPrice(50, 24, false)).toBe(62);
});

test ('Price is 150, ALV is 14% and is a loyal customer', () => {
    expect(itemPrice(150, 14, true)).toBe(171);
});

test ('Price is 260, ALV is 14% and isnt a loyal customer', () => {
    expect(itemPrice(260, 14, false)).toBe(266.76);
})

test ('No price, alv is 24 and isnt a loyal customer', () => {
    expect(() => {itemPrice("haha", 24, false)}).toThrow('No price inserted');
});

test ('Price is 50, No ALV and is a loyal customer', () => {
    expect(() => {itemPrice(50, "haha", false)}).toThrow('No ALV inserted');
});