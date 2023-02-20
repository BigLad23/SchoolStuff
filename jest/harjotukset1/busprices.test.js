const {busPrices} = require("./harjotukset1")

test('Passanger age is 22', () => {
    expect(busPrices(22)).toBe(1.5);
});

test ('Passanger age is 6', () => {
    expect(busPrices(6)).toBe(0);
});

test ('Passanger age is 7', () => {
    expect(busPrices(7)).toBe(1);
});

test ('Passanger age is 65', () => {
    expect(busPrices(65)).toBe(1.5);
});
