const input = document.getElementById('firstname');
const inputs = document.getElementById('lastname');


input.addEventListener('input', function () {
    const inputValue = this.value;
    console.log(inputValue);  

    const lengthValue = inputValue.length;  
    console.log(lengthValue); 
    
    if (inputValue.length < 2) {
        this.style.border = '2px solid red';
    } else {
        this.style.border = '';
    }
});


inputs.addEventListener('input', function () {
    const inputsValue = this.value;
    console.log(inputsValue);  

    const lengthValue = inputsValue.length;  
    console.log(lengthValue); 
    
    if (inputsValue.length < 2) {
        this.style.border = '2px solid red';
    } else {
        this.style.border = '';
    }
});
