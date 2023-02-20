const {ageTest} = require("./harjotukset1")

test('Age is 19, should return true)', () =>{
    expect(ageTest(19)).toBe(true);
});

test('Age is 15, should return false', () =>{
    expect(ageTest(15)).toBe(false);
});

test('Inserting a number as a string', () =>{
    expect(ageTest("16")).toBe(false);
});

test('Inserting a number as a string', () =>{
    expect(ageTest("20")).toBe(true);
});

test('Insertting nothing', () =>{
    expect(() => {ageTest()}).toThrow('No age was inserted');
});

test('Gives a negative number', ()=>{
    expect(() => {ageTest(-1)}).toThrow('No negative numbers');
});
