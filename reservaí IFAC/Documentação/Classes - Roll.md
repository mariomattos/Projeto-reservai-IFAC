----- Classes -----

//A chave primária de cada classe está entre dois asteriscos.

Características(*idCaracteristica*, nome, descricao, quantidade);

Condicao(*idCondicao*, estadoConservacao, observacaoGeral, dataUltimaVistoria);

Espaco(*idEspaco*, inventario, condicao, caracteristicas);

Inventario(*idInventario*, espaco, item, caracteristica);

Item (*idItem*, numPatrimonio, marcaEquipamento, modeloEquipamento, inventario, condicao, caracteristica);

Manutenção(*idManutencao*, dataInicio, dataFimPrevista, tecnicoResponsavel);

Reserva(*idReserva*, horarioReserva, espaco, usuario);

Usuario(*matriculaUsuario*, cpfUsuario, dataNascimentoUsuario, caracteristicas);


----- Associações -----

Associação simples:
Reserva - Usuario (Usuario e Reserva não dependem um do outro, mas se ligam).

Composição:
Espaco - Caracteristicas (Espaco->todo, Caracteristicas->parte);
Espaco - Condicao (Espaco->todo, Condicao->parte);
Inventario - Caracteristicas (Inventario->todo, Caracterisiticas->parte);
Item - Caracteristicas (Item->todo, Caracteristicas->parte);
Item - Condicao (Item->todo, Condicao->parte);
Usuario - Caracteristica (Usuario->todo, Caracteristica->parte).


Agregação:
Espaco - Inventario (Inventario não existe sem Espaco);
Item - Inventario (Inventario não existe sem Item);
Espaco - Reserva (Reserva não existe sem espaco).