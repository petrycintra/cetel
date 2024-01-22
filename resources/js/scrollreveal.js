// o a[href^="#"] seleciona apenas links com href="#alguma-coisa"
// atribuímos a função on e passamos o parâmetro click nela
$('.nav a[href^="#"]').on('click', function(e) {
    // o preventDefault(); serve para prevenir que o link funcione da forma padrão
    // que no caso seria "pulando" para o elemento com o id
    e.preventDefault();

    // crio um variável id e coloco o valor do atributo (attr) href nela.
    // eu quero o valor referente ao link que eu cliquei, por isso o $(this)
    var id = $(this).attr('href'),

    // crio outra variável com o valor offset do elemento que possui id
    // com o mesmo valor do link. Esse offset é a distância entre o elemento
    // e o topo da página, por isso o offset().top
    targetOffset = $(id).offset().top;

    // Seleciono os elementos html e body (por motivo de inconsistência entre browsers)
    // e atribuo a eles a função animate do CSS
    $('html, body').animate({
        // eu quero animar o scrollTop com o valor do meu offset
        // o - 100 serve para criar uma distância de 100px entre
        // o destino e o topo da página, assim o meu menu fixo não
        // cobre o conteúdo ao final do scroll. Esse valor vai depender
        // do tamanho do seu menu (e se você tem menu fixo ou não)
        scrollTop: targetOffset - 100

        // por último eu defino a velocidade da animação, neste caso 500ms
    }, 500);
    });