
function generatecv(){
    let nameField = document.getElementById("nameField").value;

    let nameT = document.getElementById("nameT");

    nameT.innerHTML = nameField;

    let file=document.getElementById('imgField').files[0];

    console.log(file);

    let reader = new FileReader();

    reader.readAsDataURL(file);

    console.log(reader.result);
    reader.onloadend = function(){
    document.getElementById("imgTemplate").src = reader.result;
    };
    document.getElementById("contactT").innerHTML =document.getElementById("contactField").value;

    document.getElementById("destT").innerHTML =document.getElementById("designationField").value;

    document.getElementById("addressT").innerHTML =document.getElementById("addressField").value;

    document.getElementById("emailT").innerHTML =document.getElementById("emailField").value;

    document.getElementById("langT").innerHTML =document.getElementById("languageField").value;

    document.getElementById("objectiveT").innerHTML =document.getElementById("objectiveField").value;

    document.getElementById("fb1").innerHTML =document.getElementById("faceField").value;

    document.getElementById("git1").innerHTML =document.getElementById("gitField").value;

    document.getElementById("link1").innerHTML =document.getElementById("linkedField").value;

    document.getElementById("achT").innerHTML =document.getElementById("achieveField").value;

    document.getElementById("weT").innerHTML =document.getElementById("workField").value;

    document.getElementById("aqT").innerHTML =document.getElementById("acadField").value;
    
    document.getElementById("agT").innerHTML =document.getElementById("agField").value; 

    document.getElementById("hobT").innerHTML =document.getElementById("hobField").value; 

    document.getElementById("proT").innerHTML =document.getElementById("proField").value; 
    
    
    document.getElementById('cv-form').style.display='none';
    document.getElementById('resu1').style.display='block';
}





