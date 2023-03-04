const fname = document.getElementById("fname");
const errName = document.querySelectorAll(".invalid-feedback")[0];
fname.addEventListener("keyup", ()=> {
    const fnameValue = fname.value;
    axios.get(`http://localhost/b78m/l11-formValidation/formValidation.php?fname=${fnameValue}`).then(res => {
        if(res.data.errName){
            fname.classList.add("is-invalid");
            errName.textContent = res.data.errName;
        }else{
            fname.classList.remove("is-invalid");
        }
    })
})