/* Kirjoita koodi uudestaan vaihtamalla for-rakenne while rakenteeksi.

for (let i = 0; i < 3; i++) {
    console.log( ´Numero $(i)!´ );
} */


let i = 0; //alkuehto

while(i < 3) { // i < 3 on LOPPUEHTO
    console.log('numero $(i)!')
}

for(let i = 2; i <=10; i++) {
    if(i % 2 == 0) {
        console.log(i);
    }
}
// sama asia eri tavalla 
for(let i = 2; i <= 10; i = i + 2)
{
    console.log(i);
}