$('#myModal2').submit(function () {
    $('#myModal2').modal('hide');
});

$('#myModal2').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})


function openForm(x) {

    let y = 'thumb-';
    let z = y + x;
    let e = 'hidden-content-';
    let s = e + x;

    document.getElementById(z).style.display = 'none'
    document.getElementById(s).style.display = 'block'
    let cards = document.getElementsByClassName('thumbnail');
    for (let i = 0; i < cards.length; i++) {
        cards[i].style.height = '460px'
    }
}

function closeForm(x) {

    let y = 'thumb-';
    let z = y + x;
    let e = 'hidden-content-';
    let s = e + x;

    document.getElementById(z).style.display = 'block'
    document.getElementById(s).style.display = 'none'
    let cards = document.getElementsByClassName('thumbnail');
    for (let i = 0; i < cards.length; i++) {
        cards[i].style.height = '300px'
    }
}
