document.addEventListener('DOMContentLoaded', function () {
    // Adiciono um evento de escuta no botão de expandir, quando houver um clique será acionado
    document.getElementById('btn-expandir').addEventListener('click', () => {
        // Se side-bar possui a class 'open-side-bar', é removida, se não possui, é adicionada, e o css expande o menu-lateral
        const isOpen = document.getElementById('side-bar').classList.toggle('open-side-bar');
        // Adiciono a classe 'expandido' as descrições dos elementos para alterar white-space para normal, permitindo quebra de linha
        const descriptions = document.querySelectorAll('.item-description');
        if(isOpen){
            setTimeout(() =>{
                descriptions.forEach(description => {description.classList.add('expandido')});
            },300)
        } else {
            descriptions.forEach(description => {description.classList.remove('expandido')});
        }
    });

    const items = document.querySelectorAll('.side-item');
    items.forEach(item =>{
        item.addEventListener('click', () =>{
            items.forEach(item => {item.classList.remove('active')});

            item.classList.add('active');
        });
    });

    document.getElementById('user').addEventListener('click', () => {
        document.getElementById('user-options').classList.toggle('active')
    })
});