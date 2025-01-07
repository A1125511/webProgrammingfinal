function showIframe(frameName){
    document.getElementById('dataFrame').style.display = 'none';
    document.getElementById('searchFrame').style.display = 'none';
    document.getElementById('recommendFrame').style.display = 'none';

    document.getElementById(frameName).style.display = 'block';
}

function submitSearchForm(){
    var form = document.getElementById('searchForm');
    form.submit();
    showIframe('searchFrame');
}