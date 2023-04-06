function ajouterLigne() {
    
    document.getElementById("codeabarre").value = "";
    document.getElementById("codepalette").value = "";
    
}

document.getElementById("emplacement").addEventListener("change", function() {
    var emplacement = document.getElementById("emplacement").value;
    var emplacementparzone = document.getElementById("emplacementparzone");

    // Réinitialiser les options de sélection
    emplacementparzone.innerHTML = "";

    // Ajouter les options de sélection appropriées
    if (emplacement == "Stock MP") {
        var option1 = document.createElement("option");
        option1.text = "zone1";
        option1.value = "zone1";
        emplacementparzone.add(option1);

        var option2 = document.createElement("option");
        option2.text = "zone2";
        option2.value = "zone2";
        emplacementparzone.add(option2);

        var option3 = document.createElement("option");
        option3.text = "zone3";
        option3.value = "zone3";
        emplacementparzone.add(option3);
    } else if (emplacement == "Stock PF") {
        var optionA = document.createElement("option");
        optionA.text = "zoneA";
        optionA.value = "zoneA";
        emplacementparzone.add(optionA);

        var optionB = document.createElement("option");
        optionB.text = "zoneB";
        optionB.value = "zoneB";
        emplacementparzone.add(optionB);

        var optionC = document.createElement("option");
        optionC.text = "zoneC";
        optionC.value = "zoneC";
        emplacementparzone.add(optionC);
    }else if (emplacement == "production") {
        var optionX = document.createElement("option");
        optionX.text = "Macchi1";
        optionX.value = "Macchi1";
        emplacementparzone.add(optionX);

        var optionY = document.createElement("option");
        optionY.text = "Macchi2";
        optionY.value = "Macchi2";
        emplacementparzone.add(optionY);

        var optionZ = document.createElement("option");
        optionZ.text = "Varex";
        optionZ.value = "Varex";
        emplacementparzone.add(optionZ);
    }
});