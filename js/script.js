var selects  = document.querySelectorAll("select"), 
selected = [];

function checkSelected() {
    
    selected = [];
    
    // Add the selected values to the array
     selects.forEach(function (select) {
         selected.push(select.value);
     });
    
    
    // re-Check each select
     selects.forEach(function (select) {
         // And each option of that select
         select.querySelectorAll("option").forEach(function (option) {
            // If this option is already selected, but by another select
            if (option.value && selected.indexOf(option.value) >= 0 && option.value != select.value) {
                option.disabled = true;
            } else {
                option.disabled = false;
            }
        });
     });
}


// Add addEventListener to each select
selects.forEach(function (select) {
    select.addEventListener("change", checkSelected);      
});
