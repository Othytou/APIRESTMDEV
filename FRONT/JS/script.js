import  {displayData}  from "./Display/displayData.js";

const button = document.querySelector('#button');
button.addEventListener('click', () => {
    displayData('test', 'h1')
    displayData('oii', 'p')
})