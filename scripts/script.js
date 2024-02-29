window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const valid = urlParams.get('valid');
    
    if (valid === 'false') {
        invalid();
        
        window.history.replaceState({}, document.title, window.location.pathname);
    }
};

function openChangeIndex() {
    document.getElementById('div_inp').style.display = 'block';
    document.getElementById('buttons').style.display = 'none';
}

function main_menu() {
    document.getElementById('div_inp').style.display = 'none';
    document.getElementById('buttons').style.display = 'block';
}

function invalid() {
    document.getElementById('oh').style.display = 'block';
}

function valid() {
    document.getElementById('oh').style.display = 'none';
    document.getElementById('auth').style.display = 'none';
    document.getElementById('buttons').style.display = 'block';
}
