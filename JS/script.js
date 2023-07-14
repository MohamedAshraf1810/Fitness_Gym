document.getElementById("myformmm").addEventListener("click", function(event)
{
    event.preventDefault()
});

function myFunction() 
{
    var Height = document.getElementById("Height").value;
    var Weight = document.getElementById("Weight").value;
    var BMI = Weight / (Height*Height);
    BMI=BMI.toFixed(2);
    console.log(BMI);
    document.getElementById("BMI").innerHTML = BMI;
    document.getElementById("section_6ContainerDiv3").style.visibility="visible";
}