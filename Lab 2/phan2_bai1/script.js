let rowCount = 1;
let columnCount = 1;

const createTable = () => {
  const tableContainer = document.getElementById('table-container');

  if (tableContainer.querySelector('#table')) {
    alert('Table already exists!');
    return;
  }

  const newTable = document.createElement('table');
  newTable.id = 'table';
  newTable.classList.add('table', 'table-bordered', 'border-dark');

  const rowData = [`row${rowCount}, col${columnCount}`];
  columnCount++;
  const newColumn = newTable.insertRow(0).insertCell(0);
  newColumn.innerHTML = rowData[0];

  tableContainer.innerHTML = '';
  tableContainer.appendChild(newTable);
};

const addRow = () => {
  const table = document.getElementById('table');

  if (!table) {
    alert('No table found! Create a new one.');
    return;
  }

  const rowCount = table.rows.length;
  const columnCount = table.rows[0].cells.length;

  const newRow = table.insertRow(rowCount);
  
  for (let i = 0; i < columnCount; i++) {
    const newCell = newRow.insertCell(i);
    newCell.innerHTML = `row${rowCount + 1}, col${i + 1}`;
  }

  rowCount++;
};

const addColumn = () => {
  const table = document.getElementById('table');

  if (!table) {
    alert('No table found! Create a new one.');
    return;
  }

  const rowCount = table.rows.length;

  for (let i = 0; i < rowCount; i++) {
    const newRow = table.rows[i];
    const newCell = newRow.insertCell(newRow.cells.length);
    newCell.innerHTML = `row${i + 1}, col${columnCount}`;
  }

  columnCount++;
};

const deleteRow = () => {
  const table = document.getElementById('table');

  if (!table) {
    alert('No table found! Create a new one.');
    return;
  }

  const rowIndexInput = document.getElementById('row-del');
  const rowIndex = parseInt(rowIndexInput.value);

  if (isNaN(rowIndex) || rowIndex < 1 || rowIndex > table.rows.length) {
    alert('Please enter a valid row index to delete!');
    return;
  }

  table.deleteRow(rowIndex - 1);
};

const deleteColumn = () => {
  const table = document.getElementById('table');

  if (!table) {
    alert('No table found! Create a new one.');
    return;
  }

  const columnIndexInput = document.getElementById('col-del');
  const columnIndex = parseInt(columnIndexInput.value);

  if (isNaN(columnIndex) || columnIndex < 1 || columnIndex > table.rows[0].cells.length) {
    alert('Please enter a valid column index to delete!');
    return;
  }

  const rowCount = table.rows.length;

  for (let i = 0; i < rowCount; i++) {
    table.rows[i].deleteCell(columnIndex - 1);
  }
};

const deleteTable = () => {
  const table = document.getElementById('table');

  if (!table) {
    alert('No table found! Create a new one.');
    return;
  }

  const tableContainer = document.getElementById('table-container');
  tableContainer.removeChild(table);
};