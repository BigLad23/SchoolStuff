const sum = require('./sum');
describe.skip('sum-testit', () => {
test('suorittaa yhteenlaskun 1 + 2, tulos 3', () => {
    expect(sum(1, 2)).toBe(3);
});

test('suorittaa yhteenlaskun 1 + 2, tulos 3', () => {
    expect(sum('1', '2')).toBe(3);
});

  test('syötteet merkkijonoja, heitetään poikkeus', () =>  {
    expect(() => {
        sum('roska', 'lapio')}).toThrow('anna parametreja');
});

  test('annetaan vain yksi parametri 3, tulos 3', () =>  {
      expect(sum(3)).toBe(3);
  });

 test('parametrit puuttuvat, heitetään poikkeus', () => {
    expect(()=> {
        sum()}).toThrow('ei parametreja');
 });
})