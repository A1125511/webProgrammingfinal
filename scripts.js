function showIframe(frameName) {
    const iframes = ['dataFrame', 'searchFrame', 'recommendFrame', '01Frame', '02Frame', 'bookFrame', 'cFrame'];
    //簡化程式碼

    // 全部頁面不顯示
    iframes.forEach(frame => {
        const iframe = document.getElementById(frame);
        iframe.style.display = 'none';

        // 重新加載指定的 iframe
        if (frame === frameName) {
            iframe.src = iframe.src; // 重新加载当前 iframe
        }
        //强制加載頁面,就是切換頁面的話,原本在看的頁面會恢復成初始狀態
    });

    // 只顯示传过来的 id 的页面
    document.getElementById(frameName).style.display = 'block';
}

function submitSearchForm() {
    const form = document.getElementById('searchForm');
    const searchFrame = document.getElementById('searchFrame');
    form.submit();
    searchFrame.src = 'search.php'; // 强制刷新搜索页面
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


