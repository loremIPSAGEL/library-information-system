// Get the table
const table = document.getElementById("myTable");

// Submit button click event listener
document.getElementById("submitButton").addEventListener("click", function () {
  // Add the new row to the table
  const newRow = table.insertRow();
  // Add cells to the new row
  const cell1 = newRow.insertCell(0);
  const cell2 = newRow.insertCell(1);
  // Add values to the cells
  cell1.innerHTML = "New Cell 1";
  cell2.innerHTML = "New Cell 2";
  // Add the class to highlight the new row
  newRow.classList.add("highlight");
  // Remove the class after 5 seconds
  setTimeout(function () {
    newRow.classList.remove("highlight");
  }, 5000);
});
