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


