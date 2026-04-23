Classes



\- Condicao(idCondicao, estadoConservacao, observacaoGeral, dataUltimaVistoria);

\- Espaço(maxPessoas, nomeEspaco, descricaoEspaco, **inventario**, **condicao**);

\- Inventario(idItem, nomeItem, quantidadeItem, descricaoItem, **espaco**);

\- Item(numPatrimonio, marcaEquipamento, modeloEquipamento, **inventario**, **condicao**);

\- Manutencao(idManutencao, dataInicio, dataFimPrevista, tecnicoResponsavel, **condicao**);



\- Reserva(ID, horario, espaco, **usuario**);

\- Usuario(nome, matricula, CPF, idade).



Negrito: referência de memória (associação)

