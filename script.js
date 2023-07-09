function CalcolaFattoriale() {

    let fattoriale; 
    let numero= document.getElementById("number").value;
    
    const n = numero;
    
    if (numero < 0) {
    
    fattoriale ="il numero deve essere positivo!";
    
    } else {
    
        fattoriale = 1;
        while (numero > 1) {
        fattoriale *= numero;
        numero -= 1
        }
    } 
    
    document.getElementById("demo").innerHTML = fattoriale;
} 