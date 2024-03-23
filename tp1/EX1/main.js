function mettreEnMaj(tab) {
    let result = [];
    tab.forEach(mot => {
        let longueur = mot.length;
        let nouveauMot;
        if (longueur > 1) {
            nouveauMot = mot[0].toUpperCase() + mot.substring(1, longueur - 2).toLowerCase() + mot[longueur - 2].toUpperCase() + mot[longueur - 1].toLowerCase();
        } else {
            nouveauMot = mot.toUpperCase();
        }
        result.push(nouveauMot);
    });
    return result;
}

function transformer() {
    let inputString = document.getElementById('inputString').value;
    let tab = inputString.split(',');
    let resultat = mettreEnMaj(tab);
    document.getElementById('output').innerText = resultat.join(', ');
}

