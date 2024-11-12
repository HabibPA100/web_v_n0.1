const amountButtons = document.querySelectorAll('input[name="amount"]');
const formAmount = document.getElementById('form_amount');

// Loop through each button and add an event listener
amountButtons.forEach(button => {
    button.addEventListener('change', () => {
        // If 'Other' is selected, clear the input field
        if (button.value == "0") {
            formAmount.value = "";
            formAmount.placeholder = "Enter custom amount";
        } else {
            // Otherwise, set the input field to the selected value
            formAmount.value = button.value;
        }
    });
});