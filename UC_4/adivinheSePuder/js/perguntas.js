/*
    ***definição do obj pergunta {pergunta:, resposta:}
*/

//objetoGame - representa o obj do jogo que possui
//pontuação e outras propriedades impotantes para o jogo

//criarPerguntas - cria uma propriedade para o objetoGame
//que é um vetor de perguntas
function criarPerguntas(objetoGame) {
    let Perguntas = new Array();

    Perguntas.push({
        pergunta: 'Qual a cor do céu',
        resposta: 'azul',
    });

    Perguntas.push({
        pergunta: 'Qual a cor do cavalo branco de Napoleão',
        resposta: 'branco',
    });

    objetoGame.Perguntas = Perguntas;
    objetoGame.totalDePerguntas = Perguntas.length;
} 