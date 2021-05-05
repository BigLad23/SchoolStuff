const {surfaceArea} = require("./harjotukset1")
describe.skip('sum-testit', () => {
test('checks surface area of the circle', () => {
    expect(surfaceArea(2)).toBe(12.57);
});
test('checks surface area of the circle', () => {
    expect(surfaceArea('2')).toBe(12.57);
});
test('characters were inserted, throws a exception', () => {
    expect(() => {
        surfaceArea('kaksi')}).toThrow('insert radius');
});
test('parameters are missing', () => {
    expect(()=> {
        surfaceArea()}).toThrow('insert radius');
});
})