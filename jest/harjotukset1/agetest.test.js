const ageTest = require("./harjotukset1")

test('täysi ikäinen', () => {
    expect(ageTest).toBeGreaterThanOrEqual(18)
});

