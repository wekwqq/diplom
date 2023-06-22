function add_lesson(id, items){
    let form=new FormData();
    form.append('lessonid', id);
    form.append('count', items);
    let request_options={method: 'POST', body: form};
    fetch('https://dp-suvorova.сделай.site/cart/create', request_options)
        .then(response=>response.text())
        .then(result=>{
            console.log(result)
            let title=document.getElementById('staticBackdropLabel');
            let body=document.getElementById('modalBody');
            if (result=='false'){
                title.innerText='Ошибка';
                body.innerHTML="<p>Ошибка записи на занятие. Вероятно, места уже закончились.</p>"
            } else {
                title.innerText='Информационное сообщение';
                body.innerHTML="<p>Вы успешно записаны на занятие!</p>"
            }
            let myModal = new
            bootstrap.Modal(document.getElementById("staticBackdrop"), {});
            myModal.show();
        })
}