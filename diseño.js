
function sortTable(columnIndex) {
    const table = document.getElementById("games-table");
    const rows = Array.from(table.getElementsByTagName("tr")).slice(1);

    const isNumeric = columnIndex === 3;

    // Ordenar las filas según los valores de la columna seleccionada
    rows.sort((rowA, rowB) => {
        // Obtener el valor de la columna de la fila A y de la fila B
        const valueA = rowA.getElementsByTagName("td")[columnIndex].innerText;
        const valueB = rowB.getElementsByTagName("td")[columnIndex].innerText;

        return isNumeric ? valueA - valueB : valueA.localeCompare(valueB);
    });

    // Rearreglar las filas en la tabla
    rows.forEach(row => table.appendChild(row));
}

// Agregar event listeners a los encabezados de columna para llamar a la función sortTable
document.addEventListener("DOMContentLoaded", function() {
    const headers = document.querySelectorAll("#games-table th");
    headers.forEach((header, index) => {
        header.addEventListener("click", function() {
            sortTable(index);
        });
    });
});
