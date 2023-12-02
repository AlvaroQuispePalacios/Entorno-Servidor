const formReservationInsertPreview = document.getElementById('formReservationInsertPreview');
// Customer
const formReservationInsertCustomerId = document.getElementById('formReservationInsertCustomerId');
const formReservationInsertPreviewCustomerId = document.getElementById('formReservationInsertPreviewCustomerId');


formReservationInsertCustomerId.addEventListener('change',(e) => {
    console.log(e.target.value);
    formReservationInsertPreviewCustomerId.textContent = e.target.value;
})

