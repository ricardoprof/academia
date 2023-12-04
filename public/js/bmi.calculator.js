/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI() {
    var weight = parseFloat(document.bmiCalc.weight.value);
    var height = parseFloat(document.bmiCalc.height.value);

    if (weight > 0 && height > 0) {
        var finalBmi = weight / (height * height);
        document.bmiCalc.bmi.value = finalBmi.toFixed(2);

        document.bmiCalc.bmi.value = finalBmi.toFixed(2);

        if (finalBmi < 18.5) {
            document.bmiCalc.meaning.value = "IMC abaixo do peso";
        } else if (finalBmi >= 18.5 && finalBmi < 25) {
            document.bmiCalc.meaning.value = "IMC normal";
        } else if (finalBmi >= 25 && finalBmi < 30) {
            document.bmiCalc.meaning.value = "IMC com excesso de peso";
        } else if (finalBmi >= 30 && finalBmi < 35) {
            document.bmiCalc.meaning.value = "IMC obeso";
        } else {
            document.bmiCalc.meaning.value = "IMC extremamente obeso";
        }
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}