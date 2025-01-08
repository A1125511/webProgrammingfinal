function showIframe(frameName){
    document.getElementById('dataFrame').style.display = 'none';
    document.getElementById('searchFrame').style.display = 'none';
    document.getElementById('recommendFrame').style.display = 'none';
    document.getElementById('01Frame').style.display = 'none';
    document.getElementById('02Frame').style.display = 'none';

    document.getElementById(frameName).style.display = 'block';
}

function submitSearchForm(){
    var form = document.getElementById('searchForm');
    form.submit();
    showIframe('searchFrame');
}

function Reset(event){
    event.preventDefault();
    const form = document.getElementById("filterform");
    form.reset();
    window.scrollTo(0,0)
}

function Submit(event){
    event.preventDefault();
    const form = document.getElementById("filterform");
}


