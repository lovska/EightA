function openChangeIndex() {
    document.getElementById('div_inp').style.display = 'block';
    document.getElementById('buttons').style.display = 'none';
}

function main_menu() {
    document.getElementById('div_inp').style.display = 'none';
    document.getElementById('buttons').style.display = 'block';
}

function changeIndex() {
    let important_val = document.getElementById('important');

    fetch('../index.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('imp').innerHTML = important_val.value;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function invalid() {
    document.getElementById('oh').style.display = 'flex';
}

function valid() {
    document.getElementById('oh').style.display = 'none';
    document.getElementById('auth').style.display = 'none';
    document.getElementById('buttons').style.display = 'block';
}