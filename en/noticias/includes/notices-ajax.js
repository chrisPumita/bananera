// lo que sejecuta primero
$(document).ready(function () {
    console.log("Leyendo noticias");
    consultaNoticias();
});

//Contruye el Grid para el proyecto en especifico
function consultaNoticias(){
    $.ajax({
        url: "../list-notice-post.php",
        success: function (response) {
            //COnvertimos el string a JSON
            console.log(response);
            let objs = JSON.parse(response);
            if(objs.length>0){
                console.log(objs);
                let templateNav = listNav(objs);
                $('#listDateMenuNews').html(templateNav);
                let gridTemplate = gridNoticeRandom(objs);
                $('#containerNoticeRandom').html(gridTemplate);
            }
        }
    });
}

function listNav(objs) {
    let template = "";
    objs.forEach(
        obj=>{
            template += `<li><a href="${obj.link}" class="nav-link text-grey">${obj.date}</a></li>`;
        }
    );
    return template;
}

function gridNoticeRandom( objs) {
    let template = "";
    objs.forEach(
            obj=>{
                template += `
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">${obj.category}</strong>
                            <h3 class="mb-0 text-greybold">${obj.titulo}</h3>
                            <div class="mb-1 text-muted">${obj.date}</div>
                            <p class="mb-auto text-grey">${obj.preview_text}</p>
                            <a href="${obj.link}" class="stretched-link nav-link">Read more...</a>
                        </div>
                    </div>
                </div>
                `;
            }
        );
    return template;
}