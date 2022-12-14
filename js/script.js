fetch('listar.php').then(resultado => resultado.json()).then(registros => {
    //console.log(data);
    let cadena = '';
    registros.map(unaFila => {
        cadena += `
        <tr> 
            <td>${unaFila.id}</td>
            <td>${unaFila.usuario}</td>
            <td>${unaFila.nombre}</td>
            <td>${unaFila.nivel}</td>
            <td>${unaFila.email}</td>
            <td>${unaFila.telefono}</td>
            <td>${unaFila.marca}</td>
            <td>${unaFila.compania}</td>
            <td>${unaFila.saldo}</td>
            <td>${(unaFila.activo == 1) ? '<span class="badge rounded-pill bg-success">Activo </span>' : '<span class="badge rounded-pill bg-danger">Inactivo</span>'}</td>
            <td>${unaFila.fechaNacimiento}</td> 
        </tr>
        `
    });
    document.getElementById('tabla').innerHTML = cadena;
});

