function valueChanged() {
    if (document.getElementById('hasDifferentAddress').checked) {
        document.getElementById("billingAddress").style.display = 'block';
    } else {
        document.getElementById("billingAddress").style.display = 'none';
    }
}
