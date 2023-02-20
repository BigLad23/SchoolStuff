const {numberDivision} = require("./harjotukset1")

test('divides 4 with 2', () => {
    expect(numberDivision(4, 2)).toBe(2);
});

test('divides 2 with 4', () => {
    expect(numberDivision(2, 4)).toBe(0.5);
});

test('Nothing inserted', () => {
    expect(() => {numberDivision()}).toThrow('No numbers inserted');
}); 

test('Dividing with 0', () => {
    expect(() => {numberDivision(5, 0)}).toThrow('Cant divide with 0');
});