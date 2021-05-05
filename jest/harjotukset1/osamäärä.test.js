const {numberDivision} = require("./harjotukset1")
describe.skip('jako-testit', () => {
test('tekee jakolaskun', () => {
    expect(numberDivision(4, 2)).toBe(2);
});
})
