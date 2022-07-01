const keyword = document.getElementById('ajax-btn')
const container = document.getElementById('container')

keyword.addEventListener('click', function () {
    console.log(keyword.value)

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function (){
    if (ajax.readyState == 4 && ajax.status == 200) {
        container.innerHTML = ajax.responseText;
        }
    }

    ajax.open('GET', '../ajax/modal.php?keyword=' + keyword.value, true);
    ajax.send();
})

