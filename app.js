// maakt een random kleuren code van 4 kleuren

const colors = ['yellow', 'blue', 'green', 'red', 'black', 'white'];
const colorCode = [];
let circleId = 0;
let rowId = 0;

while (colorCode.length < 4) {
    let randomColor = colors[Math.floor(Math.random() * colors.length)];
    let colorCount = colorCode.filter(color => color === randomColor).length;
    if (colorCount < 1) {
        colorCode.push(randomColor);
    }
}

console.log(colorCode)

function getColors(rowId) {  //fuctie zet de kleuren in een array
    let circles = []; // maakt lege array
    for (let i = 0; i < 4; i++) { //loopt 4x elke circle zijn kleur en stopt het in een array
        let currentCircle = document.getElementById(`circle-${rowId}-${i}`) // element pakt de value 0-3
        circles.push(currentCircle.style.backgroundColor);
    }
    return circles; //eindigt en stuurt de array naar waar het is aan gevraagd op line 17
}




window.changeCircle = function (element) {
    document.getElementById(`circle-${rowId}-${circleId}`).style.backgroundColor = element.style.backgroundColor;
    const circles = getColors(rowId);

    console.log(circles);

function gewonnenVerloren() {
    if (colorCode[0] === circles[0] &&
        colorCode[1] === circles[1] &&
        colorCode[2] === circles[2] &&
        colorCode[3] === circles[3]) {

        document.getElementById("popupbox").style.display = "flex";
        // document.getElementById("popupbox").innerHTML = "Je hebt gewonnen"
        document.getElementById('score').value = 10 - circles.length;

    } else if (rowId == 9 && circleId == 3) {
        document.getElementById("popupbox").style.display = "flex";
        document.getElementById("popupbox").innerHTML = "Je hebt verloren"
    }
}

gewonnenVerloren();
    // //methode om te checken of de kleuren goed zijn
    if (circleId === 3) { //checkt of circle 4 ingevult is
        let tempColors = [...colorCode];
        let pinColors = [];
        for (let i = 0; i < circles.length; i++) { //kijkt naar alle circles in de huidige geselecteerde rij en checkt per stuk of die gelijk is aan de color code
            if (circles[i] === tempColors[i]) {
                pinColors.push("red");
                    tempColors[i] = "";
                continue; //stopt en gaat verder met de volgende
            }
            //hints
            if(tempColors.includes(circles[i])) { //als de kleur er in zit
                pinColors.push("white")
                continue;
            }
            pinColors.push("gray")
            //als de kleur er niet inzit
            console.log("Foute gok")
        }


        pinColors.sort((a, b) => {
            if (a === 'red') {
                return -1;
                // a gaat voor b
            }
            if (b === 'red') {
                return 1;
                // b gaat voor a
            }
            if (a === 'white' && b === 'gray') {
                return -1; // a gaat voor b
            }
            if (a === 'gray' && b === 'white') {
                return 1;
                // b gaat voor a a
            } return 0;
        });

        for(let i = 0; i < 4; i++) {
            document.getElementById(`hint-circle-${rowId}-${i}`).style.backgroundColor = pinColors[i];
        }

        console.log(pinColors);

        rowId++; //als het niet klopt gaat het naar de volgende rij
        circleId = 0;
    } else {
        circleId++;
    }
}


//reset het naar de eerste cirlcel in de rij


// zorg er voor dat het scorebord  veranderd naar de spel uitleg.

window.explanationFunction = function () {
    if (document.getElementById("explanationbutton").innerHTML === "uitleg") {
        document.getElementById("scorebord").style.display = "none";
        document.getElementById("explanation").style.display = "flex";
        document.getElementById("explanationbutton").innerHTML = "scorebord";
    } else {
        document.getElementById("scorebord").style.display = "block";
        document.getElementById("explanation").style.display = "none";
        document.getElementById("explanationbutton").innerHTML = "uitleg";
    }
}

window.deleteFunction = function () {
    if (circleId == 0) return; // zorgt er voor dat je niet in de - komt
    circleId--;
    document.getElementById("row-" + rowId).children[circleId].style.backgroundColor = "gray"; //
}

//children haalt alle elementen (circels) uit de rij op door de [] met het cirleId geef je een circle aan

