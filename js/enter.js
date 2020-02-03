// this is the form in enter_new_record.php -
const bookform = document.querySelector('#bookform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const books_form = document.querySelector('#books');
// show the DIV if it is hidden
books_form.style.display = 'block';


// event handler
bookform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(bookform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        books_form.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='middle'><a href='enter_new_record.php'>return to the form.</a></p>"  +
        "<p class='middle'><a href='inventory_update.php'>view other responses.</a></p>"
        ;
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end bookform.onsubmit
