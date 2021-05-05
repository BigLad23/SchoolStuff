const {busPrices} = require("./harjotukset1")
describe.skip('bussi-testit', () => {
test('checks passanger age', () => {
    expect(busPrices(22)).toBe(1.5);
});
})