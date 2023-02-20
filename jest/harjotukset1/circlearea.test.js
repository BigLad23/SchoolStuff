const {surfaceArea} = require("./harjotukset1")

test('checks surface area of the circle', () => {
    expect(surfaceArea(2)).toBe(12.57);
});
test('checks surface area of the circle', () => {
    expect(surfaceArea('2')).toBe(12.57);
});
test('characters were inserted, throws a exception', () => {
    expect(() => {
        surfaceArea("kaksi")}).toThrow('Please insert numbers');
});
test('parameters are missing', () => {
    expect(()=> {
        surfaceArea()}).toThrow('Please insert numbers');
});
test('Gives a negative number', ()=>{
    expect(()=>{
        surfaceArea(-1)}).toThrow('No negative numbers');
});