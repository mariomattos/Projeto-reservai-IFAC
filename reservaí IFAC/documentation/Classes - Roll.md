========== Classes ========== 

Booking(bookingId, bookingTime, bookingDate, user)

Inventory(items)

Item(itemId, itemName, itemDescription, itemQuantity)

Space(spaceId, spaceCondition, spaceName, spaceDescription, bookings, items)

super User(registrationId, userCpf, userBirthDate, userPassword, userEmail, userName) {
    sub Administrator(acessNumber);
    sub Student(educationLevel);
    sub Teacher(subject);
}


========== Relacionamentos ===========

--- Associação ---
User - Booking (Usuário e reserva existem independentemente um do outro);


--- Composição ---
Inventory - Item (Inventario não existe sem item, e Item é criado dentro do Inventario)


--- Agregação ---
Space - Booking (Espaço existe sem reservas, e várias reservas agregam espaço);
Space - Item (Espaco existe sem itens, e varios itens agregam o espaço);


========== Exemplos ===========

Associação - Fabricante existe sem celular existir, celular existe sem fabricante existir.

Composição - Características não existe sem usuário.

Agregação - Um local armazena vários objetos da mesma classe, porém não depende desses objetos pra existir.